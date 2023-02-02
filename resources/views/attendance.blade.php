<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .attendance-container {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px 0 #ccc;
      margin-top: 50px;
    }

    .attendance-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .attendance-header h3 {
      font-weight: bold;
      color: #333;
    }

    .attendance-table {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="attendance-container">
      <div class="attendance-header">
        <h3>Attendance</h3>
      </div>
      <table class="table attendance-table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($attendances as $attendance)
            <tr>
              <td>{{ $attendance->date }}</td>
              <td>{{ $attendance->time }}</td>
              <td>{{ $attendance->status }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
