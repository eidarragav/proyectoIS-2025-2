<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Candidate;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $experiences = Experience::all();
        $candidates = Candidate::all();

        return view("experiences.index", compact("experiences","candidates"));
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
        $experience = new Experience;
        $experience->job_title = $request->job_title;
        $experience->company = $request->company;
        $experience->functions = $request->functions;
        $experience->status = $request->status;
        $experience->start_date = $request->start_date;
        $experience->finish_date = $request->finish_date;
        $experience->candidate_id = $request->candidate_id;

        $experience->save();

        return redirect()->route("experiences.index");
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
        $experience = Experience::find($id);
        $candidates = Candidate::all();

        return view("experiences.update", compact("experience", "candidates"));
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
        $experience = Experience::find($id);
        $experience->job_title = $request->job_title;
        $experience->company = $request->company;
        $experience->functions = $request->functions;
        $experience->status = $request->status;
        $experience->start_date = $request->start_date;
        $experience->finish_date = $request->finish_date;
        $experience->candidate_id = $request->candidate_id;

        $experience->save();

        return redirect()->route("experiences.index");
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
        $experience = Experience::find($id);
        $experience->delete();

        return redirect()->route("experiences.index");
    }
}
