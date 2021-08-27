@extends("website.layout.layout")

@section("title")
	Login
@endsection


@section("header")

@endsection
@section("slider")


@endsection


@section("main")
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                @if(!empty($msg))

                    <p>{{ $msg }}</p>
                    
                @endif

                    <form method="POST" action="{{ URL('web/login') }}">
                        
                    
                    @csrf()
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                    value="{{ old('email') }}"
                     aria-describedby="emailHelp"  placeholder="Enter Username"/>

                     @error("email")
                        <div class="alert alert-danger">{{$message}}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                    @error("password")
                        <div class="alert alert-danger">{{$message}}</div>
                     @enderror
                  </div>

                    <button  type="submit" class="btn btn-primary">Login </button>
                 
                </form>

            </div>
        </div>
    </div>
@endsection