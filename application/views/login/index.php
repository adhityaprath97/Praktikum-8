<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">

<style type="text/css">		

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 15px;
}

button {
  background-color: none;
  color: black;
  font-family: Sintony;
  padding: 14px 20px;
  margin: 8px 0;
  border: black 2px solid;
  cursor: pointer;
  width: 100%;
  border-radius: 15px;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
  left: 50%;
  transform: translateX(-50%);
  position: absolute;
  margin-top: 80px;
  width: 25%;
}

.container b{
  font-family: Questrial;
}

span.psw {
  float: right;
  padding-top: 16px;
}

h1{
  font-family: Sintony;
}

body{
  background: #C0C0C0;
}

@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }  
}
	</style>
</head>
<body>
	<form action="auth_login" method="post">
	
	  <div class="container">	  	
	  	<?php if($this->session->flashdata('message')): ?>
	  	<center><h4 style="color: red;"><?php echo $this->session->flashdata('message'); ?></h4></center>
	  	<?php endif; ?>
	  	<center><h1>SILAHKAN LOGIN</h1></center>
	    <label for="username"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username" required>
	    <label for="password"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required>
	    <button type="submit">LOGIN</button>		
	  </div>
	
	</form>
</body>
</html>