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
    <form  action="{{route('task1.store')}}"  method="Post">
        @csrf
        <div class="form-group">
            <label for="exampleInputname">Name</label>
            <input type="name" class="form-control" name="name" placeholder="name">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
       
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
      
          <div class="form-group">
            <label for="number">phone</label>
            <input type="text" class="form-control" name="number" placeholder="your phone">
          </div>
          
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
</body>
</html>