<head>
  <title>Barangay 193 Management System - Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/templates/login.css">
<script>
  function myFunction()
  {
    var un = document.forms["myForm"]["username"].value;
    var pw = document.forms["myForm"]["password"].value;
    if (un=="Admin" && pw=="123")
    {
      window.location.href="?page=dashboard";
    }
    else
    {
      alert("Invalid Username and Password");
    }
  }
</script>
</head>

<body>

  <div class="login-box">
    <div class="login-cover">
		  <img src="img/coverphoto.png">
    </div>
	  <div class="login-input">
      <div class="login-logo">
        <img src="img/brgylogo.png">
      </div>
		  <form name="myForm" method="post">
        <div class="label-username"><br><br>
		      <p>Username</p>
		        <input type="text" name="username" placeholder="Enter Username">
        </div>
		      <p>Password</p>
		        <input type="password" name="password" placeholder="Enter Password"><br><br>
            <a href="a">Forgot Password?</a><br><br><br><br>
            <input type="button" name="log" value="Login" onclick="myFunction()">
		  </form>
    </div>
</body>
