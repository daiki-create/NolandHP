<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render(
            'contact',
        );
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'company' => 'required|string|max:255',
            'body' => 'required',
        ]);

        $email = 'contact@noland-prod.com';

        Mail::send('contacted_to_me', [
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'body' => $request->body,
        ], function ($message) use ($email) {
            $message->to($email)
                ->subject('Noland制作HPから問い合わせが届いています');
        });

        return Inertia::render(
            'thanks',
        );
    
        

    }
}
