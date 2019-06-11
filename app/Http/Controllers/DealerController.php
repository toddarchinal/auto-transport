<?php

namespace App\Http\Controllers;

use App\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealer = Dealer::all();

        return response()->json($dealer);
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
            'name' => 'required'
        ]);

        $dealer = Dealer::create($request->all());

        return response()->json([
            'message' => "Success, New dealer added",
            'dealer' => $dealer
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function show(Dealer $dealer)
    {
        return $dealer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dealer $dealer)
    {
        $request->validate([
            'name'       => 'nullable',
            //'description' => 'nullable'
         ]);

         $dealer->update($request->all());

         return response()->json([
             'message' => 'Great success! Dealer updated',
             'dealer' => $dealer
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dealer $dealer)
    {
        $dealer->delete();

        return response()->json([
            'message' => 'Successfully deleted dealer!'
        ]);
    }
}
