<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumers = Consumer::orderBy('code')->get();
        return view('price.index', compact('consumers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $consumer = Consumer::findOrFail($id);
        
        $prices = Price::where('consumer_id', $id)->get();
        
        return view('price.show', compact('consumer', 'prices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumer = Consumer::findOrFail($id);
        $prices = Price::where('consumer_id', $id)->get();
        // dd($id);
        // dd($prices[0]->consumer_id);
        if(count($prices) > 0 ){
            $price = [
                'price_01_21' => $prices[0]->price_01_21,
                'price_02_21' => $prices[0]->price_02_21,
                'price_03_21' => $prices[0]->price_03_21,
                'price_04_21' => $prices[0]->price_04_21,
                'price_05_21' => $prices[0]->price_05_21,
                'price_06_21' => $prices[0]->price_06_21,
                'price_07_21' => $prices[0]->price_07_21,
                'price_08_21' => $prices[0]->price_08_21,
                'price_09_21' => $prices[0]->price_09_21,
                'price_10_21' => $prices[0]->price_10_21,
                'price_11_21' => $prices[0]->price_11_21,
                'price_12_21' => $prices[0]->price_12_21,
            ];
        }
        else{
            $price = new Price();
            $price->consumer_id = $id;
            $price->save();
            $prices = Price::where('consumer_id', $id)->get();
            $price = [
                'price_01_21' => $prices[0]->price_01_21,
                'price_02_21' => $prices[0]->price_02_21,
                'price_03_21' => $prices[0]->price_03_21,
                'price_04_21' => $prices[0]->price_04_21,
                'price_05_21' => $prices[0]->price_05_21,
                'price_06_21' => $prices[0]->price_06_21,
                'price_07_21' => $prices[0]->price_07_21,
                'price_08_21' => $prices[0]->price_08_21,
                'price_09_21' => $prices[0]->price_09_21,
                'price_10_21' => $prices[0]->price_10_21,
                'price_11_21' => $prices[0]->price_11_21,
                'price_12_21' => $prices[0]->price_12_21,
            ];
        }

        return view('price.edit', compact('consumer', 'price'));
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

        $price = Price::where('consumer_id', $id)->get();

        $price = Price::findOrFail($price[0]->id);

        $price->update( $request->all() );

        return redirect('/price')->with('success', 'Ціну внесено!');
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
