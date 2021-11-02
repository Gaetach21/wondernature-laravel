@extends('layouts.app',['title'=>'Nous contacter'])
@section('content')
 <h1 class="text-center text-2xl text-green-700 py-4">Comment nous contacter</h1>

 <div class="bg-lime-400 rounded-xl shadow-lg p-8 text-gray-600 w-6/7 m-8">
<p class="font-serif justify-center text-sm px-8 py-2">
Pour nous contacter, envoyez-nous votre demande, question ou votre commentaire, et nous vous répondrons dans les plus brefs délais.<br>
Vous pouvez nous contacter aussi par mail à l'adresse <a href="mailto:tachgaetan@gmail.com" class="text-blue-500 hover:underline" >tachgaetan@gmail.com</a>
                        </p>
@if ($errors->any())
	@foreach ($errors->all() as $error)
 <div class="text-red-500">{{ $error }}</div>
	@endforeach	
	@endif
	

<form action="{{ route('contact.store') }}" class="md:flex md:flex-col space-y-4"  method="post">
@csrf
<div>
	 			<label for="" class="text-sm">
	 			Votre nom</label>
	 			<input type="text" placeholder="Votre nom" class="ring-1 ring-gray-300
	 			w-full rounded-md px-4 py-2 mt-2 outline-none 
	 			focus:ring-2 focus:ring-lime-300" name="name" />
	 		</div>

	 		<div>
	 			<label for="" class="text-sm">
	 			Votre adresse email</label>
	 			<input type="email" placeholder="Votre adresse email" class="ring-1 ring-gray-300
	 			w-full rounded-md px-4 py-2 mt-2 outline-none 
	 			focus:ring-2 focus:ring-lime-300" name="email" />
	 		</div>

	 		<div>
	 			<label for="" class="text-sm">
	 			Votre message</label>
	 			<textarea placeholder="Votre message" class="ring-1 ring-gray-300
	 			w-full rounded-md px-4 py-2 mt-2 outline-none 
	 			focus:ring-2 focus:ring-lime-300" name="message" ></textarea> 
	 		</div>

	 		<button class="inline-block self-end bg-green-700 text-white font-bold
	 		rounded-lg px-3 py-2 uppercase text-sm">Valider</button>

</form>

</div>
	 	
@endsection