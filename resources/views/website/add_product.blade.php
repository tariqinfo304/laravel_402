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
                        <h2>Add Product</h2>
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

                @if(isset($delete))
                    <form method="POST" action="{{ URL('web/products',$obj->id) }}">
                        @method("delete")
                @elseif(isset($edit))
                    <form method="POST" action="{{ URL('web/products',$obj->id) }}">
                        @method("put")
                @else
                    <form method="POST" action="{{ URL('web/products') }}">
                        
                @endif
                
                {{--
                @if ($errors->any())
                        @foreach($errors->all() as $row)
                            <div class="alert alert-danger">{{$row}}</div>
                        @endforeach
                        
                @endif
                --}}
                    
                    @csrf()
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    value="{{ $obj->name ?? old('name') }}"
                     aria-describedby="emailHelp"  placeholder="Enter Name"/>

                     @error("name")
                        <div class="alert alert-danger">{{$message}}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1" value="{{ $obj->price ?? old('price') }}" placeholder="Price">
                    @error("price")
                        <div class="alert alert-danger">{{$message}}</div>
                     @enderror
                  </div>

                  @if(isset($delete))
                    <button  type="submit" class="btn btn-primary">Are you sure to delete ? </button>
                  @elseif(isset($view))
                    <button disabled="" type="submit" class="btn btn-primary">View Product Only</button>
                  @elseif(isset($edit))
                    <button  type="submit" class="btn btn-primary">Edit Product</button>
                  @else
                    <button type="submit" class="btn btn-primary">Add Product</button>
                  @endif
                </form>

            </div>
        </div>
    </div>
@endsection