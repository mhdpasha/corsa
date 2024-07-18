<?php

namespace App\Http\Controllers;

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
        return view('pages.requests.index', [
            'datas' => IncomingRequest::all()
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
    public function store(StoreIncomingRequestRequest $request)
    {
        //
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
