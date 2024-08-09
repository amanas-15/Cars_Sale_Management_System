@extends('layouts.appCustomer')



@section('title')
    Home

    
    
@endsection

@section('m-content')

<!DOCTYPE html>
<html>
	
<body>
	<div id="frame">
		<input type="radio" name="frame" id="frame1" checked />
		<input type="radio" name="frame" id="frame2" />
		<input type="radio" name="frame" id="frame3" />
		<input type="radio" name="frame" id="frame4" />
		<div id="slides">
			<div id="overflow">
				<div class="inner">
					<div class="frame frame_1">
						<div class="frame-content">
                            <img src="G-Wagon.jpeg">
							<h2>Slide 1</h2>
						</div>
					</div>
					<div class="frame frame_2">
						<div class="frame-content">
                        <img src="G-Wagon1.jpeg">
							<h2>Slide 2</h2>
						</div>
					</div>
					<div class="frame frame_3">
						<div class="frame-content">
                        <img src="G-Wagon4.jpeg">
							<h2>Slide 3</h2>
						</div>
					</div>
					<div class="frame frame_4">
						<div class="frame-content">
                        <img src="G-Wagon3.jpeg">
							<h2>Slide 4</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="controls">
			<label for="frame1"></label>
			<label for="frame2"></label>
			<label for="frame3"></label>
			<label for="frame4"></label>
		</div>
		<div id="bullets">
			<label for="frame1"></label>
			<label for="frame2"></label>
			<label for="frame3"></label>
			<label for="frame4"></label>
		</div>
	</div>
</body>
	
</html>

    <div class="row">
        @foreach ($cars as $car)
            <div class="col-md-6 col-xl-4">
                <div class="card  shadow-lg mb-5  rounded">
                    <img class="card-img-top" src="{{ asset('users/cars/' . $car->picture) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">{{ $car->description }}</p>
                        <p class="card-text text-capitalize">{{ $car->color }} | {{ $car->type }} | <span
                                class="text-danger">{{ $car->price }}$</span></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text">
                                <small class="text-muted">Last updated {{ $car->updated_at->diffforhumans() }}</small>
                            </p>
                            <a href="{{ route('order-create', ['id' => $car->id]) }}"
                                class="btn rounded-pill btn-icon btn-primary">
                                <span class="tf-icons bx bxs-cart-add"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
<div class="row">
<div class="happy-cust-div">
    <h1>Our Happy Customers </h1>
    </div>
<figure class="snip1390">
  <img src="nishil.jpg" alt="profile-sample3" class="profile" />
  <figcaption>
    <h2>Rana Nishil</h2>
    <h4>Buyer</h4>
    <blockquote> I always loved fast premium cars and dreamt of having a collection of luxury cars. Found HSC to be the bestplace for buying such cars, loved the transparency and honesty in their dealing. The entire team went out of their
       way to make me comfortable. Even bought an unregistered car from HSC at a price of Pre Owned.</blockquote>
  </figcaption>
</figure>
<figure class="snip1390 hover"><img src="rahim.jpg" alt="profile-sample5" class="profile" />
  <figcaption>
    <h2>Rahim Khan</h2>
    <h4>Buyer</h4>
    <blockquote>I'am a luxury car enthusiast and have a great passion for exquisite premium cars. With a great coordination and support of HSC, | have always got the perfect car for me. Not only that | even experienced an easy delivery. If you are looking for the best Pre Owned Car experience - HSC are the guys to trust.

</blockquote>
  </figcaption>
</figure>
<figure class="snip1390"><img src="buyerabe.jpg" alt="profile-sample6" class="profile" />
  <figcaption>
    <h2>ASHISH SHARMA</h2>
    <h4>Buyer</h4>
    <blockquote>Taking out time from my busy schedule to check and verify all details of a Pre Owned Car was a hassle. These guys made the overall experience a pleasure. Completely trustworthy and reliable.</blockquote>
  </figcaption>
</figure>
</div>
	



	
@endsection


@section('styles')
    <style>
        .card:hover {
            padding: 20px !important;
        }
        body{
            background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url("home2.jpg");

        }
    </style>
@endsection
