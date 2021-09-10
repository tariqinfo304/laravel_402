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
                      <th>Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col"> Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($listing as $row)
                        <tr>
                          <td scope="row">{{ $row->id }}</td>
                          <td><img width="50px" src="{{ Asset($row->image) }}"/></td>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->price }}</td>
                          <td>

                          <!--   <a href="{{ URL('web/products',$row->id) }}"><button>View</button></a> -->

                          <button onclick="get_product({{$row->id}})">View</button>
                            
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


<script type="text/javascript">


    function get_product(id)
    {
        $.ajax({
          method: "GET",
          url: "http://localhost/laravel_402/public/api/product/"+id,
          data: { name: "John", location: "Boston" }
        }).done(function( data ) {

            console.log(data);
        }).error(function(error){
            alert("Error");
        });
    
    }

    function get_all()
    {   
          $.ajax({
      method: "GET",
      url: "http://localhost/laravel_402/public/api/product",
      data: { name: "John", location: "Boston" }
    }).done(function( data ) {

        console.log(data);
    
    });

    }
  
</script>
@endsection