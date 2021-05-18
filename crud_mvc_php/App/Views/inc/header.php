<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Gestion de bibliothèque</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php url(); ?>">
     <!-- <img src="< echo BURL.'assets/images/logo.png'; ?>" width="100" alt="">-->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php url(); ?>">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php url('book/index'); ?>">Books</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php url('book/add'); ?>">Add Book</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="<?php url('bookstore/index'); ?>"> Book stores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php url('bookstore/add'); ?>"> Add book store</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php url('has/index'); ?>"> Add book to store</a>
        </li>

        
      </ul>
    
    </div>
  </nav>