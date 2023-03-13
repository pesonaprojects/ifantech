<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <!--leaflet js after leaflet css-->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <title>Fetch JSON from API</title>
</head>
<body>
    <p>
        latitude: <span id="lat"></span><br />
        longitude: <span id="lon"></span>
    </p>
    <style>
    #node1Map { height: 260px; }
</style>
<div id="node1Map"></div>
<script>
    const mymap = L.map('node1Map').setView([-7.813044768423498, 110.37689208984376], 1);
    const attribution ='&copy: <a href="https://www.openstreetmap.org/copyright">Ifantech</a>';

    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const tiles = L.tileLayer(tileUrl, { attribution });
    tiles.addTo(mymap);

    // get coordinate
    var lat, lng;

    var lat, lng, marker;
    mymap.on("click", function (e) {
      if (marker) mymap.removeLayer(marker);
      lat = e.latlng.lat;
      lng = e.latlng.lng;
      console.log(lat);
      console.log(lng);
      marker = L.marker([lat, lng]).addTo(mymap);
      document.getElementById("lat").textContent = lat;
      document.getElementById("lon").textContent = lng;
  });

</script>
</body>
</html>