<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Routes\Web;

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
}
