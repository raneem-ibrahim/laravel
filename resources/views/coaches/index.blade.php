<h1>Show All Coaches</h1>

<a href="{{ route('coaches.create') }}">Create Coach</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($coaches as $coach)
            <tr>
                <td>{{ $coach->name }}</td>
                <td>{{ $coach->email }}</td>
                <td>
                    <a href="{{ route('coaches.show', $coach->id) }}">View</a>

                    <a href="{{ route('coaches.edit', $coach->id) }}">Edit</a>

                    <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>