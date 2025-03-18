<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br><br>
    <button type="button" class="btn btn-success"><a href="{{route('task1.create')}} " style="color: white; text-decoration: none;">Create user</a></button>
      <br> <br> 
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">password</th>
            <th scope="col">phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                
          
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{ $user->phone ? $user->phone->number : 'non' }}</td>   
            <td>
              <a href="{{ route('task1.edit', $user->id) }}">Edit</a>
              <form action="{{ route('task1.destroy', $user->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
              </form>
          </td>
          </tr>
         @endforeach
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>