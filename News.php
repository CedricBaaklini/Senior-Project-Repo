<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="Style.css">

    <script type="text/javascript" src="Script.js" charset="utf-8">  </script>

    <script src="https://kit.fontawesome.com/cf085a3950.js" crossorigin="anonymous"></script>

    <title> News </title>

  </head>

  <body>

    <div class="topnav" id="myTopnav">

      <a href="Welcome.php"> <i class="fa fa-fw fa-home"> </i> Home </a>

      <a href="About.php" class="active"> <i class="fa-solid fa-address-card"></i> About </a>

      <a href="News.php"> <i class="fa fa-newspaper"></i> News </a>

      <a href="Search.php"> <i class= "fa fa-fw fa-search"></i> Item Manager  </a>
		
	  <a href="Searchdonation.php"> <i class= "fa fa-fw fa-search"></i> Donation Manager </a>	

      <a href="Donate.php"> <i class="fa-solid fa-hand-holding-dollar"></i> Donate </a>

      <a href="Contact.php"> <i class="fa fa-fw fa-envelope"></i> Contact </a>

      <a href="Login.php"> <i class="fa fa-fw fa-user"></i> Log in </a>

      <a href="Signup.php"> <i class="fa-solid fa-user-plus"></i> Sign up </a>

	  <a href="logout.php"> <i class="fa-solid fa-user-minus"></i> Log Out </a>



      <a href="javascript:void(0);" class="icon" onclick="hover()">

        <i class="fa fa-bars"> </i>

      </a>

    </div>
	  
	    <?
	  session_start();
	  if(!isset($_SESSION["name"]))
		{
		  header('Location: https://carolinebronson.com/Senior%20Project/Login.php');//redirect the browser to the log in page
		  exit();
	  	}
		?>

    <h1> News</h1>

	  <h3>Hello over time this section will contain News updates for this site, if you have any issues please go to the contact page.</h3>
    <p>  </p>

  </body>

</html>