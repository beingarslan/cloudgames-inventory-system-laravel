<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCloudgamesPackageRequest;
use App\Http\Requests\UpdateCloudgamesPackageRequest;
use App\Models\CloudgamesPackage;

class CloudgamesPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCloudgamesPackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCloudgamesPackageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CloudgamesPackage  $cloudgamesPackage
     * @return \Illuminate\Http\Response
     */
    public function show(CloudgamesPackage $cloudgamesPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CloudgamesPackage  $cloudgamesPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(CloudgamesPackage $cloudgamesPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCloudgamesPackageRequest  $request
     * @param  \App\Models\CloudgamesPackage  $cloudgamesPackage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCloudgamesPackageRequest $request, CloudgamesPackage $cloudgamesPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CloudgamesPackage  $cloudgamesPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CloudgamesPackage $cloudgamesPackage)
    {
        //
    }
}
