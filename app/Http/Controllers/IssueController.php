<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreissueRequest;
use App\Http\Requests\UpdateissueRequest;
use App\Models\issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::all();
        return response()->json($issues);
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
    public function store(StoreissueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateissueRequest $request, issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(issue $issue)
    {
        //
    }
}
