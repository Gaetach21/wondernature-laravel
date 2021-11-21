    <div  class="md:flex md:flex-row">
        <div>
        <img src="{{ asset('images/plant.jpg') }}" alt="Aloe vera"/>
        </div>

        <div  class="px-8">
    <a href="#">
        <img src="{{ asset('images/title.png') }}" />
        </a>
        <h2 class="text-3xl text-lime-400 text-center font-bold">Les merveilles de la nature</h2>
		@if (Route::has('login'))
        <div class="flex flex-col m-4">
	@auth
    <a href="{{ url('/dashboard') }}" class="text-center text-xl text-green-700 pt-2 hover:underline hover:text-lime-400 
						focus:text-lime-400">Dashboard</a>
						
                    @else
        <a href="{{ route('login') }}" class="text-center text-xl text-green-700 pt-2 
	hover:underline hover:text-lime-400 focus:text-lime-400">Connexion</a>
	 @if (Route::has('register'))
        <a href="{{ route('register') }}" class="text-center text-xl text-green-700 pt-2 
	hover:underline hover:text-lime-400 focus:text-lime-400">Inscription</a>
	@endif
                    @endauth
        </div>
		 @endif
        </div>
    </div>
	
	
