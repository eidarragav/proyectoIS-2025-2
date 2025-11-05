<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Offer;
use App\Models\Candidate;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applications = Application::all();
        $candidates = Candidate::all();
        $offers = Offer::all();

        return view("applications.index", compact("applications","candidates", "offers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $application = new Application;
        $application->offer_id = $request->offer_id;
        $application->candidate_id = $request->candidate_id;
        $application->application_date = $request->application_date;
        $application->status = $request->status;


        $application->save();

        return redirect()->route("applications.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $application = Application::find($id);
        $candidates = Candidate::all();
        $offers = Offer::all();

        return view("applications.update", compact("application","candidates", "offers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $application = Application::find($id);
        $application->offer_id = $request->offer_id;
        $application->candidate_id = $request->candidate_id;
        $application->application_date = $request->application_date;
        $application->status = $request->status;


        $application->save();

        return redirect()->route("applications.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $applications = Application::find($id);
        $applications->delete();
        return redirect()->route("applications.index");
    }
}
