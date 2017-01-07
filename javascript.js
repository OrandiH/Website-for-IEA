function myMap(){
    
    
     var point = new google.maps.LatLng(18.006320, -76.796156);
    
    var MapCanvas = document.getElementById("map");
    
   
    
    var mapOptions = {
        center:point,zoom: 17
    };
    
    var map = new google.maps.Map(MapCanvas,mapOptions);
    
    var marker = new google.maps.Marker({
        position:point,
        animation:google.maps.Animation.BOUNCE
    
    });
    marker.setMap(map);
}

