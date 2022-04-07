@extends('admin.admin_master')
@section('admin')



        <div class="content-wrapper">
          <div class="content">							
              <div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Create HomeAbout</h2>
										</div>
										<div class="card-body">
                                        <form action="{{ route('store.about') }}" method="POST">
                                        @csrf
												<div class="form-group">
													<label for="exampleFormControlInput1">Title</label>
													<input name="title" type="text" class="form-control">
												</div>
												
												
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Short Description</label>
													<textarea name="short_dis" class="form-control"  rows="3"></textarea>
												</div>
												
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Long Description</label>
													<textarea name="long_dis" class="form-control"  rows="3"></textarea>
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