
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Students</title>
    <!-- تضمين Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">phone</th>
        <th scope="col">bio</th>
        <th scope="col">student_id</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <th scope="row">{{$profile->id}}</th>
            <td>{{$profile->phone}}</td>
            <td>{{$profile->bio}}</td>
            <td>{{$profile->student_id}}</td>
          </tr>
        @endforeach
     
     
    </tbody>
  </table>
  
    <!-- تضمين Bootstrap JS (اختياري) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>