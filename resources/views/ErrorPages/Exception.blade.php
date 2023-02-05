<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ending.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}">
  <title>DTP | Attendance Unavailable</title>
</head>
<body>
  <div class="grid-container">
    <img src="img/dtp_owl.png" id="owl">
    <h1>There was an error encountered:</h1>

    @if (isset($error))
    <div class="alert alert-danger">
      {{ $error }}
    </div>
  @endif
  


  </div>

<script>
      const currentTime = new Date();
      document.getElementById("time").innerHTML = currentTime.toLocaleTimeString();
</script>

</body>
</html>