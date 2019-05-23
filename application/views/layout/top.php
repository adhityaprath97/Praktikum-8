<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<style type="text/css">
		.active{
			background-color: grey !important;
		}
		.diver a{
			font-family: Questrial;
		}
		.diver h3{
			font-family: Viga;
		}
	</style>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body> 
	<div class="w3-sidebar w3-light-white w3-bar-block diver" style="width:15%">
	  <h3 class="w3-bar-item">Menu</h3>
	  <a href="<?php echo base_url().'index.php/anggota'; ?>" class="w3-bar-item w3-button">List Anggota</a>
	  <a href="<?php echo base_url().'index.php/buku'; ?>" class="w3-bar-item w3-button">List Buku</a>
	  <a href="<?php echo base_url().'index.php/pinjaman'; ?>" class="w3-bar-item w3-button">List Pinjaman</a>
	  <a href="<?php echo base_url().'index.php/logout'; ?>" class="w3-bar-item w3-button">Keluar</a>
	</div>
	<div style="margin-left:15%">
	<center>