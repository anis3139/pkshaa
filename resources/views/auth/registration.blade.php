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

					<div class="form-widget">

						<div class="form-result"></div>
                        @include('errors.message')
                        @include('errors.errorMessage')
						<div class="row">
							<div class="col-lg-6">
								<form class="row" id="event-registration" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-6 form-group">
										<label>First Name:</label>
										<input type="text" name="event-registration-first-name" id="event-registration-first-name" class="form-control required" value="" placeholder="Enter your First Name">
									</div>
									<div class="col-6 form-group">
										<label>Last Name:</label>
										<input type="text" name="event-registration-last-name" id="event-registration-last-name" class="form-control required" value="" placeholder="Enter your Last Name">
									</div>
									<div class="col-12 form-group">
										<label>Email:</label>
										<input type="email" name="event-registration-email" id="event-registration-email" class="form-control required" value="" placeholder="Enter your Email Address">
									</div>
									<div class="col-6 form-group">
										<label>Gender:</label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input required" type="radio" name="event-registration-gender"id="event-registration-gender-male" value="Male">
											<label class="form-check-label nott" for="event-registration-gender-male">Male</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="event-registration-gender"id="event-registration-gender-female" value="Female">
											<label class="form-check-label nott" for="event-registration-gender-female">Female</label>
										</div>
									</div>
									<div class="col-6 form-group">
										<label>Interests</label>
										<select class="form-select required" name="event-registration-interests" id="event-registration-interests">
											<option value="">-- Select One --</option>
											<option value="UX Design">UX Design</option>
											<option value="Backend Development">Backend Development</option>
											<option value="Videography">Videography</option>
											<option value="VFX Animations">VFX Animations</option>
											<option value="Others">Others</option>
										</select>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Website:</label>
											<input type="text" name="event-registration-website" id="event-registration-website" class="form-control required url" value="https://" placeholder="Enter your Website Address">
										</div>
										<div class="form-group">
											<label>Bio:</label>
											<textarea name="event-registration-bio" id="event-registration-bio" class="form-control required" cols="30" rows="5"></textarea>
										</div>
									</div>
									<div class="col-6 form-group">
										<label>Social Media Handles:</label>
										<div class="input-group">
											<span class="input-group-text">Twitter</span>
											<input type="text" name="event-registration-twitter" id="event-registration-twitter" class="form-control" value="" placeholder="@username">
										</div>
									</div>
									<div class="col-6 form-group">
										<label for="">&nbsp;</label>
										<div class="input-group">
											<span class="input-group-text">Github</span>
											<input type="text" name="event-registration-github" id="event-registration-github" class="form-control" value="" placeholder="@username">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Event Passes</label>
											<select class="form-select required" name="event-registration-passes" id="event-registration-passes">
												<option value="">-- Select One --</option>
												<option value="Contributors Day + Main Event">Contributors Day + Main Event</option>
												<option value="Main Event only">Main Event only</option>
												<option value="VIP Access">All Days + VIP Access to Insiders Club</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>How did you hear about the Event?</label>
											<select class="form-select required" name="event-registration-know-us" id="event-registration-know-us">
												<option value="">-- Select One --</option>
												<option value="Google">Google</option>
												<option value="Social Media">Social Media</option>
												<option value="Friends">Friends</option>
												<option value="Advertisement">Advertisement</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div>
									<div class="col-12 d-none">
										<input type="text" id="event-registration-botcheck" name="event-registration-botcheck" value="" />
									</div>
									<div class="col-12">
										<button type="submit" name="event-registration-submit" class="btn btn-secondary">Register</button>
									</div>

									<input type="hidden" name="prefix" value="event-registration-">
								</form>
							</div>

							<div class="col-lg-6 ps-lg-4">
								<p><span class="dropcap">F</span>oster best practices effectiveness inspire breakthroughs solve immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process inclusive innovate readiness, public sector complexity. Lifting people up cornerstone partner, technology working families civic engagement activist recognize potential global network. Countries tackling solution respond change-makers tackle. Assistance, giving; fight against malnutrition experience in the field lasting change scalable. Empowerment long-term, fairness policy community progress social responsibility; Cesar Chavez recognition. Expanding community ownership visionary indicator pursue these aspirations accessibility. Achieve; worldwide, life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise vaccine Jane Jacobs community health workers Oxfam. Our ambitions informal economies.</p>

								<blockquote class="topmargin bottommargin">
									<p>Human rights healthcare immunize; advancement grantees. Medical supplies; meaningful, truth technology catalytic effect. Promising development capacity building international enable poverty.</p>
								</blockquote>

								<div class="w-100">
									<p>Provide, Aga Khan, interconnectivity governance fairness replicable, new approaches visionary implementation. End hunger evolution, future promising development youth. Public sector, small-scale farmers; harness facilitate gender. Contribution dedicated global change movements, prosperity accelerate progress citizens of change. Elevate; accelerate reduce child mortality; billionaire philanthropy fluctuation, plumpy'nut care opportunity catalyze. Partner deep.</p>
								</div>

								<div class="w-100">
									<p>Frontline harness criteria governance freedom contribution. Campaign Angelina Jolie natural resources, Rockefeller peaceful philanthropy human potential. Justice; outcomes reduce carbon emissions nonviolent resistance human being. Solve innovate aid communities; benefit truth rural development UNICEF meaningful work. Generosity Action Against Hunger relief; many voices impact crisis situation poverty pride. Vaccine carbon.</p>
								</div>

							</div>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

@endsection
