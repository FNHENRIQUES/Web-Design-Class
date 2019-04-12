<!DOCTYPE html>
<!-- submitOrder.php - Processes the form described in
assign11_1.html
-->
<html lang = "en">
<head>
   <title> Process the assign11_1.html form </title>
   <meta charset = "utf-8" />
   <meta name="description" content="Free Web tutorials">
   <meta name="keywords" content="HTML,CSS,XML,JavaScript,php">
   <meta name="author" content="Fernando N Henriques">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" type="text/css" href="mystyle02.css">
   
   <style type = "text/css">
   td, th, table {border: thin solid black;}
   </style>
</head>
<body>
<Header>
  <h1> Fernando BS - Order confirmation. </h1>
  <p><a href="../index.html">CS 213 Assignments</a></p>
  </header>

   <?php
   // Get form data values
      $progrw = $_POST["progrw"];
      $efecmod = $_POST["efecmod"];
      $cleancode = $_POST["cleancode"];
      $modjs = $_POST["modjs"];
      $name = $_POST["name"];
      $lastname = $_POST["lastname"];
      $street = $_POST["street"];
      $city = $_POST["city"];
      $tel = $_POST["tel"];
      $payment = $_POST["payment"];
      $expire = $_POST["expire"];
// If any of the quantities are blank, set them to zero
      if ($progrw == "") $progrw = 0;
      if ($efecmod == "") $efecmod = 0;
      if ($cleancode == "") $cleancode = 0;
      if ($modjs == "") $modjs = 0;
// Compute the item costs and total cost
      $progrw_cost = 86.0 * $progrw;
      $efecmod_cost = 38.0 * $efecmod;
      $cleancode_cost = 23.69 * $cleancode;
      $modjs_cost = 19.99 * $modjs;
      $total_price = $progrw_cost + $efecmod_cost +
      $cleancode_cost + $modjs_cost;
      $total_items = $progrw + $efecmod + $cleancode + $modjs;
// Return the results to the browser in a table
?>
      <h4> Customer: </h4>
     <?php
        print ("$name $lastname <br /> $street <br /> $city <br /> $tel <br />");
      ?>
   <p /> <p />
   <table>
      <caption> Order Information </caption>
      <tr>
         <th> Product </th>
         <th> Unit Price </th>
         <th> Quantity Ordered </th>
         <th> Item Cost </th>
      </tr>
      <tr>
         <td> Programming the World Wide Web </td>
         <td> $86.00 </td>
         <td> <?php print ("$progrw"); ?> </td>
         <td> <?php printf ("$ %4.2f", $progrw_cost); ?>
         </td>
      </tr>
      <tr>
         <td> Efective Modern C++ </td>
         <td> $38.00 </td>
         <td> <?php print ("$efecmod"); ?> </td>
         <td> <?php printf ("$ %4.2f", $efecmod_cost); ?>
         </td>
      </tr>
      <tr>
         <td> Clean Code </td>
         <td> $23.69 </td>
         <td> <?php print ("$cleancode"); ?> </td>
         <td> <?php printf ("$ %4.2f", $cleancode_cost); ?>
         </td>
      </tr>
      <tr>
         <td> The Modern JavaScript </td>
         <td> $19.99 </td>
         <td> <?php print ("$modjs"); ?> </td>
         <td> <?php printf ("$ %4.2f", $modjs_cost); ?>
         </td>
      </tr>
   </table>
<p /> <p />
      <?php
         print "You ordered $total_items book items <br />";
         printf ("Your total bill is: $ %5.2f <br />", $total_price);
         print "Your chosen method of payment is: $payment <br /> Your card expires at: $expire<br />";     
      ?>
<form>
       <input type="button" value="Cancel Order" onclick="window.location.href='assign11.html'" />
       </form>
<p />



</body>
</html>