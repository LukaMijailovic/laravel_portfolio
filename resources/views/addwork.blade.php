<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add work</title>
</head>
<body>
<header><h1>Add work</h1></header>
    <form>
        <label for="name">Work name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="description">Description:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date"><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image">
    </form>
<style>


    body{
        background-color: #FFFFF0;
    }

    h1{
        font-family: Monospace;
        font-size: 300%;
        margin-left: 36%;
        width: 30%;
        text-align: center;
        color: white;
    }

    header{
        border: 2px solid black;
        width:50%;
        margin-left: 24%;
        margin-top: 2%;
        font-family: Monospace;
        background-color: black;
    }

    a{
        float:left;
        margin-top: 10%;
        margin-left: 15.5%;
        font-family: Monospace;
        font-size: 300%;
        border: 1px solid black;
        padding:1%;
    }


    form{
        margin-left: 35%;
        margin-top: 5%;
    }


    label{
        font-family: Monospace;
        font-size: 300%;
        margin-top: 1%;
    }
    input{
        width: 40%;
        background-color: #FFFFF0;
        border: 1px solid black;
        font-size: 150%;
        margin-top: 1%;
    }

    input[type=text]{
        height: 5%;
    }
</style>
    
</body>
</html>