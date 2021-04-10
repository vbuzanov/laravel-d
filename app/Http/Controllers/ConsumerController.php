<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumers = Consumer::orderBy('code')->get();
        return view('consumer.index', compact('consumers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|unique:consumers|max:10',
            'phone' => 'required|max:20',
            'address' => 'required',
            ]);
        Consumer::create($request->all());
        return redirect('/consumer')->with('success', 'Споживача додано!');
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
 
        return view('consumer.edit', compact('consumer'));
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
        $validated = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|unique:consumers,code,'.$id.'|max:10',
            'phone' => 'required|max:20',
            'address' => 'required',
        ]);
        $consumer = Consumer::findOrFail($id);
    
        $consumer->update( $request->all() );

        return redirect('/consumer')->with('success', 'Дані споживача оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Consumer::findOrFail($id)->delete();
        return redirect('/consumer')->with('danger', 'Споживача видалено!');
    }
}
