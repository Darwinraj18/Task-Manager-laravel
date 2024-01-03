

<style>
    .index{
        text-decoration: none;
        font-size: large;
        color: blue;
        background-color: lightgray;
        margin-left: 10px ;
       
    }
    .form{
        align-items: center;
        background-color: gray;
        text-align: center;
       width: 40%;
        margin-top: 40px;
        margin-left: 30%;
    }
    
    .form-group {
    margin-bottom: 20px; /* Adjust margin as needed */
}

/* Style for the label */
.form-group label {

    font-weight: bold;
    margin-bottom: 5px; /* Adjust margin as needed */
}
</style>

<!-- Create Task -->
<div class="container">

    <h2>Create Task</h2>
    <form action="{{ route('Tasks.store') }}" method="post" class="form">
<br>
        @csrf
        <div class="form-group">
            <label for="name">Title :</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Description :</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('Tasks.index') }}" class="index">index</a>
    </form>
</div>
