<h1>Edit Coach</h1>

<form action="{{ route('coaches.update', $coach->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name', $coach->name) }}"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email', $coach->email) }}"><br><br>

    <button type="submit">Update Coach</button>
</form>

<a href="{{ route('coaches.index') }}">Back to Coaches List</a>