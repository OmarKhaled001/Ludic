<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Page;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        //get data
        $reviews = Review::all();
        $clients = Client::all();
        // get  page
        $page = Page::find(1);
        // get contents

        return view('index',compact('page','reviews','clients'));

    }
    public function about(){
        // get all services
        $clients = Client::all();
        $branches = Branch::all();
        // get all pages
        $page = Page::find(2);
        return view('about',compact('page','branches','clients'));

    }
    public function contact(){
        $branches = Branch::all();
        // get all pages
        $page = Page::find(3);
        return view('contact',compact('page'));

    }
    public function contactForm(Request $request){
  
        $contact = new Contact();
        $contact->service_id = $request->service_id;
        $contact->name       = $request->name;
        $contact->email      = $request->email;
        $contact->phone      = $request->phone;
        $contact->subject    = $request->subject;
        $contact->message    = $request->message;
        $contact->save();

        return redirect()->route('index');
    }
    public function service($id) 
    {
        $service = Service::with('products')->where('id', $id)->get()->first();
        return view('service',compact('service'));
    }
}
