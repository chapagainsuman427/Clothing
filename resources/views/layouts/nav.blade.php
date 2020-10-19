<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">

    <style>
    .navbar{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: black;
    }

    .list{
        float: left;

    }
    .list a {
        display: block;
        color: white;
        text-align: center;
        padding: 20px 16px;
        text-decoration: none;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .list form{
        margin-top: 15px;
    }
    .form .form-input
    {
        padding: 10px;
        width: 250px;
        border-radius: 5px;
        border:none;
    }

    .form-submit
    {
        padding: 8px;
        background: #428bca;
        border: none;
        border-radius: 5px;
        color: white;
    }
    
    </style>
    </head>
<body>
<ul class="navbar">
    <li class="list" style="font-size: 20px; margin-left: 10px; "><a href="">Clothing</a></li>
    <li class="list" style="margin-left:450px"> 
    <form action="" class="form">
        <input type="text"placeholder="Search" class="form-input">
        <input type="Submit" class="form-submit">
    </form>
    </li>
    <li class="list" style="float:right;margin-right:30px;">
        <a href="" style="font-size: 18px; border: 2px solid lightgrey; padding: 8px 25px; margin-top: 10px;">Login </a> 
    </li>
</ul>

@include('layouts.sidebar')

<div class="content">
    @yield('content')
</div>
    

</body>
</html>