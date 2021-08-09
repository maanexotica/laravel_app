<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 4 Navbar with Search Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/main_style.css'); }}" rel="stylesheet">
<style>
   



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

</style>
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/register" class="nav-item nav-link">Register</a>
                <a href="/list" class="nav-item nav-link">List</a>
               
            </div>
        </div>
    </nav>
</div>
<div class="container">

<div class="row">
   