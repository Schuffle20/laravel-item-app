<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use App\Models\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $persons = People::all();
        return view('person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeopleRequest $request)
    {
        //
        $person = new People();
        $person->name = $request->name;
        $person->save();

        return redirect()->route('person.index')->with('success', 'person created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeopleRequest $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        //
    }
}
