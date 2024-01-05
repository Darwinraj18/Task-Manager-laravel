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
    .logout{
        color:red; 
        text-decoration: none;
        margin-left: 80%;
        font-size: large;
        
    }

</style>
<h2>Task List</h2><br>
<a href="{{ route('login') }}" class="logout">LogOut</a><br>
<a href="{{ route('User.edit', ['id' => auth()->id()]) }}" class="logout">Edit Profile</a>
@php
$tasks = auth()->check() ? \App\Models\TaskModel::where('userid', auth()->id())->get() : collect();
    $uniqueStatuses = collect();
@endphp

@foreach($tasks as $task)
    <div>
       
        <br>
@unless($uniqueStatuses->contains($task->status))
    <a href="{{ route('Tasks.filter', ['status' => $task->status]) }}" class="edit-link">Filter by {{ $task->status }}</a>
    <?php $uniqueStatuses->push($task->status); ?>
@endunless
    </div>


@endforeach

<p><i>Click To =></i><a href="{{ route('Tasks.create') }}" class="create-link">Create New Task</a></p>
@php
    $tasks = \App\Models\TaskModel::where('userid', auth()->id())->get();
    $uniqueStatuses = collect();
@endphp
@foreach($tasks as $task)
    <div>
        <p >Id: {{ $task->id }}</p>
        <p class="task-details">Title: {{ $task->title }}</p>
        <p class="task-details">Description: {{ $task->description }}</p>
        <p class="task-details">status: {{ $task->status }}</p>
        <form action="{{ route('Tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
        </form>
        
        <a href="{{ route('Tasks.edit', $task->id) }}" class="edit-link">Edit</a>
    </div>
    
    <hr>
@endforeach