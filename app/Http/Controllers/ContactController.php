<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact; 
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public function controllers(Request $request) {
        $post = new Contact();
            
        $post->name = $request->name;
        $post->email = $request->email;
        $post->subject = $request->subject;
        $post->message = $request->message;
        $post->save();
    
        return redirect('/');

    }
    
    public function getData() {
            $db_contact = DB::table('contacts')->get();
            return view("/contact", ['contacts' => $db_contact]);
    }
}
