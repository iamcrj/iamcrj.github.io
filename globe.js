
var locadisp = document.getElementById('disploc');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
    var x=document.getElementById('bababa');
    function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition,showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
  function showPosition(position) {
      console.log(2);
    var lat1=position.coords.latitude; 
    var long1=position.coords.longitude;
    var latlon = new google.maps.LatLng(lat1, long1)
    var mapholder = document.getElementById('map')
   

    var myOptions = {
    center:latlon,zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    mapTypeControl:false,
    navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
    initialize(lat1,long1);
}
function getloc()
    {
        getLocation();
        }
 
    function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation. To enable location again go to your browser settings."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
function initialize(lat1,long1)
    {
var origin1 = new google.maps.LatLng(lat1,long1);
var destinationA= new google.maps.LatLng(24.6190,73.8908);
var destinationB= new google.maps.LatLng(24.5684,73.6998);
var destinationC= new google.maps.LatLng(24.5827,73.7286);


var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix(
  {
    origins: [origin1],
    destinations: [destinationA,destinationB,destinationC],
    travelMode: 'DRIVING',
    unitSystem: google.maps.UnitSystem.METRIC ,
    avoidHighways:false,
    avoidTolls:false,
  }, callback);
    }
    var placed= ["Maharana Pratap Airport, Udaipur", "City Railway Station, Udaipur", "Rana Pratap Nagar, Udaipur"];
function callback(response, status) {
    
  if (status == 'OK') {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;
 
    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      for (var j = 0; j < results.length; j++) {
        var element = results[j];
        var distance = element.distance.text;
        var duration = element.duration.text;
        var from = origins[i];
        var to = placed[j];
       
        var baba=document.getElementById('output');
         x.innerHTML+='<div class="bbp"><h4 style="color:red;">'+to+'</h4> Distance -'+distance+' & Time to reach -'+duration+'.</div><br>';
             
      }
    }
        
  }
}

btn.onclick = function() {
   locadisp.style.display = "block";
    if(x.innerHTML!='')
        {
           return 0; 
        }
    else
        {
            getloc();
        }
}
span.onclick = function() {
    locadisp.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == locadisp) {
        locadisp.style.display = "none";
    }
}
