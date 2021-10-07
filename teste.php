<!doctype html>
<html>
<script type="text/javascript">
     alert("aaaaaaathchin")
function getGPS()
{
    if (navigator.geolocation)
    {  
        navigator.geolocation.getCurrentPosition(showGPS);
    }
    else
    {  
        gpsText.innerText = "No GPS Functionality.";  
    }
}
function showGPS(position)
{
    alert('Wow!');
    document.cookie="latitude="+position.coords.latitude;
    document.cookie="longitude="+position.coords.longitude;
}
</script>
<body onload="getGPS()">
</body>
</html>
