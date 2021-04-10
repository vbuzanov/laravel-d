<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use App\Models\User;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function index()
    {
        // $user = auth()->user();
        $consumer = Consumer::findOrFail(auth()->user()->consumer_id);

        return view('private.index', compact('consumer'));
    }

    public function user()
    {
        $user = auth()->user();
        $consumer = Consumer::findOrFail(auth()->user()->consumer_id);
        return view('private.profile', compact('user', 'consumer'));
    }

    public function user_update(Request $request)
    {
        // dd($request->name);
        $user = User::findOrFail(auth()->user()->id);
        
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        
        $fname = $request->file('avatar');
        if($fname != null){
            $user->avatar = $fname->store('public/uploads');
            // dd($path);
        }
        // $user->avatar = $request->email;
        
        $validation = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required',
            'avatar' => 'image',
        ]);

        $user->save();
        // $user = User::findOrFail(auth()->user()->id);
        // $user->update( $request->all() );
        return redirect('/private/profile')->with('success', 'Thank! User updated!');
    }

    public function info()
    {

        $consumer = Consumer::findOrFail(auth()->user()->consumer_id);
 
        $price = array($consumer->price->price_01_21,
                        $consumer->price->price_02_21,
                        $consumer->price->price_03_21,
                        $consumer->price->price_04_21,
                        $consumer->price->price_05_21,
                        $consumer->price->price_06_21,
                        $consumer->price->price_07_21,
                        $consumer->price->price_08_21,
                        $consumer->price->price_09_21,
                        $consumer->price->price_10_21,
                        $consumer->price->price_11_21,
                        $consumer->price->price_12_21
                    );

        $qty = array($consumer->quantity->qty_01_21,
                    $consumer->quantity->qty_02_21,
                    $consumer->quantity->qty_03_21,
                    $consumer->quantity->qty_04_21,
                    $consumer->quantity->qty_05_21,
                    $consumer->quantity->qty_06_21,
                    $consumer->quantity->qty_07_21,
                    $consumer->quantity->qty_08_21,
                    $consumer->quantity->qty_09_21,
                    $consumer->quantity->qty_10_21,
                    $consumer->quantity->qty_11_21,
                    $consumer->quantity->qty_12_21
                );


        $totalSumM = [];
        $totalQty = 0;
        $totalSumY = 0;

        for ($i=0; $i < 12; $i++) {
            array_push($totalSumM, $price[$i]*$qty[$i]);
        }
        for ($i=0; $i < count($qty) ; $i++) { 
            $totalQty += $qty[$i];
        }
        for ($i=0; $i < count($totalSumM) ; $i++) { 
            $totalSumY += $totalSumM[$i];
        }
      


        return view('private.consumer_info', compact('consumer', 'price', 'qty', 'totalSumM', 'totalQty', 'totalSumY'));
    }
}
