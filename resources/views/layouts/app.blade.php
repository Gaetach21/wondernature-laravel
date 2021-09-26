<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ page_title($title ?? null) }}</title>  
    </head>
    <body class="my-3 text-center" style="font: 0.8em 'Trebuchet MS', helvetica, sans-serif ;background: #dea ;height:1860px;">
        
          <div class="container mx-auto w-3/5 text-left bg-white" >   
 @include('layouts.partials.header')
 @include('layouts.partials.navbar')

    <div class="pr-4 pl-8" style="background: url(../images/bg_page.png) no-repeat 0px 30px;height:1505px;">
   @yield('content')
    </div>
@include('layouts.partials.footer')
    </div>
    </body>
</html>
