<!-- index.blade.php -->

<style>
    .task-details {
        color: #555; /* Set the text color for task details */
        margin-bottom: 10px;
    }

    .delete-button {
        background-color: #dc3545; 
        color: #fff; 
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        border-radius: 3px; 
    }

    .edit-link {
        color: #007bff; 
        text-decoration: none;
        margin-left: 10px;
    }
    .create-link{
        color:green; 
        text-decoration: none;
        margin-left: 10px;
        font-size: x-large;
        
        
    }
    h2 {
        color: #333;
        text-align: center;
        padding: 20px 0;
        background-color: #007bff; 
        margin: 0;
        color: #fff;
    }
</style>


<h2>Task List</h2>
<p><i>Click To =></i><a href="{{ route('Tasks.create') }}" class="create-link">Create New Task</a></p>
@foreach($tasks as $task)

    <div>
        <p >Id: {{ $task->id }}</p>
        <p class="task-details">Title: {{ $task->title }}</p>
        <p class="task-details">Description: {{ $task->description }}</p>

        <form action="{{ route('Tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
        </form>
        
        <a href="{{ route('Tasks.edit', $task->id) }}" class="edit-link">Edit</a>
    </div>
    
    <hr>
@endforeach
