//function for the nav bar.

function hover()
{
  var x = document.getElementById('topnav');

  if (x.className === "topnav")
  {
    x.className += " responsive";
  }

  else
  {
    x.className = "topnav";  
  }
}
