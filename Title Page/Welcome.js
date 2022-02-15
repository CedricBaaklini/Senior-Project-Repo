//function for the nav bar.

function hover()
{
  var x = document.getElementById("myTopnav");

  if (x.className === "topnav")
  {
    x.className += " responsive";
  }

  else
  {
    x.className = "topnav";
  }
}
