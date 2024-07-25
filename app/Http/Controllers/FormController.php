<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.forms.index', [
            'datas' => Form::all()
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
    public function store(StoreFormRequest $request)
    {
        $validated = $request->validated();
        DB::beginTransaction();

        try {
            Form::create($validated);
            DB::commit();
            return redirect(route('forms.index'))->with('added', 'Data has been added succesfully');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('forms.index'))->with('error', 'Failed to add form: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        $validated = $request->validated();
        DB::beginTransaction();

        try {
            $form->update($validated);
            DB::commit();
            return redirect(route('forms.index'))->with('saved', 'Data updates has been saved');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('forms.index'))->with('error', 'Failed to update form: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        DB::beginTransaction();

    try {
        $form->delete();
        DB::commit();
        return redirect(route('forms.index'))->with('deleted', 'Data has been deleted');

    } catch (\Exception $e) {
        DB::rollBack(); 
        return redirect(route('forms.index'))->with('error', 'Failed to delete form: ' . $e->getMessage());
    }
    }
}
