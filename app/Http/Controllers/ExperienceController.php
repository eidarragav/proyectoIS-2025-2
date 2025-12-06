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

        return back();
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

        if(auth()->user()->role_id == 3){
            return redirect()->route("experiences.index");
        }
        return redirect()->route("candidate.dashboard");
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


        if(auth()->user()->role_id == 3){
            return redirect()->route("experiences.index");
        }
        return redirect()->route("candidate.dashboard");
    }

    public function create_experience_candidate($id)
    {
        $candidate = Candidate::findOrFail($id);

        return view('candidates.add_experiences.index', compact('candidate'));
    }

    public function storeExperienceCandidate(Request $request)
{
    $request->validate([
        'job_title' => 'required',
        'company' => 'required',
        'functions' => 'required',
        'status' => 'required',
        'start_date' => 'required|date',
        'finish_date' => 'nullable|date',
        'candidate_id' => 'required|exists:candidates,id',
    ]);

    Experience::create($request->all());

    return redirect()->back()->with('success', 'Experiencia agregada correctamente.');
}

public function editExperienceCandidate($id){
    $experience = Experience::findOrFail($id);
    $candidate = auth()->user()->candidate;

    return view('candidates.add_experiences.edit', compact('experience', 'candidate'));
}

public function updateExperienceCandidate(Request $request, $id){
    $experience = Experience::findOrFail($id);

    // usar el candidate del usuario autenticado para mayor seguridad
    $candidate = auth()->user()->candidate;
    if ($experience->candidate_id !== $candidate->id) {
        abort(403);
    }

    $data = $request->validate([
        'job_title' => 'required|string',
        'company' => 'required|string',
        'functions' => 'nullable|string',
        'status' => 'nullable|string',
        'start_date' => 'nullable|date',
        'finish_date' => 'nullable|date|after_or_equal:start_date',
        // candidate_id no es necesario validarlo desde formulario, puedes forzarlo:
    ]);

    $data['candidate_id'] = $candidate->id; // asegurar relación
    $experience->update($data);

    return redirect()->route('candidate.dashboard');
}
}
