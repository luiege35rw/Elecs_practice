<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:10',
            'email'    => 'required|email',
            'tel'      => 'nullable|numeric',
            'gender'   => 'required',
            'contents' => 'required',
        ]);

　　　　　　　　　　　// ここを追記
        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process()
    {
        
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}