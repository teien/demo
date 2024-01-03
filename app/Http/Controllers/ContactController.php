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
        session()->flash('success', 'Cảm ơn những đóng góp và ý kiến của bạn, chúng tôi sẽ liên hệ lại với bạn sớm nhất có thể. Xin cảm ơn!');
        return redirect()->action([ContactController::class,'index'])
    ;
    }
}
