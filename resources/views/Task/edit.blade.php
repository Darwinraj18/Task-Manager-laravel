<!-- edit.blade.php -->

    <div class="container">
        <h2>Edit Task</h2>
        <form action="{{ route('Tasks.update', ['id' => $task->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $task->description }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

