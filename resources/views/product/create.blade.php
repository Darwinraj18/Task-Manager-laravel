<div class="container">
    <h2>Create Product</h2>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Product Image:</label>
            <input type="file" name="image" id="image" class="form-control-file"accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="price">Product Price:</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
