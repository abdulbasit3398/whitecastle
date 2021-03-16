@extends('layouts.app')

@section('page_title','Dashboard')
@section('container_class','container-full')

@section('content')
<div class="row">

	<div class="col-xl-4 col-lg-6 col-12">
		<div class="box" >
			<div class="box-body" style="background-image: url({{asset('assets/admin/images/basic-package.png')}});background-repeat: no-repeat; ">
				<div class="text-center">
					<img src="{{asset('assets/admin/images/scrapping.png')}}" class="rounded w-70 mx-auto" alt="">
					<h3 class="mb-0">Scraping Express</h3>
					<p class="mt-20 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="box-footer" style="text-align: center;">
				<a href="#" class="btn btn-primary">Click Here</a>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-6 col-12">
		<div class="box">
			<div class="box-body" style="background-image: url({{asset('assets/admin/images/premium-package.png')}});background-repeat: no-repeat; ">
				<div class="text-center">
					<img src="{{asset('assets/admin/images/mailing.png')}}" class="rounded w-70 mx-auto" alt="" style="margin-bottom: 21px">
					<h3 class="mb-0">Mailing & Sms</h3>
					<p class="mt-20 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			@if(\Auth::user()->package == 'premium')
			<div class="box-footer" style="text-align: center;">
				
				<a href="#" class="btn btn-primary">Click Here</a>
				
			</div>
			@endif
		</div>
	</div>
	<div class="col-xl-4 col-lg-6 col-12">
		<div class="box">
			<div class="box-body" style="background-image: url({{asset('assets/admin/images/premium-package.png')}});background-repeat: no-repeat; ">
				<div class="text-center">
					<img src="{{asset('assets/admin/images/desktop.png')}}" class="rounded w-70 mx-auto" alt="">
					<h3 class="mb-0">Desktop Express</h3>
					<p class="mt-20 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			@if(\Auth::user()->package == 'premium')
			<div class="box-footer" style="text-align: center;">
				
				<a href="#" class="btn btn-primary">Click Here</a>
				
			</div>
			@endif
		</div>
	</div>
	<div class="col-xxxl-6 col-lg-7 col-12">
		<div class="box">
			<div class="box-header">
				<h4 class="box-title">
					Your Plan
				</h4>
			</div>
			<div class="box-body">
				<h4 class="box-title">
					Prime Member Yearly
				</h4>
				<h5 class="text-info">$999/year</h5>
				<p>Members receive benefits which include FREE fast shipping for eligible purchases, streaming of movies, TV shows and music, exclusive shopping deals and selection, and more.</p>
				<a href="#" class="btn btn-primary">Upgrade Plan</a>
			</div>
			<div class="box-footer">
				<p>Learn more about our <a href="#">subscription plan options</a>.</p>
			</div>
		</div>
	</div>
	<div class="col-xxxl-6 col-lg-5 col-12">
		<div class="box">
			<div class="box-header">
				<h4 class="box-title">
					We’re here to help you!
				</h4>
			</div>
			<div class="box-body">
				<div>
					<img src="{{asset('assets/admin/images/svg-icon/sidebar-menu/mailbox.svg')}}" class="rounded svg-icon w-60 pb-5" alt="">
				</div>
				<p>Ask a question or file a support ticketn or report an issues.<br>Our team support team will get back to you by email.</p>
				<a href="#" class="btn btn-primary">Get Contact Us</a>
			</div>
			<div class="box-footer">
				<p>Learn more <a href="#">FAQs</a>.</p>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="box">
			<div class="box-header with-border">
				<h4 class="box-title">Payment Overview</h4>
			</div>
			<div class="box-body p-0">
				<div class="table-responsive">
					<table class="table mb-0">
						<thead class="thead-light">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Plan</th>
								<th scope="col">Date</th>
								<th scope="col">End Date</th>
								<th scope="col">Amount</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">45871</th>
								<td>Monthly Subscription</td>
								<td>1/04/2020</td>
								<td>30/04/2020</td>
								<td>$99</td>
								<td><span class="badge badge-sm badge-danger">Due</span></td>
							</tr>
							<tr>
								<th scope="row">458791</th>
								<td>Yearly Subscription</td>
								<td>1/03/2019</td>
								<td>30/03/2019</td>
								<td>$999</td>
								<td><span class="badge badge-sm badge-success">Paid</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection