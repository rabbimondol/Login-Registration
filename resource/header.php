<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
    .jumbotron
            {
            background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(3.jpg);
            background-size: cover; 
            background-position: center;
            color: #fff;
            height: 350px;
            
            
            }
            .collapse li a 
            {
            color: #ccc !important;
            
            }
            .collapse li a:hover
            {
            color: #fff !important;
            
            
            }
            .navbar-brand
            {
            color: #fff !important;
            }
            
    
    
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">Golam Rabbi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="update.php">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" >
          Dropdown
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
