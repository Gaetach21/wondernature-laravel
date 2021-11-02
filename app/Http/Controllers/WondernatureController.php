<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests;
use App\Http\Controllers\WondernatureController;


class WondernatureController extends Controller
{
        public function index()
{ 
return view('pages/home');
}

        public function getabout()
{ 
return view('pages/about');
}

        public function getflower()
{ 
return view('pages/flower');
}

        public function getplants()
{ 
return view('pages/plants');
}

        public function gettrees()
{ 
return view('pages/trees');
}

        public function getanimals()
{ 
return view('pages/animals');
}

        public function getmentions()
{ 
return view('pages/mentions');
}

        public function getContact()
{ 
return view('pages/contact');
}

        public function postContact(Request $request)
{ 
$request->validate([
		'name' =>'required|min:4|max:10|unique:contacts',
		'email' =>'required|email',
		'message' =>'required|max:250'
		]);
		Contact::create([
		'name' => $request -> name,
		'email' =>$request -> email,
		'message' => $request -> message
		]);
		return 'Merci '.$request->input('name').'.'.'Votre message a été transmis à l\'administrateur du site.
		Vous recevrez une réponse rapidement';	

}
}