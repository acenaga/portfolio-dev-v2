<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ProfessionalSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessionalSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Auth::user()->professional_skills;

        //dd($skills);
        return view('dashboard.professional-skills', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.professional-skill.create');
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
            'name' => 'required | min:3 | max:100',
            'percent' => 'required|integer|between:1,100'
        ]);
        ProfessionalSkill::create(request()->all());

        return redirect()->route('professional-skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalSkill $skill)
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
        $skill = ProfessionalSkill::find($id);

        return view('dashboard.professional-skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfessionalSkill $ProfessionalSkill)
    {

        $request->validate([
            'name' => 'required | min:3 | max:100',
            'percent' => 'required|integer|between:1,100'
        ]);
        $ProfessionalSkill->update(request()->all());

        return redirect()->route('professional-skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProfessionalSkill::find($id)->delete();

        return redirect()->back();
    }
}
