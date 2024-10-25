<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // get all services
        $services = Service::all();
        // get  page
        $page = Page::where('slug','home')->get()->first();
        // get contents
        return view('index',compact('services','page'));

    }
    public function about(){
        // get all services
        $services = Service::all();
        $branches = Branch::all();
        // get all pages
        $page = Page::where('slug','about-us')->get()->first();
        return view('about',compact('services','page','branches'));

    }
    public function contact(){
        // get all services
        $services = Service::all();
        // get all pages
        $page = Page::where('slug','contact-us')->get()->first();
        return view('contact',compact('services','page'));

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
    public function service($slug) 
    {
        // get all services
        $services = Service::all();
        $service = Service::with('products')->where('slug',$slug)->get()->first();
        // get all pages
        return view('service',compact('service','services'));
    }
}
