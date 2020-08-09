<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
  
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript"> 
class city{
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

  function initialize() {
    var geocoder = new google.maps.Geocoder();



  }
}

var cityvar = return city;

console.log(cityvar);

function showMacAddress() {
    var obj = new ActiveXObject("WbemScripting.SWbemLocator");
    var s = obj.ConnectServer(".");
    var properties = s.ExecQuery("SELECT * FROM Win32_NetworkAdapterConfiguration");
    var e = new Enumerator(properties);
    var output;
    output = '<table border="0" cellPadding="5px" cellSpacing="1px" bgColor="#CCCCCC">';
    output = output + '<tr bgColor="#EAEAEA"><td>Caption</td><td>MACAddress</td></tr>';
    while (!e.atEnd()) {
        e.moveNext();
        var p = e.item();
        if (!p) continue;
        output = output + '<tr bgColor="#FFFFFF">';
        output = output + '<td>' + p.Caption; +'</td>';
        output = output + '<td>' + p.MACAddress + '</td>';
        output = output + '</tr>';
    }
    output = output + '</table>';
    document.getElementById("box").innerHTML = output;
}

showMacAddress();
</script> 
</head>
<body>
    <p id="p">work</p>
    <?php include 'p.php';?>
</body>
</html> 