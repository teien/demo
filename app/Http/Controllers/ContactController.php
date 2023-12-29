<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

   

   
    public function store(Request $request)
    {
        $news = new Contacts ;
        $news->fullname = $request->fullname;
        $news->phone = $request->phone;
        $news->email = $request->email;
        $news->message = $request->message;
        
        $news->save();
        return redirect()->action([ContactController::class,'index'])
    ;
    }
}
