<h1> Add New Student </h1>

<form action="{{route('students.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>
    <label for="number">Number:</label>
    <input type="text" id="number" name="number" ><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <button type="submit">Submit</button>

</form>
