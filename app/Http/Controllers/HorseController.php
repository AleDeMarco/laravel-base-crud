<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horse;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data_horse = Horse::all();

      $data = [
        'horses' => $data_horse
      ];
      return view('horses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('horses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'age' => 'required',
        'breed' => 'required',
        'gender' => 'required',
        'owner' => 'required'
      ]);

      $data = $request->all();

      $horseNew = new Horse();

      $horseNew->fill($data);

      $horseNew->save();

      return redirect()->route('horses.index')->with('status', 'Horse added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horse)
    {
      if ($horse) {
        $data = [
          'horse' => $horse
        ];
        return view('horses.show', $data);
      }
      abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Horse $horse)
    {
      if ($horse) {
        $data = [
          'horse' => $horse
        ];
        return view('horses.edit', $data);
      }
      abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horse $horse)
    {
      $data = $request->all();

      $request->validate([
        'name' => 'required',
        'age' => 'required',
        'breed' => 'required',
        'gender' => 'required',
        'owner' => 'required'
      ]);

      $horse->update($data);
      return redirect()->route('horses.index', $horse->id)->with('status', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horse $horse)
    {
      $horse->delete();
      return redirect()->route('horses.index')->with('status', 'Horse deleted');
    }
}
