function loadValues()
{
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) 
      {
       //document.getElementById("demo").innerHTML = this.responseText;
       }
    };
        xhttp.open("GET", "/cgi-bin/ercanbracks/mileage/mileageAjaxJSON", true);
        xhttp.send();
}


function getCalc()

{

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) 
      
    };
        xhttp.open("GET", "", true);
        xhttp.send();

}













































































































































































