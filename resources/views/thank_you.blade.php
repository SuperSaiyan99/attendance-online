<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/ending.css">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <title>DTP | Thank You</title>
</head>
<body>
  <div class="grid-container">
    <img src="img/positive-vote.png" id="thumbs-up">
    <img src="img/dtp_owl.png" id="owl">
    <h1>Thank You ! You are timed out at:<span id="time"></span></h1>
    <p class="quote">
      It's not the team with the best Players that win.
      It's the players with the best team that wins!
    </p>
  </div>

  <input type="button" value="Back" onclick="back()">
  

  
  <script>
    const currentTime = new Date();
      document.getElementById("time").innerHTML = currentTime.toLocaleTimeString();

  function back() {
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
 
  if (hours >= 8 && hours < 9) {
    window.location.href = '{{ route("home") }}';
  } else if (hours == 11 && minutes >= 00 && minutes <= 30) {
    window.location.href = '{{ route("home") }}';
  } else if (hours >= 12 && hours <= 13 && minutes >= 30 && minutes < 60) {
    window.location.href = '{{ route("home") }}';
  }else if (hours == 16 && minutes >= 00 && minutes <= 30) {
    window.location.href = '{{ route("home") }}';
  }
   else {
    window.location.href = "{{ url('/unavailable') }}";
  }


}
  </script>
</body>
</html>
