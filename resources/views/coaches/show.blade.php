<h1>Coach Details</h1>

<div>
    <strong>Name:</strong> {{ $coach->name }}<br><br>
    <strong>Email:</strong> {{ $coach->email }}<br><br>
</div>

<a href="{{ route('coaches.index') }}">Back to Coaches List</a>