<!DOCTYPE html>
<html lang = "en">
   <head>
      <title>Piano student List</title>
	  <meta charset = "utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle02.css">
   </head>


<body>
<div class="container">
   <?php
  // GEt form data values
  
   $first_name = $_GET ["first_name"];
   $last_name = $_GET ["last_name"];  
	 $student_id = $_GET ["student_id"];
	 $performace = $_GET ["performace"];
	 $skill = $_GET ["skill"];
	 $instrument = $_GET ["instrument"];
	 $location = $_GET ["location"];
	 $room = $_GET ["room"];
	 $time_slot = $_GET ["time_slot"];
	 ?>
	 <header>
	 <h1> Student List </h1>
   <p><a href="assign13.html">Register more students.</a></p>
	 </header><hr>
   <nav>	<h4> Thank you for all help Brother Philips, You have a big Christlike heart!</h4> </nav>
   <article>
	  <table class="table table-bordered">
    <caption>Table students</caption> 
   <thead>
	 <tr>
	    <th>First name</th>
		<th>Last name</th>
		<th>ID</th>
		<th>Performace</th>
		<th>Skill</th>
		<th>Instrument</th>
		<th>Location</th>
		<th>Room</th>
		<th>Time</th>
	</tr>
 </thead>
 <tbody>
	<tr>
	    <td><?php print ("$first_name"); ?></td>
		<td><?php print ("$last_name"); ?></td>
		<td><?php print ("$student_id"); ?></td>
		<td><?php print ("$performace"); ?></td>
		<td><?php print ("$skill"); ?></td>
		<td><?php print ("$instrument"); ?></td>
		<td><?php print ("$location"); ?></td>
		<td><?php print ("$room"); ?></td>
		<td><?php print ("$time_slot"); ?></td>
	</tr>
 </tbody>
 </table>
 </article>
 
 <hr>
<footer><blockquote cite= "https://www.lds.org/general-conference/2019/04/57nelson?lang=eng">
"As we speak of our temples old and new, may each of us signify by our actions that we are true disciples of the Lord Jesus Christ. May we renovate our lives through our faith and trust in Him. May we access the power of His Atonement by our repentance each day. And may we dedicate and rededicate our lives to serving God and His children on both sides of the veil."</blockquote>
<p><cite>Closing Remarks</cite> By Russel M Nelson. <a href = "https://www.lds.org/general-conference/2019/04/57nelson?lang=eng"> General Conference Sunday Afternoon Session, April 2019.</a></p>
</footer>
 
</div>
  
	</body>
</html>