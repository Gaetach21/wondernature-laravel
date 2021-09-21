@extends('app')
@section('title',config('app.name').' - Les merveilles de la nature')
@section('content')
     <h1 class="text-center text-2xl text-green-700 pt-2">Bienvenue sur Wondernature</h1>

   <div class="flex flex-row my-5  border-b-2 border-green-700 ml-8 space-x-1">   
<img src="{{ asset('images/little-orchidee.jpg') }}"/> 
<h2 class="ml-8 text-xl text-green-700 font-bold">
<a href="#">Liste des fleurs</a></h2>
</div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/camelia-rouge.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/chrysantheme-carene.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/jasmin-bresil.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/flamboyant.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">flamboyant</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>



      <div class="flex flex-row my-5  border-b-2 border-green-700 ml-8 space-x-1">   
<img src="{{ asset('images/little-orchidee.jpg') }}"/> 
<h2 class="ml-8 text-xl text-green-700 font-bold">
<a href="#">Liste des plantes</a></h2>
</div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bananier-fruitier.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/carotte.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/epinard.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/fenouil.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">fenouil</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>




      <div class="flex flex-row my-5  border-b-2 border-green-700 ml-8 space-x-1">   
<img src="{{ asset('images/little-orchidee.jpg') }}"/> 
<h2 class="ml-8 text-xl text-green-700 font-bold">
<a href="#">Liste des arbres</a></h2>
</div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/cacaoyer-cacao.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">cacaoyer</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/cerisier-cerise.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">cerisier</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/citronnier-citron.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">citronnier</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/figuier.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">figuier</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>





      <div class="flex flex-row my-5  border-b-2 border-green-700 ml-8 space-x-1">   
<img src="{{ asset('images/little-orchidee.jpg') }}"/> 
<h2 class="ml-8 text-xl text-green-700 font-bold">
<a href="#">Liste des animaux</a></h2>
</div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/anaconda-vert.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">anaconda vert</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/autruche.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">autruche</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/ane-de-provence.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">ane de provence</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/aigle-royal.jpg') }}" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">aigle royal</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm mb-4">Lire la suite
            </a>    
        </div>
      </div>
      </div>
    @endsection
