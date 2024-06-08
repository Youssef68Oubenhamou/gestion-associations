<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $associations = \App\Models\User::all()->where("user_type" , "association") ;

        return view("admin-association.index" , compact("associations")) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        
        $offers = \App\Models\Offer::where("user_id" , "=" , $id) ;

        return view("admin-association.show" , compact("offers")) ;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $association = \App\Models\User::findOrFail($id) ;

        $association->delete() ;

    }

}
