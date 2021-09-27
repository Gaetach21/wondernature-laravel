@extends('layouts.app',['title'=>'Liste des fleurs'])
@section('content')
     <h1 class="text-center text-2xl text-green-700 pt-2 ">Liste des fleurs</h1>

        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/camelia-rouge.jpg') }}" alt="camelia rouge" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">camelia rouge</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/chrysantheme-carene.jpg') }}" alt="chrysantheme carene" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">chrysantheme carene</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/jasmin-bresil.jpg') }}" alt="jasmin du bresil" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">jasmin du bresil</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/flamboyant.jpg') }}" alt="flamboyant" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">flamboyant</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>

           <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/genet-rampant.jpg') }}" alt="genet rampant" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">genet rampant</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/geranium-vivace-mauve.jpg') }}" alt="geranium vivace mauve" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">geranium vivace mauve</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/hibiscus-fleurs-guy.jpg') }}" alt="hibiscus" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">hibiscus</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/jonquilles.jpg') }}" alt="jonquilles" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">jonquilles</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8 ">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/lavatere.jpg') }}" alt="lavatere" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">lavatere</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/lis-blanc.jpg') }}" alt="lis blanc" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">lis blanc</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/marguerite-fleur.jpg') }}" alt="marguerite" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">marguerite</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/muguet-fleurs.jpg') }}" alt="muguet" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">muguet</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/nielle-des-bles-fleur.jpg') }}" alt="nielle-des-bles-fleur" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">nielle des blés</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/oeillet-inde-lucida.jpg') }}" alt="oeillet-inde-lucida" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">oeillet d'inde</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/orchidee.jpg') }}" alt="orchidee" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">orchidée</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/oxalis.jpg') }}" alt="oxalis" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">oxalis</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	  	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8 ">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/nielle-des-bles-fleur.jpg') }}" alt="nielle-des-bles-fleur" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">nielle des blés</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/pavot-bleu.jpg') }}" alt="pavot bleu" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">pavot bleu</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/orchidee.jpg') }}" alt="orchidee" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">orchidée</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/oxalis.jpg') }}" alt="oxalis" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">oxalis</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
    
@endsection