@extends('admin.admin_master')
@section('admin')



        <div class="content-wrapper">
          <div class="content">							
              <div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Create Contact</h2>
										</div>
										<div class="card-body">
                                        <form action="{{ route('store.contact') }}" method="POST">
                                        @csrf
												<div class="form-group">
													<label for="exampleFormControlInput1">Contact Address</label>
													<input name="address" type="text" class="form-control">
												</div>
												
												
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Contact Email</label>
													<textarea name="email" class="form-control"  rows="3"></textarea>
												</div>
												
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Contact Phone</label>
													<textarea name="phone" class="form-control"  rows="3"></textarea>
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
												</div>
											</form>
										</div>
									</div>



								</div>

							</div>
                        </div>
                    </div>


@endsection