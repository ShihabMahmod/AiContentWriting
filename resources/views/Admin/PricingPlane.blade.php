@include('Layout.Header')
<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									<!-- All Notification Heading -->
									<div class="nftmax-inner__heading">
										<h2 class="nftmax-inner__page-title">Create new pricing plane</h2>
									</div>
									<!-- End All Notification Heading -->
									
									<div class="nftmax__item">
										<form class="form" action="{{route('add-pricing-plane')}}" method="POST">
                                            @csrf
											<div class="row">
												<div class="col-12">
													<div class="nftmax__item-box">
														<div class="row nftmax-pcolumn">
															<div class="col-xxl-7 col-lg-7 col-12 nftmax-pcolumn__two">
																<div class="nftmax__item-form--main">
																
																	<div class="nftmax__item-form--group ntfmax__item-form--radio">
																		<div class="ntfmax__item-radio--inner">
																			<label class="nftmax__item-label">Add your pricing plane here <span class="nftmax__item-sublabel">Enter price to allow users instantly purchase your plane</span></label>
																
																		</div>
																	</div>
																	
																	<div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Plane Name </label>
																		<input class="nftmax__item-input" type="text" name="plane_name" placeholder="Plane Name" required="required">
																	</div>

                                                                    <div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Price </label>
																		<input class="nftmax__item-input" type="number" placeholder="Plane Price" name="price" required="required">
																	</div>
																	
																	<div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Expiration day </label>
																		<input class="nftmax__item-input" type="text" placeholder="Expiration day" name="expiration_day" required="required">
																	</div>

                                                                    <div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Number of use case *</label>
																		<input class="nftmax__item-input" type="number" placeholder="Expiration day" name="number_of_usecase" required="required">
																	</div>

                                                                    <div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Serial </label>
																		<input class="nftmax__item-input" type="number" placeholder="Expiration day" name="serial_no" required="required">
																	</div>

                                                                   

                                                                    <div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Maximum keyword generate *</label>
																		<input class="nftmax__item-input" type="number" placeholder="Maximum word generate" name="maximum_word_generator" required="required">
																	</div>
                                                                    

                                                                    <div class="nftmax__item-form--group">
                                                                    <label class="nftmax__item-label">Enable custom search *</label>
																		<select class="nftmax__item-input" name="enable_custom_search_search">
                                                                            <option value="1">Enable</option>
                                                                            <option value="0">Desable</option>
                                                                        </select>
																	</div>

                                                                    <div class="nftmax__item-form--group">
                                                                    <label class="nftmax__item-label">Status *</label>
																		<select class="nftmax__item-input" name="status">
                                                                            <option value="1">Active</option>
                                                                            <option value="0">Inactive</option>
                                                                        </select>
																	</div>
                                                                    
																	
																	<div class="nftmax__item-form--group">
																		<label class="nftmax__item-label">Description </label>
																		<textarea class="nftmax__item-input nftmax__item-textarea" name="description" placeholder="provide a detailed description of your item." required="required"></textarea>
																	</div>																
																	
																</div>
															</div>
														</div>
													</div>
													<div class="nftmax__item-button--group">
														<button class="nftmax__item-button--single nftmax__item-button--cancel" data-bs-toggle="modal"  data-bs-target="#cancel_modal">Cancel</button>
														<button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered--plus radius nftmax-item__btn" data-bs-toggle="modal" data-bs-target="#preview_modal"><span class="ntfmax__btn-textgr">Preview</span></button>
														<button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius nftmax-item__btn" type="submit">Create Now</button>
														<!-- Preview Product -->
														<div class="nftmax-preview__modal modal fade" id="preview_modal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true" >
															<div class="modal-dialog  nftmax-preview__modal-preview">
																<div class="modal-content nftmax-preview__modal-content">
																	<div class="modal-header nftmax__modal__header">
																		<h4 class="modal-title nftmax-preview__modal-title" id="previewModalLabel">Plane Preview</h4>
																		<button type="button" class="nftmax-preview__modal--close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																	</div>
																	<div class="modal-body nftmax-modal__body">
																		<!-- Treadning Action Single -->
																		<div class="trending-action__single">
																			<!-- Treadning Body -->
																			<div class="trending-action__body">
																				<div class="trending-action__author-meta">
                                                                                <h2 class="trending-action__title"><a href="#">Interconnected Planes</a></h2>
																				</div>
																			</div>
																		</div>
																		<!-- End Treadning Action Single -->
																		<div class="nftmax__item-button--group">
																			<button class="nftmax__item-button--single nftmax__item-button--cancel" data-bs-dismiss="modal">Cancel</button>
																			<button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius " type="submit">Create Now
																			</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Preview Product -->
															
														<!-- Preview Product -->
														<div class="nftmax-preview__modal modal fade" id="cancel_modal" tabindex="-1" aria-labelledby="CancelModalLabel" aria-hidden="true" >
															<div class="modal-dialog  nftmax-close__modal-close">
																<div class="modal-content nftmax-preview__modal-content">
																	<div class="modal-header nftmax__modal__header">
																		<h4 class="modal-title nftmax-preview__modal-title" id="CancelModalLabel">Confirm</h4>
																		<button type="button" class="nftmax-preview__modal--close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																	</div>
																	<div class="modal-body nftmax-modal__body modal-body nftmax-close__body">
																		<div class="nftmax-preview__close">
																			<!-- Treadning Head -->
																			<div class="nftmax-preview__close-img"><img src="img/close.png" alt="#"></div>
																			<h2 class="nftmax-preview__close-title">Are you sure you want to Navigate away from this page?</h2>
																			<div class="nftmax__item-button--group">
																				<button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius " type="submit">Yes Delete 
																				<button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered--plus radius " type="submit"><span class="ntfmax__btn-textgr" data-bs-dismiss="modal" aria-label="Close">Not now</span> 
																				</button>																
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Preview Product -->
															
													</div>
												</div>
											</div>
										</form>	
									</div>
									
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>
					</div>	
				</div>	
			</section>	
			<!-- End NFTmax Dashboard -->
			
		</div>
@include('Layout.Footer')