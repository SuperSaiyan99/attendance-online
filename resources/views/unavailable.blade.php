<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/ending.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}">
  <title>DTP | Existing User</title>
</head>
<body>
  <div class="grid-container">
    <img src="img/dtp_owl.png" id="owl">
    <h1>Attendance is unavailable!</h1>
    <p class="quote">
      Check back Later! It's still <b><span id="time"></span></b>
    </p>
    <p>VIVA EL IT SENIOR!</p>
    <p>Kindly exit the page.</p>
  </div>

<script>
      const currentTime = new Date();
      document.getElementById("time").innerHTML = currentTime.toLocaleTimeString();
</script>

</body>
</html>