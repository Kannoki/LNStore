<div class="container contain-bg">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        All Products
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New Product</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><img src="{{asset('assets/products')}}/{{$product->image}}" alt="" style="width: 50px"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->stock_status}}</td>
                                <td>{{$product->regular_price}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    <a href="{{route('admin.editproduct',['product_slug' => $product->slug])}}">Edit</a>
                                    <a href="#" wire:click.preven="deleteProduct({{$product->id}})" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
