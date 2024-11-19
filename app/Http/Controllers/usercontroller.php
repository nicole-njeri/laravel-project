<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate(['name'=>'required','email'=>'required']);
      users::create($request->all());  
      return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(users $usermodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $usermodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $usermodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $usermodel)
    {
        //
    }
}
