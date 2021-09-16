<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Wondernature - Les merveilles de la nature</title>  
    </head>
    <body class="my-3 text-center" style="font: 0.8em 'Trebuchet MS', helvetica, sans-serif ;background: #dea ;height:1860px;">
        
          <div class="container mx-auto w-3/5 text-left bg-white" style="height:1860px;">   
 
    <div  class="md:flex md:flex-row">
        <div>
        <img src="{{ asset('images/plant.jpg') }}" />
        </div>

        <div  class="px-8">
    <a href="#">
        <img src="{{ asset('images/title.png') }}" />
        </a>
        <h2 class="text-3xl text-lime-400 text-center font-bold">Les merveilles de la nature</h2>
        <div class="flex flex-col m-4">
        <a href="#" class="text-center text-xl text-green-700 pt-2 hover:underline hover:text-lime-400 focus:text-lime-400">Connexion</a>
        <a href="#" class="text-center text-xl text-green-700 pt-2 hover:underline hover:text-lime-400 focus:text-lime-400">Inscription</a>
        </div>
        </div>
    </div>
  

    <div class=" bg-lime-400 flex flex-col md:flex-row md:justify-between text-xl text-white">
      <div class="">
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white focus:text-green-700">Accueil</a>
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white focus:text-green-700">Fleurs</a>
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white focus:text-green-700">Pantes</a>
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white focus:text-green-700">Arbres</a>
        <a href="#"  class="px-12 hover:text-green-700 hover:underline">Animaux</a>
        
        </div>
    </div>
    
    
    <div class="pr-4 pl-8" style="background: url(../images/bg_page.png) no-repeat 0px 30px;height:1505px;">
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

    </div>
	 <footer class="bg-green-700 flex flex-col md:flex-row
      md:justify-between text-center pt-1 pb-1 px-2 text-sm">
      <div class="">
        <a href="/about-us"  class="mx-1 hover:text-green-500 hover:underline focus:text-green-500">Apropos</a>
        |<a href="#"  class="mx-1 hover:text-green-500 hover:underline focus:text-green-500">Mentions légales</a>
        |<a href="#"  class="mx-1 hover:text-green-500 hover:underline focus:text-green-500">Conditions d'utilisation</a>
        </div>
        <p>wondernature {{ date('Y') }} &copy; Copyright &middot; Tous droits réservés</p>
        </footer>
    </div>
    </body>
</html>
