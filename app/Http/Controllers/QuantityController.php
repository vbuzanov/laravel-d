<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use App\Models\Quantity;
use Illuminate\Http\Request;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumers = Consumer::orderBy('code')->get();
        return view('qty.index', compact('consumers'));
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
        
        $qtys = Quantity::where('consumer_id', $id)->get();
        
        return view('qty.show', compact('consumer', 'qtys'));
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
        $qtys = Quantity::where('consumer_id', $id)->get();

        if(count($qtys) > 0 ){
            $qty = [
                'qty_01_21' => $qtys[0]->qty_01_21,
                'qty_02_21' => $qtys[0]->qty_02_21,
                'qty_03_21' => $qtys[0]->qty_03_21,
                'qty_04_21' => $qtys[0]->qty_04_21,
                'qty_05_21' => $qtys[0]->qty_05_21,
                'qty_06_21' => $qtys[0]->qty_06_21,
                'qty_07_21' => $qtys[0]->qty_07_21,
                'qty_08_21' => $qtys[0]->qty_08_21,
                'qty_09_21' => $qtys[0]->qty_09_21,
                'qty_10_21' => $qtys[0]->qty_10_21,
                'qty_11_21' => $qtys[0]->qty_11_21,
                'qty_12_21' => $qtys[0]->qty_12_21,
            ];
        }
        else{
            $qty = new Quantity();
            $qty->consumer_id = $id;
            $qty->save();
            $qtys = Quantity::where('consumer_id', $id)->get();
            $qty = [
                'qty_01_21' => $qtys[0]->qty_01_21,
                'qty_02_21' => $qtys[0]->qty_02_21,
                'qty_03_21' => $qtys[0]->qty_03_21,
                'qty_04_21' => $qtys[0]->qty_04_21,
                'qty_05_21' => $qtys[0]->qty_05_21,
                'qty_06_21' => $qtys[0]->qty_06_21,
                'qty_07_21' => $qtys[0]->qty_07_21,
                'qty_08_21' => $qtys[0]->qty_08_21,
                'qty_09_21' => $qtys[0]->qty_09_21,
                'qty_10_21' => $qtys[0]->qty_10_21,
                'qty_11_21' => $qtys[0]->qty_11_21,
                'qty_12_21' => $qtys[0]->qty_12_21,
            ];
        }

        return view('qty.edit', compact('consumer', 'qty'));
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
        $qty = Quantity::where('consumer_id', $id)->get();

        $qty = Quantity::findOrFail($qty[0]->id);

        $qty->update( $request->all() );

        return redirect('/qty')->with('success', 'Кількість внесено!');
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
