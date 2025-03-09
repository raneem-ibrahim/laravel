<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Students</title>
    <!-- تضمين Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* تنسيقات إضافية */
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .table-container {
            margin: 20px auto;
            width: 80%;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h1>Show All Students</h1>
    <div class="table-container">
        <button type="button" class="btn btn-success">
            <a href="{{ route('students.create') }}" style="color: white; text-decoration: none;">Add New</a>
        </button>
       
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>numder</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                         <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->number}}</td>
                        <td>{{$student->email}}</td>
                        <td ><a href="{{route('students.edit' , $student->id)}}"> <button type="button" class="btn btn-warning">edit</button></a> 
                            
                            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <!-- تضمين Bootstrap JS (اختياري) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>