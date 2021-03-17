<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CountryBank;
use Illuminate\Http\Request;

class CountryBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.country-banks.index', [
            'banks' => CountryBank::with('country')
                                    ->orderBy('id', 'DESC')
                                    ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.country-banks.create', [
            'countries' => Country::orderby('created_at', 'DESC')
                                    ->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'country' => 'required|exists:countries,id',
            'bank_name' => 'required',
            'currency'  => 'required',
            'is_applicable' => 'required',
            'transfer_fee'   => 'required_if:is_applicable,'. 1,
        ], [
            'required_if' => 'The tranfer fee field is required when is transfer fee applicable is yes.'
        ]);
        CountryBank::create([
            'country_id' => $request->country,
            'bank_name'  => $request->bank_name,
            'currency'   => $request->currency,
            'is_transfer_fee_apply' => $request->is_applicable,
            'transfer_fee'   => $request->transfer_fee
        ]);
        return redirect()
                ->route('admin.country-banks.index')
                ->with('created' , $request->bank_name. ' bank add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountryBank  $countryBank
     * @return \Illuminate\Http\Response
     */
    public function show(CountryBank $countryBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CountryBank  $countryBank
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryBank $countryBank)
    {
        return view('admin.pages.country-banks.edit', [
            'bank' => $countryBank,
            'countries' => Country::orderby('created_at', 'DESC')
                                    ->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountryBank  $countryBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryBank $countryBank)
    {
        $this->validate($request, [
            'country' => 'required|exists:countries,id',
            'bank_name' => 'required',
            'currency'  => 'required',
            'is_applicable' => 'required',
            'transfer_fee'   => 'required_if:is_applicable,'. 1,
        ]);
        $data = $countryBank;
        $data->country_id = $request->country;
        $data->bank_name  = $request->bank_name;
        $data->currency   = $request->currency;
        if($request->is_applicable == 1)
        {
            $fee = $request->transfer_fee;
        }
        else
        {
            $fee = null;
        }
        $data->is_transfer_fee_apply = $request->is_applicable;
        $data->transfer_fee   = $fee;
        $data->save();
        return redirect()
            ->route('admin.country-banks.index')
            ->with('updated' , $countryBank->bank_name. ' bank updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountryBank  $countryBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryBank $countryBank)
    {
        $countryBank->delete();
        return redirect()
            ->route('admin.country-banks.index')
            ->with('removed' , $countryBank->bank_name. ' bank removed successfully.');
    }
}
