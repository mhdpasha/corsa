<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'total' => IncomingRequest::count(),
            'active' => IncomingRequest::whereNotIn('status', ['cleared', 'new'])->count(),
            'new' => IncomingRequest::where('status', 'new')->count(),
            'cleared' => IncomingRequest::where('status', 'cleared')->count(),
            'latest' => IncomingRequest::orderByDesc('created_at')->limit(5)->get()
        ];

        $requests = IncomingRequest::where('status', 'new')->limit(10)->get();

        $tasks = IncomingRequest::where('receiver_id', auth()->user()->id)
                                ->whereIn('status', ['assigned', 'accepted'])->get();

        return view('pages.dashboard.index', compact(['data', 'requests', 'tasks']));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
