<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteDataRequest;
use App\Http\Requests\UpdateSiteDataRequest;
use App\Models\SiteData;

class SiteDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        
        return view("crud.createData",[
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteDataRequest $request)
    {
        $validated = $request->validated();

        
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/logos', $filename);
            $validated['logo'] = 'public/logos/' . $filename;
        }
        $validated = array_filter($validated, function ($value) {
            return !is_null($value) && $value !== '';
        });
        $siteData = SiteData::first();
        if ($siteData) {
            $siteData->update($validated);
        } else {
            SiteData::create($validated);
        }

        return redirect()->back()->with('success', 'اطلاعات سایت با موفقیت ذخیره شد!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(SiteData $siteData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteData $siteData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteDataRequest $request, SiteData $siteData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteData $siteData)
    {
        //
    }
}
