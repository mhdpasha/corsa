<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\IncomingRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreIncomingRequestRequest;
use App\Http\Requests\UpdateIncomingRequestRequest;
use App\Traits\CheckStatus;

class IncomingRequestController extends Controller
{

    use CheckStatus;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkUserRequest = IncomingRequest::with(['requestor', 'receiver'])
                                ->where('requestor_id', auth()->user()->id)
                                ->where('status', '!=', 'cleared')
                                ->get();

                                
        $form = Form::all();

        return view('pages.requests.index', [
            'request' => $checkUserRequest,
            'form' => $form,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'requestor_id' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);

        $validated['status'] = 'new';
        $validated['slug'] = Str::orderedUuid();

        if(!$request->receiver_id) {
            $validated['receiver_id'] = $request->requestor_id;
        }

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('public/pictures');
            $validated['picture'] = str_replace('public/', '', $path);
        }

        DB::beginTransaction();

        try {
            IncomingRequest::create($validated);
            DB::commit();

            return redirect(route('requests.index'))->with('added', 'New request has been saved');
            
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect(route('requests.index'))->with('error', 'Failed to add form: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $data = IncomingRequest::where('slug', $slug)->first();

        $excluded = [auth()->id(), $data->requestor_id];
        $users = User::whereNotIn('id', $excluded)->get();

        return view('pages.requests.show',[
            'data' => $data,
            'users' => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncomingRequest $incomingRequest)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $incomingRequest    = IncomingRequest::find($request->request_id);

        $this->taskIsClear($incomingRequest, $request);

        if($incomingRequest->status != 'new') {
            return redirect(url("requests/{$request->slug}?failQuery=true"));
        }
        
        $sender             = User::find(auth()->id());
        $assigned           = User::find($request->receiver_id);
        
        $incomingRequest->update([
            'receiver_id' => $request->receiver_id,
            'status' => 'assigned'
        ]);

        Message::create([
            'user_id' => $sender->id,
            'request_id' => $request->request_id,
            'content' => "[ SYSTEM ] " . date('d-m-Y H:i:s') . ": {$sender->name} has assigned this request to {$assigned->name}"
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncomingRequest $incomingRequest)
    {
        //
    }
}
