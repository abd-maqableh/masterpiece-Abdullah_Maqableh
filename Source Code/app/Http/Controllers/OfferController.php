<?php

namespace App\Http\Controllers;
use App\Category;
use App\Offer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('makiny_front.offer');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

          Offer::create([
              'user_id'=>Auth::id(),
              'name'=> $request->input('name'),
              'description'=> $request->input('description'),
              'location'=> $request->input('location'),
              'date'=> $request->input('date'),
              'time'=> $request->input('time'),
              'price'=> $request->input('price'),
              'photo' => request()->image->store('uploads', 'public'),
              'category_id'=>$request->input('category_id'),
          ]);


//

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $category_id=$id->id;
        $find=Category::findOrFail($category_id);
        $offer = $find->offer()->get();
        return view('makiny_front.showoffer', compact('offer'));

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
