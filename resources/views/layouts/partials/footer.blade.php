	 <footer class="bg-green-700 flex flex-col md:flex-row
      md:justify-between text-center pt-1 pb-1 px-2 text-sm">
      <div class="">
        <a href="{{ route('about') }}"  class="mx-1 hover:text-green-500 hover:underline focus:text-green-500">Apropos</a>
        |<a href="{{ route('mentions') }}"  class="mx-1 hover:text-green-500 hover:underline focus:text-green-500">Mentions légales</a>
        |<a href="{{ route('contact') }}"  class="mx-1 hover:text-green-500 hover:underline focus:text-green-500">Contact</a>
        </div>
        <p>wondernature {{ date('Y') }} &copy; Copyright &middot; Tous droits réservés</p>
        </footer>