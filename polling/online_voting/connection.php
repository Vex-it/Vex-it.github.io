

<?php
$con=mysqli_connect("eu-cdbr-west-02.cleardb.net","b4a860a22398a3","dd77175d","heroku_a68dd1418d68110");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 

mysqli_close($con);
?>