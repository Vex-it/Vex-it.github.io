




<!DOCTYPE html>
<html>
    
    
    
    
    <head>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>HTML source of <?php echo $url; ?></title>
  </head>
    
<body>
<script>$(document).ready(function(){
  $.ajax({
    url: "https://www.theyworkforyou.com/api/getMP?postcode=IG3+8PY&output=js&key=BkHPEZAtrgNGBMmPzJGZgMqa",
    dataType: 'json',
    success: function(data) {
     /* alert("hi my name is: " + data.full_name); */
        
        document.write("hello" + data.full_name);

    },
    error: function() {
      alert("error");
    }
  });        
});
    
    </script>


</body>
</html>