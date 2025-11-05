<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        $users = User::whereHas('role', function($query){
            $query->where('role_name', 'candidate');
        })->get();;

        return view('candidates.index', compact('candidates', 'users'));
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
        $candidate = new Candidate;
        $candidate->user_id = $request->user_id;
        $candidate->name = $request->name;
        $candidate->document = $request->document;
        $candidate->birthdate = $request->birthdate;
        $candidate->phone = $request->phone;
        $candidate->deparment = $request->deparment;
        $candidate->city = $request->city;
        $candidate->job_title = $request->job_title;
        $candidate->description = $request->description;
        $candidate->can_travel = $request->can_travel;

        $candidate->save();

        return redirect()->route("candidates.index");
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
        $candidate = Candidate::find($id);
        $users = User::all();

        return view('candidates.update', compact("candidate", "users"));
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
        $candidate = Candidate::find($id);
        $candidate->user_id = $request->user_id;
        $candidate->name = $request->name;
        $candidate->document = $request->document;
        $candidate->birthdate = $request->birthdate;
        $candidate->phone = $request->phone;
        $candidate->deparment = $request->deparment;
        $candidate->city = $request->city;
        $candidate->job_title = $request->job_title;
        $candidate->description = $request->description;
        $candidate->can_travel = $request->can_travel;

        $candidate->save();

        return redirect()->route("candidates.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = Candidate::find($id);
        $candidate->delete();

        return redirect()->route("candidates.index");
    }
}
