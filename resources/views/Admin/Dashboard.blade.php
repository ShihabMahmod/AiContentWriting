@include('Layout.Header')
<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-xxl-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									<!-- Dashboard Slider -->
	
									
									<!-- Welcome CTA -->
									<div class="welcome-cta mg-top-40">
										<div class="welcome-cta__heading">
											<h2 class="welcome-cta__title">Create a new product for Sell..</h2>
										</div>
										<div class="welcome-cta__button">
											<a href="{{url('/upload-pricing-plane')}}" class="nftmax-btn nftmax-btn__bordered bg radius">Upload Pricing Plane</a>
										</div>
									</div>
									<!-- End Welcome CTA -->
									
									<!-- Trending Action -->
									<div class="trending-action mg-top-40">
										<h2 class="trending-action__heading">Availeable Plane</h2>
										<div class="row">
											<div class="col-12">
												<div class="trending-action__slider">
													<!-- Treadning Single -->
                                                    @foreach($allPlane as $allPlane)
													<div class="trending-action__single">
														<!-- Trending Body -->
														<div class="trending-action__body">
															<h2 class="trending-action__title"><a href="active-bids.html">{{ $allPlane['plane_name'] }}</a></h2>
                                                            <p>Usecase No : {{ $allPlane['number_of_usecase'] }}</p>
                                                            <p>Word Generate : {{ $allPlane['maximum_word_generator'] }}</p>
															<p>Word Generate : {{ $allPlane['expiration_day'] }}</p>
															<p>Created at : {{ $allPlane['created_at'] }}</p>
															<p>Created at : {{ $allPlane['serial_no'] }}</p>
															<div class="dashboard-banner__bid dashboard-banner__bid-v2">
																<!-- Single Bid -->
																<div class="dashboard-banner__group dashboard-banner__group-v2">
																	<p class="dashboard-banner__group-small">Price</p>
																	<h3 class="dashboard-banner__group-title">{{ $allPlane['price'] }}</h3>
																</div>
																<!-- End Single Bid -->
																<div class="dashboard-banner__middle-border"></div>
																<!-- Single Bid -->
																<div class="dashboard-banner__group dashboard-banner__group-v2">
																	<p class="dashboard-banner__group-small">Expiration Day</p>
																	<h3 class="dashboard-banner__group-title" >{{ $allPlane['expiration_day'] }}</h3>
																</div>
																<!-- End Single Bid -->
															</div>
														</div>
														<div class="dashboard-banner__button trending-action__bottom">
															<a href="active-bids.html" class="nftmax-btn nftmax-btn__secondary radius">Detals</a>
															<a href="{{url('/edit-plane',$allPlane['id'])}}" class="nftmax-btn nftmax-btn__secondary radius">Edit</a>
															<a href="{{url('/delete-plane',$allPlane['id'])}}" class="nftmax-btn nftmax-btn__secondary radius">Delete</a>
														</div>
													</div>
                                                    @endforeach
													<!-- End Treadning Single -->
													<!-- Treadning Single -->
													
													<!-- End Treadning Single -->
												</div>
											</div>
										</div>
									</div>
									<!-- End Trending Action -->			
					</div>	
				</div>	
			</section>	
@include('Layout.Footer')