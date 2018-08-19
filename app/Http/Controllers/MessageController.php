<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Message;
use Auth;

class MessageController extends Controller
{

    protected $redirectTo = '/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessage $request)
    {
        if( !$request->errors) {
            Message::create([
                'text' => $request->input('text'),
                'user_id' => Auth::user()->id,
            ]);
            return redirect('/')->with('success', 'Сообщение добавлено');
        }

        return back()->withInput()->withErrors($request->errors);
    }
}
