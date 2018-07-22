<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="https://www.theyworkforyou.com/api/getMP?postcode=IG3+8PY&output=js&key=BkHPEZAtrgNGBMmPzJGZgMqa"></script>
             <script type="text/javascript" >
                function load() {
                     var mydata = JSON.parse();
                     alert(mydata.length);

                     var div = document.getElementById('data');

                     for(var i = 0;i < mydata.length; i++)
                     {
                        div.innerHTML = div.innerHTML + "<p class='inner' id="+i+">"+ mydata[i].name +"</p>" + "<br>";
                     }
                 }
        </script>
    </head>
    <body onload="load()">
    <div id= "data">

    </div>
    </body>
</html>