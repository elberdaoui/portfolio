<?php

namespace App\Http\Controllers;


use App\educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = educations::all();
        return view('/education.index',['education'=>$education]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prmt = $request->except(['_token']);

        $education = new educations();
        $education->duration = $prmt['duration'];
        $education->profession = $prmt['profession'];
        $education->establishment = $prmt['establishment'];
        $education->place = $prmt['place'];
        $education->save();
        return redirect('/education');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function show(educations $educations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $education = educations::find($id);
      return view('/education.edit', ['education' => $education]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $education = educations::find($id);

      $education->duration = $request['duration'];
      $education->profession = $request['profession'];
      $education->establishment = $request['establishment'];
      $education->place = $request['place'];
      $education->save();
      return redirect('/education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $education = educations::find($id);
      $education->delete();
      return redirect('/education');
    }
}
