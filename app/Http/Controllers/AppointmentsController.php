<?php

namespace App\Http\Controllers;

use App\Models\appointments;
use App\Http\Requests\StoreappointmentsRequest;
use App\Http\Requests\UpdateappointmentsRequest;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreappointmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateappointmentsRequest $request, appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointments $appointments)
    {
        //
    }
}
