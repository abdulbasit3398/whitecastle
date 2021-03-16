@extends('layouts.app')

@section('page_title','Dashboard')
@section('container_class','container-full')

@section('content')
<div class="row">
 
	 
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