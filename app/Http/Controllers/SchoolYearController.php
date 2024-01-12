<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolYear;

class SchoolYearController extends Controller
{
    protected $school_year;
    public function __construct() {
        $this->school_year = new SchoolYear();
    }

    public function index()
    {
        return $this->school_year->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->school_year->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $school_year = $this->school_year->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $school_year = $this->school_year->find($id);
        $school_year->update($request->all());
        return $school_year;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school_year = $this->school_year->find($id);
        return $school_year->delete();
    }
}