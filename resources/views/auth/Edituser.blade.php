<div class="container">
        <h2>Edit Profile</h2>
        <form action="{{ route('User.update', ['id' => $task->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Name :</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $task->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Email :</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $task->email }}" required>
            </div>

            <div class="form-group">
                <label for="status">Password:</label>
                <input type="text" name="password" id="password" class="form-control" value="{{ $task->password }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

