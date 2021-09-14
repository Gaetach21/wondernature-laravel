<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Apropos - Wondernature</title>  
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
        <a href="#" class="text-center text-xl text-green-700 pt-2 hover:underline hover:text-lime-200">Connexion</a>
        <a href="#" class="text-center text-xl text-green-700 pt-2 hover:underline hover:text-lime-200">Inscription</a>
        </div>
        </div>
    </div>
  

    <div class=" bg-lime-400 flex flex-col md:flex-row md:justify-between text-xl text-white">
      <div class="">
        <a href="/"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white">Accueil</a>
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white">Fleurs</a>
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white">Pantes</a>
        <a href="#"  class="px-11 hover:text-green-700 hover:underline border-r-2 border-white">Arbres</a>
        <a href="#"  class="px-12 hover:text-green-700 hover:underline">Animaux</a>
        
        </div>
    </div>
    
    
    <div class="pr-4 pl-8" style="background: url(../images/bg_page.png) no-repeat 0px 30px ;height:1505px;">
     <h1 class="text-center text-2xl text-green-700 pt-2">A propos de Wondernature</h1>

 <h3 class="text-center text-xl font-bold py-4">Qui sommes-nous ?</h3>
   

<p class="font-serif justify-center text-sm px-8 py-2"><strong>Wondernature</strong> est un site web construit à partir du framework PHP Laravel et du framework CSS TailwindCSS.
 Il a pour vocation de faire découvrir aux internautes toutes les plantes ainsi que tous les animaux
 vivant sur la terre.
</p>

<p class="font-serif justify-center text-sm px-8 py-2"><strong>Wondernature</strong> est un site web construit à partir du framework PHP Laravel et du framework CSS TailwindCSS.
 Il a pour vocation de faire découvrir aux internautes toutes les plantes ainsi que tous les animaux
 vivant sur la terre.
</p>

<p class="font-serif justify-center text-sm px-8 py-2"><strong>Wondernature</strong> est un site web construit à partir du framework PHP Laravel et du framework CSS TailwindCSS.
 Il a pour vocation de faire découvrir aux internautes toutes les plantes ainsi que tous les animaux
 vivant sur la terre.
</p>

<p class="font-serif justify-center text-sm px-8 py-2"><strong>Wondernature</strong> est un site web construit à partir du framework PHP Laravel et du framework CSS TailwindCSS.
 Il a pour vocation de faire découvrir aux internautes toutes les plantes ainsi que tous les animaux
 vivant sur la terre.
</p>
   
    </div>
	<footer class="bg-green-700 flex flex-col md:flex-row
      md:justify-between text-center pt-1 pb-1 px-2 text-sm">
      <div class="">
        <a href="/about-us"  class="mx-1 hover:text-green-500 hover:underline">Apropos</a>
        |<a href="#"  class="mx-1 hover:text-green-500 hover:underline">Mentions légales</a>
        |<a href="#"  class="mx-1 hover:text-green-500 hover:underline">Conditions d'utilisation</a>
        </div>
        <p>wondernature {{ date('Y') }} &copy; Copyright &middot; Tous droits réservés</p>
        </footer>
 </div>
    </body>
</html>
