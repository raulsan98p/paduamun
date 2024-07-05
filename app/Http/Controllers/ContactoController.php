<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactoMail;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('index');
    }
 //Si tendiras sessiones acá validarias todo 


 public function send_email(Request $request)
 {
    
    $name       = $request->post('nombre');
    $telf      = $request->post('telf');
    $email    = $request->post('emails');
    $comment    = $request->post('comment');
    
    $email2      = 'paduamun@gmail.com';
    $data = [
       'name'        => $name,
       'telf'        => $telf,
       'email'       => $email,
       'comment'     => $comment,
    ];

   

    Mail::to($email2)->send(new ContactoMail($data));
    echo json_encode([

        'status' => true,
    ]);
     

 }

//Esta funcion donde esta? 

}
