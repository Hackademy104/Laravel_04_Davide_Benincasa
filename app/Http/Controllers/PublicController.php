<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ComplaintMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome (){
        //? LOGICA


        return view('welcome');
    }

    public function reclamo (){
        return view('lamentela');
    }
                                    //? Dependency Injection
    public function reclamo_submit(Request $request){

        $email = $request->input('email');
        $name = $request->input('name');
        $text = $request->input('text');

        Mail::to($email)->send(new ComplaintMail($name, $text));
        Mail::to('AdminMail@admin.com')->send(new AdminMail($name, $text));

        // return redirect(route('welcome'))->with('message', 'Email inviata con successo');

        return redirect(route('reclamo_thankyou', ['name' => $name]));
    }

    public function reclamo_thankyou($name){

        return view('reclamo_thankyou', ['name'=> $name]);
    }
}
