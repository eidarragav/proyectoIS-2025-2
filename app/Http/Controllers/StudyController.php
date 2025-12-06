<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Study;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::all();
        $candidates = Candidate::all();

        return view("studies.index", compact("studies", "candidates"));
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
        $study = new Study;
        $study->candidate_id = $request->candidate_id;
        $study->study_level = $request->study_level;
        $study->institution = $request->institution;
        $study->study_name = $request->study_name;
        $study->status = $request->status;
        $study->start_date = $request->start_date;
        $study->finish_date = $request->finish_date;

        $study->save();

        return redirect()->route("studies.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $study = Study::find($id);
        $candidates = Candidate::all();

        return view("studies.update", compact("study", "candidates"));
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
        $study = Study::find($id);
        $study->candidate_id = $request->candidate_id;
        $study->study_level = $request->study_level;
        $study->institution = $request->institution;
        $study->study_name = $request->study_name;
        $study->status = $request->status;
        $study->start_date = $request->start_date;
        $study->finish_date = $request->finish_date;

        $study->save();

        return redirect()->route("studies.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study = Study::find($id);
        $study->delete();

        return redirect()->route("studies.index");
    }
}
