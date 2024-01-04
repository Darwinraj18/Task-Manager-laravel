<style>
            h2 {
        color: #333;
        text-align: center;
        padding: 20px 0;
        background-color: #007bff; 
        margin: 0;
        color: #fff;
    }
.edit-link {
        color: #007bff; 
        text-decoration: none;
        margin-left: 10px;
        font-size: larger;
    }</style>
    <h2>Filter By Status</h2>
@foreach($tasks as $task)
    <div>
        <p>Id: {{ $task->id }}</p>
        <p class="task-details">Title: {{ $task->title }}</p>
        <p class="task-details">Description: {{ $task->description }}</p>
        <p class="task-details">Status: {{ $task->status }}</p>
    </div>
    <hr>
@endforeach
<br>
<a href="{{ route('Tasks.index') }}" class="edit-link"> Go To Index</a>
