function loadValues()
{
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) 
      {
       //document.getElementById("demo").innerHTML = this.responseText;
       }
    };
        xhttp.open("GET", "calc.php", true);
        xhttp.send();
}


function getDirectory()

{

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) 
      
    };
        xhttp.open("GET", "assign10Templ.php", true);
        xhttp.send();



}













































































































































































