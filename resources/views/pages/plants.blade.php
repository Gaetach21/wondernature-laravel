@extends('layouts.app',['title'=>'Liste des plantes'])
@section('content')
     <h1 class="text-center text-2xl text-green-700 pt-2 ">Liste des plantes</h1>

        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bananier-fruitier.jpg') }}" alt="bananier fruitier" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">bananier fruitier</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/carotte.jpg') }}" alt="carotte" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">carotte</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/epinard.jpg') }}" alt="epinard" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">epinard</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/fenouil.jpg') }}" alt="fenouil" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">fenouil</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>

           <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/griffe-sorciere.jpg') }}" alt="griffe sorciere" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">griffe sorciere</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/helianthemum.jpg') }}" alt="helianthème" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">helianthème</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/iberis.jpg') }}" alt="iberis" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">iberis</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/laitue.jpg') }}" alt="laitue" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">laitue</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8 ">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/mache-grosse-graine.jpg') }}" alt="mache" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">mache</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/menthe.jpg') }}" alt="menthe" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">menthe</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/ortie-feuilles.jpg') }}" alt="ortie" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">ortie</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/persil.jpg') }}" alt="persil" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">persil</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/poireau.jpg') }}" alt="poireau" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">poireau</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/prele.jpg') }}" alt="prele" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">prele</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/tilleul-barronies.jpg') }}" alt="tilleul" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">tilleul</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/vigne-raisin.jpg') }}" alt="vigne" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">vigne</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
		          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/poireau.jpg') }}" alt="poireau" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">poireau</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/prele.jpg') }}" alt="prele" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">prele</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/tilleul-barronies.jpg') }}" alt="tilleul" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">tilleul</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/vigne-raisin.jpg') }}" alt="vigne" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">vigne</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
    
@endsection