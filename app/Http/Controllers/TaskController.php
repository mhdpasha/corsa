<?php

namespace App\Http\Controllers;

use App\Models\IncomingRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = IncomingRequest::where('receiver_id', auth()->user()->id)->get();

        return view('pages.task.index', [
            'tasks' => $tasks
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(IncomingRequest $incomingRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncomingRequest $incomingRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncomingRequest $incomingRequest)
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
