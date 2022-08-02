<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">

       
      
    </head>
    <body>
         <div id="app">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                <hello-world>
                    
                </hello-world>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        
    </body>
</html>
