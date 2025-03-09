<h1>Edite students </h1>


<form action="{{route('students.update' , $students->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"  value="{{$students->name}}"><br><br>


    <label for="number">number:</label>
    <input type="text" id="number" name="number" value="{{$students->number}}" ><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$students->email}}"><br><br>

    <button type="submit">ubdate</button>

</form>