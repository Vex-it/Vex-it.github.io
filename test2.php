

<?php

  $url = 'https://www.theyworkforyou.com/api/getMP?postcode=IG3+8PY&output=js&key=BkHPEZAtrgNGBMmPzJGZgMqa';

?>



<!DOCTYPE html>
<html>
    
    <head>
    <title>HTML source of <?php echo $url; ?></title>
  </head>
    
<body>

<p id="user"></p>

<script>
var s = '<?php echo htmlspecialchars(file_get_contents($url)); ?>';

var obj = JSON.parse(s);

document.getElementById("user").innerHTML =
"Name: " + obj.given_name + " " + obj.family_name + "<br>" +
"Location: " + obj.party;
</script>

</body>
</html>