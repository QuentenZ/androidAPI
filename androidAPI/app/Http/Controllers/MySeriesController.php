<?php

namespace App\Http\Controllers;
use App\MySeries;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MySeriesController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MySeries::with("Series")->get();
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
      $validator = Validator::make($request->all(), [
          'user_id' => 'required|integer',
          'series_id' => 'required|integer',
          'episode' => 'required|integer',
      ]);

      if($validator->fails()){
          return response()->json($validator->errors()->toJson(), 400);
      }

      $id = $request->get('user_id');
      $mySeries = MySeries::create([
          'user_id' => $request->get('user_id'),
          'series_id' => $request->get('series_id'),
          'current_episode' => $request->get('episode'),
      ]);

      return response()->json(compact('myseries'),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return MySeries::with("Series")->where('mySeries.id', '=', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
