<h1> Add New Coach </h1>

<form action="{{ route('coaches.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <button type="submit">Submit</button>

</form>