<h2>Product List</h2>

    @foreach($products as $product)
        <div>
            <p>Name: {{ $product->name }}</p>
            <p>Price: {{ $product->price }}</p>
            <!-- Add more fields as needed -->
        </div>
        <hr>
    @endforeach
