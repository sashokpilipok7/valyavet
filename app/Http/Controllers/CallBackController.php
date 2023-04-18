<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallBack;

class CallBackController extends Controller
{
    public function thanks (Request $request) {
        $validated =  $request->validate([
            'name' => 'required|min:2',
            'phone' => 'required',
            'message' => 'nullable'
        ]);

        CallBack::create($validated);
        return view('thanks');
    }
}
