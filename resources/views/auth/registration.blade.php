@extends('layout.master')
@section('title', 'Registration')
@section('style')
<style>
    .form-group > label.error {
        display: block !important;
        text-transform: none;
    }

    .form-group input.valid ~ label.error,
    .form-group input[type="text"] ~ label.error,
    .form-group input[type="email"] ~ label.error,
    .form-group input[type="number"] ~ label.error,
    .form-group select ~ label.error,
    .form-group textarea ~ label.error { display: none !important; }

    .heading::after{
        content: '';
        border-bottom: 3px solid rgb(172, 153, 153);
        width: 250px;
        display: block;
    }
    .heading-2::after{
        content: '';
        border-bottom: 1px solid rgb(234, 222, 222);
        width: 250px;
        display: block;
    }
    .required-fieled{
        color: red;
        font-size: 20px;
    }
    .box {
            color: #fff;
            padding: 20px;
            display: none;
        }

        .box p {
            margin-bottom: 5px;
            line-height: 1;
        }

        .red {
            background: blue;
        }

        .green {
            background: pink;
        }

        .blue {
            background: violet;
        }

        .yellow {
            background: orange;

        }
    </style>
@endsection

@section('content')


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Event Registration</h1>
				<span>Forms Widget</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Widgets</a></li>
					<li class="breadcrumb-item active" aria-current="page">Event Registration Form</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widgets">

						<div class="form-result"></div>
                        @include('errors.errorMessage')
						<div class="row">
							<div class="col-lg-12">
								<form class="row"  action="{{route('user.registration.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="heading">Personal Information</h3>
									<div class="col-sm-12 col-md-6 form-group">
										<label>Name (English) <span class="required-fieled"> *</span>:</label>
										<input type="text" name="name" required id="name" class="form-control required" value="{{old('name')}}" placeholder="Enter your name in english">
									</div>
                                    <div class="col-sm-12 col-md-6 form-group">
										<label>Name (Bangla):</label>
										<input type="text" name="name_bn" id="name_bn" class="form-control required" value="{{old('name_bn')}}" placeholder="Enter your name in bangla">
									</div>
									<div class="col-sm-12 col-md-6 form-group">
										<label>Fathers Name <span class="required-fieled"> *</span>:</label>
										<input type="text" required name="fathers_name" id="fathers_name" class="form-control required" value="{{old('fathers_name')}}" placeholder="Enter your fathers name">
									</div>
									<div class="col-sm-12 col-md-6 form-group">
										<label>Mothers Name:</label>
										<input type="text" name="mothers_name" id="mothers_name" class="form-control required" value="{{old('mothers_name')}}" placeholder="Enter your mothers name">
									</div>
									<div class="col-sm-12 col-md-6 form-group">
										<label>Spouse Name (optional):</label>
										<input type="text" name="spouse_name" id="spouse_name" class="form-control" value="{{old('spouse_name')}}" placeholder="Enter your spouse name">
									</div>
                                    <div class="col-sm-12 col-md-6 form-group">
										<label>Gender <span class="required-fieled"> *</span> :</label><br>
										<div class="form-check form-check-inline">
											<input checked class="form-check-input required" type="radio" name="gender"id="event-registration-gender-male" value="Male">
											<label class="form-check-label nott" for="event-registration-gender-male">Male</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="gender"id="event-registration-gender-female" value="Female">
											<label class="form-check-label nott" for="event-registration-gender-female">Female</label>
										</div>
									</div>


									<div class="col-sm-12 col-md-6 form-group">
										<label>Blood Group:</label>
										<input type="text" name="blood_group" id="blood_group" class="form-control" value="{{old('blood_group')}}" placeholder="Enter your blood group">
									</div>

									<div class="col-sm-12 col-md-6 form-group">
										<label>Date of Birth:</label>
										<input type="date" name="birth_date" id="birth_date" class="form-control" value="{{old('birth_date')}}" placeholder="Enter your birth date">
									</div>
									<div class="col-sm-12 col-md-6 form-group">
										<label>Nationality:</label>
										<input type="text" name="nationality" id="nationality" class="form-control" value="{{old('nationality')}}" placeholder="Enter your nationality">
									</div>
									<div class="col-sm-12 col-md-6 form-group">
										<label>NID:</label>
										<input type="number" name="nid" id="nid" class="form-control" value="{{old('nid')}}" placeholder="Enter your NID number">
									</div>
									<div class="col-sm-12 col-md-6 form-group">
										<label>Religion:</label>
										<input type="text" name="religion" id="religion" class="form-control" value="{{old('religion')}}" placeholder="Enter your religion">
									</div>
									<div class="col-sm-12 col-md-6 row form-group">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label>Picture (Max size: 500kb)  <span class="required-fieled"> * </span> :</label>
                                            <input type="file" required name="picture" id="picture" class="form-control" value="{{old('picture')}}">
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <img src="{{asset('assets/images/profile.jpeg')}}" id="picture-show" alt="" width="150px">
                                        </div>
									</div>




                                    <h3 class="heading mt-5">Educational Information</h3>

                                    <div class="col-sm-12 col-md-6 form-group">
										<label>Passing year of SSC <span class="required-fieled"> *</span> :</label>
										<input required type="text" name="ssc" id="ssc" class="form-control" value="{{old('ssc')}}" placeholder="Enter your passing year of ssc">
									</div>
                                    <div class="col-sm-12 col-md-6 form-group">
										<label>Last Educational Qualification:</label>
										<input type="text" name="last_educational_qualification" id="last_educational_qualification" class="form-control" value="{{old('last_educational_qualification')}}" placeholder="Enter your last educational qualification">
									</div>
                                    <div class="col-sm-12 col-md-6 form-group">
										<label>Last Educational Institution:</label>
										<input type="text" name="last_educational_institution" id="last_educational_qualification" class="form-control" value="{{old('last_educational_institution')}}" placeholder="Enter your last educational qualification">
									</div>
                                    <div class="col-sm-12 col-md-6 form-group">
										<label>Others:</label>
										<input type="text" name="education_others" id="education_others" class="form-control" value="{{old('education_others')}}" placeholder="Others">
									</div>




                                    <h3 class="heading mt-5">Contact Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="heading-2 mt-2">Present Address</p>
                                            <div class="col-12 form-group">
                                                <label>Village <span class="required-fieled"> *</span> :</label>
                                                <input required type="text" name="village_name" id="village_name" class="form-control" value="{{old('village_name')}}" placeholder="Enter your village name">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Post Office <span class="required-fieled"> *</span> :</label>
                                                <input required type="text" name="post" id="post" class="form-control" value="{{old('post')}}" placeholder="Enter your post office">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Upazila <span class="required-fieled"> *</span> :</label>
                                                <input required type="text" name="upazila" id="upazila" class="form-control" value="{{old('upazila')}}" placeholder="Enter your upazila">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>District <span class="required-fieled"> *</span> :</label>
                                                <input required type="text" name="district" id="district" class="form-control" value="{{old('district')}}" placeholder="Enter your district">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label>Email <span class="required-fieled"> *</span>:</label>
                                                <input required type="email" name="email" id="email" class="form-control required" value="{{old('email')}}" placeholder="Enter your Email Address">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Mobile <span class="required-fieled"> *</span>:</label>
                                                <input required type="text" name="phone" id="phone" class="form-control required" value="{{old('phone')}}" placeholder="Enter your mobile number">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Emergency Mobile Number:</label>
                                                <input type="text" name="emergency_mobile" id="emergency_mobile" class="form-control required" value="{{old('emergency_mobile')}}" placeholder="Enter your emergency mobile number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="heading-2 mt-2">Permanent Address</p>
                                            <div class="col-12 form-group">
                                                <label>Village:</label>
                                                <input type="text" name="village_name_permanent" id="village_name_permanent" class="form-control" value="{{old('village_name_permanent')}}" placeholder="Enter your village name">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Post Office:</label>
                                                <input type="text" name="post_permanent" id="post_permanent" class="form-control" value="{{old('post_permanent')}}" placeholder="Enter your post office">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Upazila:</label>
                                                <input type="text" name="upazila_permanent" id="upazila_permanent" class="form-control" value="{{old('upazila_permanent')}}" placeholder="Enter your upazila">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>District:</label>
                                                <input type="text" name="district_permanent" id="district_permanent" class="form-control" value="{{old('district_permanent')}}" placeholder="Enter your district">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Whatsup:</label>
                                                <input type="text" name="whatsup" id="whatsup" class="form-control" value="{{old('whatsup')}}" placeholder="Enter your whatsup number">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Facebook:</label>
                                                <input type="text" name="facebook" id="facebook" class="form-control" value="{{old('facebook')}}" placeholder="Enter your facebook id">
                                            </div>
                                        </div>
                                    </div>







                                    <h3 class="heading mt-5">Ceremonial Information</h3>


                                    <div class="col-sm-12 col-md-6 form-group">
										<label>No of guest:</label>
										<div class="input-group">
											<span class="input-group-text">Own (1) + </span>
											<input type="number" name="guest" id="guest" class="form-control" value="{{old('guest')}}" placeholder="Enter only guest number">
										</div>
									</div>

									<div class="col-sm-12 col-md-6 form-group">
										<label>T Shirt Size <span class="required-fieled"> *</span>:</label>
										<select required class="form-select required" name="t-shirt" id="t_shirt">
											<option value="">-- Select One --</option>
											<option value="m">Medium (M)</option>
											<option value="l">Large (L)</option>
											<option value="xl">Extra Large (XL)</option>
											<option value="xxl">Extra Extra Large (XXL)</option>
										</select>
									</div>

                                    <p class="heading-2 mt-2">Registration Fee</p>
                                    <div class="col-sm-12 col-md-4 form-group">
                                        <label>Own Fee <span class="required-fieled"> *</span>:</label>
                                        <input  type="number" name="own_fee" id="own_fee" class="form-control" value="{{old('number')}}" placeholder="Enter your own fee">
                                    </div>
                                    <div class="col-sm-12 col-md-4 form-group">
                                        <label>Guest Fee:</label>
                                        <input  type="number" name="guest_fee" id="guest_fee" class="form-control" value="{{old('guest_fee')}}" placeholder="Enter your guest fee">
                                    </div>
                                    <div class="col-sm-12 col-md-4 form-group">
                                        <label>Total <span class="required-fieled"> *</span>:</label>
                                        <input  type="number" name="total_fee" id="total_fee" class="form-control" value="{{old('total_fee')}}" placeholder="Enter your total fee">
                                    </div>



                                    <p class="heading-2 mt-2">Registration Payment<span class="required-fieled"> *</span></p>
                                            <div class="cart_item row">
                                                <div class="cart-product-name col-md-6"  id="deliveryLocation">
                                                    <label><input type="radio" checked name="payment_details" id="green"
                                                            value="cash">
                                                        Cash</label><br>
                                                    <label><input type="radio" name="payment_details" id="blue" value="bkash">
                                                        Bkash</label><br>
                                                    <label><input type="radio" name="payment_details" id="yellow" value="bank">
                                                        Bank</label><br>
                                                </div>

                                                <div class="cart-product-name col-md-6">

                                                    <div class="green box bkash">
                                                        <p>Receiver Name</p>

                                                    </div>
                                                    <div class="blue box">
                                                        <p>Bkash Merchant Number:</p>
                                                        <p>

                                                          00000000000000000
                                                        </p>
                                                    </div>
                                                    <div class="yellow box">
                                                        <p>Bank Details:</p>
                                                    </div>
                                                    <input  required class="form-control" type="text"
                                                    name="transection_id" placeholder="Receiver Name / Transaction ID" value="{{old('transection_id')}}">
                                                </div>
                                            </div>


                                    <div class="row mt-3">

                                        <p class="heading-2 mt-2">Create Account</p>
                                        <div class="col-sm-12 col-md-6 form-group ">
                                            <label>Password <span class="required-fieled"> *</span>:</label>
                                            <input required type="password" name="password" id="password" class="form-control"   min="6" placeholder="Enter your password">
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label>Confirm Password <span class="required-fieled"> *</span>:</label>
                                            <input required type="password" name="password_confirmation" id="password_confirmation" class="form-control"   placeholder="Confirm your password">
                                        </div>
                                    </div>

									<div class="col-12 mt-5">
										<button type="submit"  class="btn btn-primary  btn-lg btn-block">Submit</button>
									</div>

								</form>
							</div>


						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

@endsection
@section('js')
<script>



    $(document).ready(function() {
        var targetBox = $('.bkash');
        $(targetBox).show();
        var checkbox = $('#deliveryLocation input[type="radio"]')

        checkbox.change(function() {
            var inputValue = $(this).attr("id");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();

        });
    });


    $('#picture').change(function() {
        var reader = new FileReader();
        reader.readAsDataURL(this.files[0]);
        reader.onload = function(event) {
            var ImgSource = event.target.result;
            $('#picture-show').attr('src', ImgSource)
        }
    })

</script>
@endsection
