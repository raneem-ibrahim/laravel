   <form action="{{ route('task1.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="email" name="email" value="{{ $user->email }}">
        <input type="text" name="password" value="{{ $user->password }}">
        <input type="text" name="number" value="{{ $user->phone->number }}">
        <button type="submit">Update</button>
    </form>