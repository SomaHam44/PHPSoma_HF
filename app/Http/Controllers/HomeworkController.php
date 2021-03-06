<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeWorkRequest;
use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::all();
        return view('homeworks.index', [
            'homeworks' => $homeworks,
        ]);
        //
    }

    public function create()
    {
        return view('homeworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeWorkRequest $request)
    {


        $adatok = $request->only(['assignment_title', 'url', 'feedback', 'point']);
        $homework = new Homework();
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homeworks.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        return view ('show', ['homework' => $homework]);
    }

    public function edit(Homework $homework)
    {
        return view('homeworks.edit', ['homework' => $homework]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeWorkRequest $request, Homework $homework)
    {
        $adatok = $request->only(['assignment_title', 'url', 'feedback', 'point']);
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homeworks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('homeworks.index');
    }
}
