<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Offer;
use App\Models\Application;
use App\Routes\Web;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies= Company::all();
        $users = User::whereHas('role', function($query){
            $query->where('role_name', 'company');
        })->get();
        return view('companies.index',compact('companies','users'));

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
        $companies = new Company;
        $companies->user_id = $request->user_id;
        $companies->name =  $request->name;
        $companies->sector =  $request->sector;
        $companies->phone =  $request->phone;
        $companies->city =  $request->city;
        $companies->adress =  $request->adress;
        $companies->description =  $request->description;
        $companies->website =  $request->website;

        $companies->save();

        return redirect()->route('companies.index');

    }

    public function storeOfferCompany(Request $request)
    {
        $company = Company::where('user_id', Auth::user()->id)->first();
        $company_id = $company->id;
        $offers =  new Offer;
        $offers->id = $request->id;
        $offers->company_id = $company_id;
        $offers->title = $request->title;
        $offers->description = $request->description;
        $offers->salary = $request->salary;
        $offers->work_modality = $request->work_modality;
        $offers->type_contract = $request->type_contract;
        $offers->save();

        return redirect()->route('company.dashboard');

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
        $company= Company::find($id);
        $users= User::all();

        return view('companies.update', compact('company', 'users'));
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
        $company= Company::find($id);
        $company->user_id =$request->user_id;
        $company->name =  $request->name;
        $company->sector =  $request->sector;
        $company->phone =  $request->phone;
        $company->city =  $request->city;
        $company->adress =  $request->adress;
        $company->description =  $request->description;
        $company->website =  $request->website;;
        $company->save();

        return redirect()->route('companies.index');
    }

    public function updateProfile(Request $request, $id)
    {
        $company= Company::find($id);
        $company->user_id =$request->user_id;
        $company->name =  $request->name;
        $company->sector =  $request->sector;
        $company->phone =  $request->phone;
        $company->city =  $request->city;
        $company->adress =  $request->adress;
        $company->description =  $request->description;
        $company->website =  $request->website;;
        $company->save();

        return redirect()->route('company.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('companies.index');


    }

  public function dashboard(){
    $company = Company::where('user_id', Auth::id())->first();
    
    $offers = Offer::where('company_id', $company->id)->get();
    $companyOfferIds = $offers->pluck('id')->toArray();
    $user_id = Auth::user()->id;
    $applicationsInOffer = Application::whereIn('offer_id', $company->offer()->pluck('id'))->get();

    $totalPostulaciones = 0;
    $postulacionesRevision = 0;
    $postulacionesAceptadas = 0;

    foreach ($offers as $offer) {

        $applications = Application::where('offer_id', $offer->id)->get();
        foreach ($applications as $application) {
            $totalPostulaciones++;
            if ($application->status === 'under_review') {
                $postulacionesRevision++;
            }
            if ($application->status === 'selected') {
                $postulacionesAceptadas++;
            }
        }
    }


        if (! $company) {
            return redirect()->route('login')->with('error', 'Empresa no encontrada.');
        }

        $raw = Application::whereIn('offer_id', $companyOfferIds)
    ->selectRaw("MONTH(COALESCE(application_date, created_at)) as month, COUNT(*) as total")
    ->whereRaw("YEAR(COALESCE(application_date, created_at)) = ?", [date('Y')])
    ->groupByRaw("MONTH(COALESCE(application_date, created_at))")
    ->orderByRaw("MONTH(COALESCE(application_date, created_at))")
    ->get()
    ->keyBy('month');

        $months = [
            1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
            5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
            9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre',
        ];

        $applicationsPerMonth = [];
        foreach ($months as $num => $name) {
            $applicationsPerMonth[] = [
                'month' => $num,
                'month_name' => $name,
                'total' => isset($raw[$num]) ? (int)$raw[$num]->total : 0,
            ];
        }

    return view('companies.dashboard.index', compact(
    'totalPostulaciones',
    'postulacionesRevision',
    'postulacionesAceptadas',
    'company',
    'offers', 'applicationsInOffer', 'applicationsPerMonth'));
    }





    public function complete_profile(){
        return view("companies.complete_profile.index");
    }

    public function save_profile(Request $request){

        $companies = new Company;
        $companies->user_id = Auth::user()->id;
        $companies->name =  $request->name;
        $companies->sector =  $request->sector;
        $companies->phone =  $request->phone;
        $companies->city =  $request->city;
        $companies->adress =  $request->adress;
        $companies->description =  $request->description;
        $companies->website =  $request->website;



        $companies->save();
        return redirect()->route("company.dashboard");
    }

    public function published_offers(){
    $company = Company::where('user_id', Auth::id())->first();
    $offers = $company->offer; 

    return view("companies.published_offers.index", compact('offers'));
    }


   public function recieved_applications(){
    $company = Company::where('user_id', Auth::user()->id)->first();
    $applications = Application::with('candidate','offer')->whereIn('offer_id', $company->offer->pluck('id'))->get();
    $stateColors = [
        'sent' => 'bg-secondary',
        'select' => 'bg-success',
        'refused' => 'bg-danger',
        'under_review' => 'bg-warning text-dark',
    ];


    return view("companies.recieved_applications.index", compact('company','applications', 'stateColors'));
    }


   public function profile() {
    // Editar información del perfil en el dashboard
        $id = Auth::user()->id;
        $company = Company::where('user_id', Auth::user()->id)->first();
        $users= User::all();
        return view('Companies.dashboard.edit', compact('company', 'users'));
    }

    public function offer() {
        //llama a la vista de agregar ofertas
        return view('companies.dashboard.offers.store');
    }

    public function company_delete_offer($id){
        // eliminar Ofertass
        $offer= Offer::find($id);
        $offer->delete();
        return redirect()->route('company.dashboard');
    }

    //  rutas para llamar a la vista y el metodom para editar una oferta publicada por la oferta 
    public function company_edit_offer_view($id) {
        $offer = Offer::find($id);
        $company = Company::where('user_id', Auth::id())->first();
        $companies = $company;

        return view("Companies.dashboard.offers.edit", compact('offer','companies'));
    }

    public function company_update_offer(Request $request, $id){
        $offer = Offer::find($id);

        $company = Company::where('user_id', Auth::id())->first();
        $offer->company_id = $company->id;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->salary = $request->salary;
        $offer->work_modality = $request->work_modality;
        $offer->type_contract = $request->type_contract;

        $offer->save();

        return redirect()->route('company.dashboard');
    }

        // Ruta para eliminar una postulación o rechazarla 
    public function deletePostulation($id){
        $applications = Application::find($id);
        $applications->delete();
        return redirect()->route("company.dashboard");
    }

    // Rutas para el edit y update de postulaciones, cambiar el estado
    public function company_edit_application_view($id) {
        $application = Application::find($id);
        $company = Company::where('user_id', Auth::id())->first();
        $companies = $company;

        return view("Companies.dashboard.applications.edit", compact('application','companies'));
    }

    public function company_update_application(Request $request, $id){
        $application = Application::find($id);
        $company = Company::where('user_id', Auth::id())->first();
        $application->status = $request->status;

        $application->save();

        return redirect()->route("company.dashboard");
    }

    
}

