@extends("website.layout.layout")

@section("title")
	Iphone Product Detail
@endsection

@section("slider")
	<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product Listings</h2>

                        <a href="{{ URL('web/products/create') }}"> <button>Add Product</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section("main")
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col"> Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($listing as $row)
                        <tr>
                          <th scope="row">{{ $row->id }}</th>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->price }}</td>
                          <td>

                            <a href="{{ URL('web/products',$row->id) }}"><button>View</button></a>
                            
                            <a href="{{ URL('web/products/'.$row->id.'/edit') }}"><button>Edit</button></a>
                            
                            <a href="{{ URL('web/products/'.$row->id.'?delete=1') }}"><button>Delete</button></a>
                          
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection