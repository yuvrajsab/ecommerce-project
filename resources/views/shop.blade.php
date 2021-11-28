@extends('master')

@section('content')

    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        <div class="jumbotron text-center clearfix">
            <h2>Black Friday Sale</h2>
            <p>TAKE EXTRA 20% OFF IN ENTIRE SITE AND FREE SHIPPING</p>
            <p>
                <a href="#products" class="btn btn-primary btn-lg">View Products</a>
            </p>
        </div> <!-- end jumbotron -->

		<div id="products">
			@foreach ($products->chunk(4) as $items)
				<div class="row">
					@foreach ($items as $product)
						<div class="col-md-3">
							<div class="thumbnail">
								<div class="caption text-center">
									<a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
									<a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
									<p>{{ $product->price }}</p>
									</a>
								</div> <!-- end caption -->
							</div> <!-- end thumbnail -->
						</div> <!-- end col-md-3 -->
					@endforeach
				</div> <!-- end row -->
			@endforeach
		</div>
    </div> <!-- end container -->

@endsection
