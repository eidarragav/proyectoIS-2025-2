<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Company;
use App\Routes\Web;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers= Offer::all();
        $companies= Company::all();
        return view('offers.index',compact('offers','companies'));
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
        $offers =  new Offer;
        $offers->id = $request->id;
        $offers->company_id = $request->company_id;
        $offers->title = $request->title;
        $offers->description = $request->description;
        $offers->salary = $request->salary;
        $offers->work_modality = $request->work_modality;
        $offers->type_contract = $request->type_contract;
        $offers->save();

        return redirect()->route('offers.index');
        

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
        $offer = Offer::find($id);
        $companies= Company::all();
        return view('offers.update', compact('offer','companies'));
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
        $offer= Offer::find($id);
        $offer->id = $request->id;
        $offer->company_id = $request->company_id;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->salary = $request->salary;
        $offer->work_modality = $request->work_modality;
        $offer->type_contract = $request->type_contract;
        $offer->save();

        return redirect()->route('offers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer= Offer::find($id);
        $offer->delete();
        return redirect()->route('offers.index');
    }
}
