<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Auth::user()->services;
        // notify()->success('Welcome to Laravel Notify ⚡️')
        // notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');
        // connectify('success', 'Connection Found', 'Success Message Here');
        // drakify('success'); // for success alert
        // drakify('ups error found'); // for error alert
        // smilify('success', 'You are successfully reconnected');
        // emotify('success', 'You are awesome, your data was successfully created');
        // dd($educations);

        //dd($services);
        return view('dashboard.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create');
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
            'title' => 'required | min:3 | max:40',

        ]);
        Service::create(request()->all());

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
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
        $service = Service::find($id);

        return view('dashboard.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->update(request()->all());

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();

        return redirect()->back();
    }
}
