<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\IncomingRequest;
use App\Http\Requests\StoreIncomingRequestRequest;
use App\Http\Requests\UpdateIncomingRequestRequest;

class IncomingRequestController extends Controller
{
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
            'form' => $form
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
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8192', // Validate image, max 8MB (8192 KB)
        ]);

        $validated['status'] = 'new';
        $validated['slug'] = Str::orderedUuid();

        if(!$request->receiver_id) {
            $validated['receiver_id'] = $request->requestor_id;
        }

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('public/pictures'); // Store in public directory
            $validated['picture'] = str_replace('public/', '', $path); // Remove 'public/' from the path
        }

        IncomingRequest::create($validated);

        return redirect()->route('requests.index')->with('success', 'Request submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $data = IncomingRequest::where('slug', $slug)->first();
        return view('pages.requests.show', ['data' => $data]);
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
    public function update(UpdateIncomingRequestRequest $request, IncomingRequest $incomingRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncomingRequest $incomingRequest)
    {
        //
    }
}
