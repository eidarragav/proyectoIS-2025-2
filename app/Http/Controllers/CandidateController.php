<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Application;
use App\Models\Offer;
use App\Models\Studie;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;



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

    public function dashboard(){
        $user_id = Auth::user()->id;
        $candidate = Candidate::where('user_id', $user_id)->first();
        $candidateId = auth()->user()->candidate->id;

        $sent = $candidate->application()->where('status', 'sent')->count();
        $under_review = $candidate->application()->where('status', 'under_view')->count();
        $selected = $candidate->application()->where('status', 'selected')->count();
        $studies = $candidate ? $candidate->study : collect();
        $experiences = $candidate ? $candidate->experience : collect();

        $raw = \DB::table('applications')
        ->selectRaw('MONTH(application_date) as month, COUNT(*) as total')
        ->where('candidate_id', $candidateId)
        ->whereYear('application_date', date('Y')) // opcional: limitar al año actual
        ->groupBy('month')
        ->orderBy('month')
        ->get()
        ->keyBy('month');

        $months = [
        1 => "Enero",2 => "Febrero",3 => "Marzo",4 => "Abril",
        5 => "Mayo",6 => "Junio",7 => "Julio",8 => "Agosto",
        9 => "Septiembre",10 => "Octubre",11 => "Noviembre",12 => "Diciembre",
        ];

        $applicationsPerMonth = collect();
        foreach ($months as $num => $name) {
            $applicationsPerMonth->push([
                'month' => $num,
                'month_name' => $name,
                'total' => $raw[$num]->total ?? 0,
        ]);
    }

        return view('candidates.dashboard.index', compact('candidate', 'sent', 'under_review', 'selected', 'studies', 'experiences', 'applicationsPerMonth'));
    }

    public function editProfile(){
        $user_id = Auth::user()->id;
        $candidate = Candidate::where('user_id', $user_id)->first();

        return view('candidates.edit_profile.index', compact('candidate'));
    }

    public function updateProfile(Request $request){
        $user_id = Auth::user()->id;
        $candidate = Candidate::where('user_id', $user_id)->first();

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

        return redirect()->route('candidate.dashboard');
    }

    public function complete_profile(){
        return view('candidates.complete_profile.index');
    }

    public function save_profile(Request $request){ 
        $candidate = new Candidate;
        $candidate->user_id = Auth::user()->id;
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
        
        return redirect()->route('candidate.dashboard');
    }

    public function show_offers(){
        $offers = Offer::all();
        return view('candidates.myoffers.index', compact('offers'));
    }

    public function show_applications()
    {
        $candidate = auth()->user()->candidate;

        $applications = Application::with('offer')
            ->where('candidate_id', $candidate->id)
            ->get();

        return view('candidates.my_applications.index', compact('applications'));
    }

    // Función para generar el pdf de todas las ofertas a las que se ha postulado el candidato
    public function applicationsPdf(){

         $candidate = Candidate::where('user_id', Auth::user()->id)->first();

        $applications = Application::with('offer.company')
            ->where('candidate_id', $candidate->id)
            ->get();

        // Renderizar la vista en HTML
        $pdf = Pdf::loadView('candidates.pdf.aplications_pdf', compact('applications', 'candidate'));
        return $pdf->stream('postulaciones.pdf');


    }
    public function addStudies($id)
        {
            $candidate = Candidate::findOrFail($id);

            return view('candidates.add_studies.index', compact('candidate'));
        }

    public function myApplications()
        {
            $candidate = auth()->user()->candidate;

            $applications = Application::with('offer')
                ->where('candidate_id', $candidate->id)
                ->get();

            return view('candidates.my_applications.index', compact('applications'));
        }
}
    
