@extends('layouts.app',['title'=>'Liste des animaux'])
@section('content')
     <h1 class="text-center text-2xl text-green-700 pt-2 ">Liste des animaux</h1>

        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/anaconda-vert.jpg') }}" alt="anaconda vert" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/autruche.jpg') }}" alt="autruche" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/ane-de-provence.jpg') }}" alt="ane de provence" class="rounded-tl-lg rounded-tr-lg" />
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
                    <img src="{{ asset('images/aigle-royal.jpg') }}" alt="aigle royal" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">aigle royal</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>

           <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/baleine-grise.jpg') }}" alt="baleine grise" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">baleine grise</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/berger-allemand.jpg') }}" alt="berger allemand" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">berger allemand</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bonobo.jpg') }}" alt="bonobo" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">bonobo</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bison-d-amerique-du-nord.jpg') }}" alt="bison" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">bison</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8 ">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/beluga.jpg') }}" alt="beluga" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">beluga</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/baribal-ours-noir.jpg') }}" alt="baribal" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">baribal</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/baleine-a-bosse.jpg') }}" alt="baleine à bosse" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">baleine à bosse</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bernache-du-canada.jpg') }}" alt="bernache du canada" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">bernache du canada</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/barbican-a-tete-rouge.jpg') }}" alt="barbican" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">barbican</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bleu-russe.jpg') }}" alt="bleu russe" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">bleu russe</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/baleine-bleu.jpg') }}" alt="baleine bleue" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">baleine bleue</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/aubrac-vache.jpg') }}" alt="aubrac" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">aubrac</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
	  
	          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 ml-8">
            
            <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/barbican-a-tete-rouge.jpg') }}" alt="barbican" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">barbican</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/bleu-russe.jpg') }}" alt="bleu russe" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">bleu russe</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/baleine-bleu.jpg') }}" alt="baleine bleue" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">baleine bleue</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>


      <div class="shadow-lg rounded-lg text-center">
                <a href="#">
                    <img src="{{ asset('images/aligator-d-amerique.jpg') }}" alt="aligator d'amerique" class="rounded-tl-lg rounded-tr-lg" />
                </a>
                        <div class="p-1">
            <h3><a href="#">aligator d'amerique</a></h3>
            <a href="#"  class="bg-lime-400 rounded-full py-2 px-4 text-white 
            flex flex-row justify-center my-2 hover:from-lime-800 hover:to-lime-800 text-sm">Lire la suite
            </a>    
        </div>
      </div>
      </div>
	  
    
@endsection