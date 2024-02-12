<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\TechnicalSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Auth::user()->technical_skills;

        //dd($skills);
        return view('dashboard.technical-skills', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.technical-skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        $request->validate([
            'name' => 'required | min:3 | max:40',

        ]);
        TechnicalSkill::create(request()->all());

        return redirect()->route('technical-skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(TechnicalSkill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = TechnicalSkill::find($id);

        return view('dashboard.technical-skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TechnicalSkill $TechnicalSkill)
    {
        $TechnicalSkill->update(request()->all());

        return redirect()->route('technical-skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TechnicalSkill::find($id)->delete();

        return redirect()->back();
    }
}
