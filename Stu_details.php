<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM events,registered r ,participent p WHERE events.event_id=r.event_id and r.usn = p.usn order by event_title");
?>
<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>

<body><a href="adminPage.php" style="text-decoration: none; font-size: 18px; padding: 10px; display: inline-block; background:rgb(245, 248, 251); color: black; border-radius: 5px; margin: 10px;">
Home
</a>

 
<div class = "content">
<div class = "container">
<h1>Student details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <table class="table table-hover" >
  
  <tr>
  <th>USN</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Sem</th>
    <th>Email</th>
    <th>Phone</th>
    <th>College</th>
    <th>Event</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["usn"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["branch"]; ?></td>
    <td><?php echo $row["sem"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["college"]; ?></td>
    <td><?php echo $row["event_title"]; ?></td>
   
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
 </body>
</html>
