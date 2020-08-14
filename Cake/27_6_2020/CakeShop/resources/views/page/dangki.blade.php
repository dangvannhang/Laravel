@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content" style="background-color: #99ddff;">
			
			<form action="{{route('dangki')}}" method="post" class="beta-form-checkout">
                @csrf <!-- {{ csrf_field() }} -->
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" required  name="txtEmail">
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" id="your_last_name" required name="txtFullName">
						</div>

						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" id="adress" value="Street Address" required name="txtAddress">
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" id="phone" required name="txtPhone">
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="text" id="phone" required name="txtPassword">
						</div>
						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="text" id="phone" required name="txtRePassword">
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
    </div> <!-- .container -->

@endsection