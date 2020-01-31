<!DOCTYPE html>
<html>
<head>
<title>Parking Spaces </title>


<style>
   #map{
       height:400px;
       width: 100%;
   }
</style>

</head>
<body>
<h3>Near by Parking Spaces</h3>
 <div id="map"></div>


<script>
    function initMap(){
        var colombo = {lat:6.902480,lng:79.861160};
        var options = {
            zoom : 16,
            center:colombo

        }

        var map = new google.maps.Map(document.getElementById('map'),options);

       
        addMarker({lat:6.902480,lng:79.861160});
        addMarker({lat:6.874945,lng:79.861459});
        addMarker({lat:6.891838,lng:79.858753});
        

        function addMarker(coords){

            var marker = new google.maps.Marker({
            position:coords,
            map:map
        });

        var infowindow = new google.maps.InfoWindow({
            content :'<h1>Lynn MA</h1>'
        });

        marker.addListener('click',function(){
            infowindow.open(map, marker);
        });

        }
    }
</script>
 <script  async defer src="http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=&callback=initMap">></script>
 
</body>
</html>

