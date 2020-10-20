@extends('Frontend.Car.master')
@section('content')

	<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{asset('assets/images/parallax/8.jpg')}}'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Job Openings</h1>
				<span>Join our Fabulous Team of Intelligent Individuals</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Jobs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container">

					<div class="card p-4 shadow" style="top: -60px;">
						<form action="{{route('jobFiltering')}}" method="post" class="nobottommargin">
							@csrf
							<div class="row clearfix">
								{{--<div class="col-md-2 col-sm-12">--}}
									{{--<label for="" class="d-block">Type</label>--}}
									{{--<input class="bt-switch" type="checkbox" checked data-on-text="New" data-off-text="Used" data-on-color="themecolor" data-off-color="themecolor">--}}
								{{--</div>--}}
								<div class="col-md-6 col-sm-6 col-12 mt-4 mt-md-0">
									<label for="">Job Category</label>
									<select class="selectpicker form-control customjs" name="job_category_id" id="">
										@foreach($categories  as $key => $category)
											<option value="{{$key}}"> {{$category}}  </option>
										@endforeach
									</select>
								</div>

								<div class="col-md-2 col-sm-6 col-6">
									<button class="button button-3d button-rounded btn-block noleftmargin" style="margin-top: 29px;">Search</button>
								</div>
							</div>
						</form>
					</div>

				</div>


				<div class="container clearfix">
                   @foreach($job_posts as $jobPost)
					<div class="col_three_fifth nobottommargin">

						<div class="fancy-title title-bottom-border">
							<h3>{{$jobPost->title}}</h3>
						</div>

						<p>{{$jobPost->job_context}}</p>

						<div class="accordion accordion-bg clearfix">

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Requirements</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-ok"></i>{{$jobPost->requirements}}</li>

								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Context</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-plus-sign"></i>{{$jobPost->job_context}}</li>

								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Deadline</div>
							<div class="acc_content clearfix">{{$jobPost->deadline}}</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Vacancy</div>
							<div class="acc_content clearfix">{{$jobPost->vacancy}}</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Salary</div>
							<div class="acc_content clearfix">{{$jobPost->salary}}</div>

						</div>

						<a href="{{route('jobApplicants.create')}}" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a>

						<div class="divider divider-short"><i class="icon-star3"></i></div>


					</div>
@endforeach
				</div>

			</div>

		</section><!-- #content end -->

	@endsection