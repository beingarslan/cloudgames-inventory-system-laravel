<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCloudgamesInventoryRequest;
use App\Http\Requests\UpdateCloudgamesInventoryRequest;
use App\Models\CloudgamesInventory;

class CloudgamesInventoryController extends Controller
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
     * @param  \App\Http\Requests\StoreCloudgamesInventoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCloudgamesInventoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CloudgamesInventory  $cloudgamesInventory
     * @return \Illuminate\Http\Response
     */
    public function show(CloudgamesInventory $cloudgamesInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CloudgamesInventory  $cloudgamesInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(CloudgamesInventory $cloudgamesInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCloudgamesInventoryRequest  $request
     * @param  \App\Models\CloudgamesInventory  $cloudgamesInventory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCloudgamesInventoryRequest $request, CloudgamesInventory $cloudgamesInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CloudgamesInventory  $cloudgamesInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CloudgamesInventory $cloudgamesInventory)
    {
        //
    }
}
