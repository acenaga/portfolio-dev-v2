<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Auth::user()->reviews;
        return view('dashboard.client-reviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.client-review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        // $request->validate([
        //     'title' => 'required | min:3 | max:40',

        // ]);
        $review = ClientReview::create(request()->all());

        //imagen
        if ($request->file('image')) {
            $review->image = $request->file('image')->store('review', 'public');
            $review->save();
        }

        return back()->with('status', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function show(ClientReview $clientReview)
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientReview $clientReview)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClientReview::find($id)->delete();
        return redirect()->back()->with('success', 'Review deleted successfully');
    }
}
