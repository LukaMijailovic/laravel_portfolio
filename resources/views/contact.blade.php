<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Contact</title>
</head>
<body>
<header>
        <ul>
            <a class="link" href="/">Home</a>
            <a class="link" href="/about">About</a>
            <a class="link" href="/work">Work</a>
            <a class="link" href="/contact">Contact</a>
            <a class="link" href="/login">Login</a>
        </ul>
    </header>

    <h1>Contact</h1>

    <style>

    body{
        background-color: #FFFFF0;
    }

    h1{
        font-family: Monospace;
        font-size: 300%;
        margin-left: 5%;
        margin-top: 2%;
        width: 30%;
        padding-top: 1%;
        padding-left: 1%;
        padding-bottom:1%;
    }

    header{
        border: 2px solid black;
        width:90%;
        margin-left: 3.5%;
        font-family: Monospace;
        background-color: black;
    }

    a{
        font-size: 200%;
        margin-left: 12.5%;
        text-decoration: none;
        color: #FFFFF0;
    }

    a:visited{
        color:black;
        color:white;
    }

    a:hover{
        text-decoration: underline;
    }
    </style>

    <div id="contact">
       <form action="/contact/send" method="post">
           <input type="text" name="first_name" id="first_name" placeholder="first name">
           <br>
           <input type="text" name="last_name" id="last_name" placeholder="last name">
           <br>
           <input type="text" name="email" id="email" placeholder="email">
           <br>
           <input type="text" name="question" id="question" placeholder="Your Question">
           <br>
           <input type="submit" value="submit">
       </form>
   </div>

    
</body>
</html>