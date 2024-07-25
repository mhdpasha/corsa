<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.users.index', [
            'users' => User::where('isDeleted', null)->get()
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
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $validated['view_password'] = $request->password;

        DB::beginTransaction();

        try {
            User::create($validated);
            DB::commit();
            return redirect(route('users.index'))->with('added', 'Data has been added successfully');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('users.index'))->with('error', 'Failed to add form: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $validated = $request->validated();
        DB::beginTransaction();
        try {
            $user->update($request->all());
            DB::commit();
            return redirect(route('users.index'))->with('saved', 'Data updates has been saved');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('users.index'))->with('error', 'Failed to add form: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();

        try {
            $user->update([
                'email' => null,
                'isDeleted' => true,
            ]);
            DB::commit();

            return redirect(route('users.index'))->with('deleted', 'Data has been deleted');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('users.index'))->with('error', 'Failed to add form: ' . $e->getMessage());
        }
        
    }

    public function csv(Request $request)
    {
        dd($request);
    }
}
