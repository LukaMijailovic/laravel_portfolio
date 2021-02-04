<!DOCTYPE html>
<html>
   <head>
       <title>@yield('title', 'Laravel pagina')</title>
       <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
    <!-- <header>
        @yield('content')
        <ul>
            <a class="link" href="/">Home</a>
            <a class="link" href="/about">About</a>
            <a class="link" href="/work">Work</a>
            <a class="link" href="/contact">Contact</a>
        </ul>

        
    </header> -->

    <style>

        header{
            font-size: 40px;
            color: black;
            width: 50%;
            margin-left: 28%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .link{
            margin-right: 10%;
        }
        
        a{
            text-decoration: none;
            margin-top: -1px;
            border: 1px solid black;
        }

        a:visited{
            color:black;
        }
</style>
   </body>
</html>