<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
    <style media="screen">
      *
      {
        box-sizing: border-box;
      }

      input[type=text], input[type=password]
      {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: white;
      }

      input[type=text]:focus, input[type=password]:focus
      {
        background-color: gray;
        outline: none;
      }

      hr
      {
        border: 1px solid gray;
        margin-bottom: 25px;
      }

      button
      {
        background-color: #D3D3D3;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

      button:hover
      {
        opacity:1;
      }

      .cancelbtn
      {
        padding: 14px 20px;
        background-color: #696969;
        color: white;
      }

      .cancelbtn, .signupbtn
      {
        float: left;
        width: 50%;
      }

      .container:
      {
        padding: 16px;
      }

      .clearfix:after
      {
        content: "";
        clear: both;
        display: table;
      }

      @media screen and (max-width: 300px)
      {
        .cancelbtn, .signupbtn
        {
          width: 100%;
        }
      }
    </style>
    <script type="text/javascript" src="Script.js">  </script>
    <script src="https://kit.fontawesome.com/cf085a3950.js" crossorigin="anonymous"></script>
    <title> Sign up </title>
  </head>
  <body>

    <!--- PHP for sign up form --->

    <div class="topnav" id="myTopnav">

      <a href="Welcome.html"> <i class="fa fa-fw fa-home"> </i> Home </a>

      <a href="About.html"> <i class="fa-solid fa-address-card"></i> About </a>

      <a href="News.html"> <i class="fa fa-newspaper"></i> News </a>

      <a href="Search.html"> <i class= "fa fa-fw fa-search"></i> Search </a>

      <a href="#"> <i class="fa-solid fa-hand-holding-dollar"></i> Donate </a>

      <a href="Contact.html"> <i class="fa fa-fw fa-envelope"></i> Contact </a>

      <a href="Login.html"> <i class="fa fa-fw fa-user"></i> Log in </a>

      <a href="Signup.html" class="active"> <i class="fa-solid fa-user-plus"></i> Sign up </a>




      <a href="javascript:void(0);" class="icon" onclick="hover()">

        <i class="fa fa-bars"> </i>

      </a>

    </div>

    <!--- PHP code for form starts here --->

    <?php

    require 'Connect.php';

    $firstNameErr = $lastNameErr = $usernameErr = $emailErr = $passwordErr = $repeatErr = "";
    $firstName = $lastName = $username = $email = $password = $repeat = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

      if (empty($_POST["firstname"]))
      {
        $firstNameErr = "First Name is Required";
      }
      else
      {
        $firstName = test_input($_POST["firstname"]);
      }

      if (empty($_POST["lastname"]))
      {
        $lastNameErr = "Last Name is Required";
      }
      else
      {
        $lastName = test_input($_POST["lastname"]);
      }

      if (empty($POST["email"]))
      {
        $emailErr = "Email is required";
      }
      else
      {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          $emailErr = "Invalid email format";
        }
      }

      if (empty($_POST["username"]))
      {
        $nameErr = "Username is required";
      }
      else
      {
        $name = test_input($_POST["username"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $name))
        {
          $nameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["psw"]))
      {
        $passwordErr = "Password is required";
      }
      else
      {
        $password = test_input($_POST["psw"]);
      }

    }

    ?>

    <form method="post" style="border:1px solid: white" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">

      <div class="container">

        <h1> Sign up </h1>
        <p> Please fill in this form to create an account. </p>

        <hr>

        <label for="firstname"> <b> First Name </b> </label>
        <input type="text" placeholder="Enter First Name" name="firstname" required>

        <label for="lastname"> <b> Last Name </b> </label>
        <input type="text" placeholder="Enter Last Name" name="lastname" required>

        <label for="email"> <b> Email </b> </label> <span class="error"> <?php echo "*" + $emailErr; ?>  </span>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="username"> <b> Username </b> </label> <span class="error"> <?php echo "*" + $usernameErr; ?>  </span>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"> <b> Password </b> </label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"> <b> Repeat Password </b> </label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
          Remember me
        </label>

        <p> By creating your account, you agree to our <a href="#" style="color:white"> Terms of Service </a> </p>

      </div>

      <div class="clearfix">

        <button type="button" class="cancelbtn"> Cancel </button>
        <button type="button" class="signupbtn"> Sign Up </button>

      </div>

    </form>

    <?php

    //Code for inserting the data into the database

    ?>

  </body>
</html>