<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Geolocation</h1>
    <p id="location">Fetching location...</p>

    <script>
        const locationElement = document.getElementById('location');

        const successCallback = (position) => {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            locationElement.innerHTML = `Latitude: ${latitude}<br>Longitude: ${longitude}`;
        };

        const errorCallback = (error) => {
            locationElement.textContent = `Error: ${error.message}`;
        };

        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    </script>
</body>
</html>

</html>