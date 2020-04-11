
<html lang="en">
<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="/submit" method="post">
				<span class="contact100-form-title">
					APPLICATION FORM FOR VIRTUAL RC/DL
				</span>
					@csrf
				<div class="wrap-input100 validate-input" data-validate="NID is required">
					<span class="label-input100">Your NID number</span>
					<input class="input100" type="text" name="nid" placeholder="Enter your NID number" required>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Date of Birth is required">
					<span class="label-input100">Your Date of Birth</span>
					<input class="input100" type="date" name="dob" required>

				</div>


								<div class="wrap-input100 validate-input" data-validate="Name is required">
									<span class="label-input100">Your Name</span>
									<input class="input100" type="text" name="name" placeholder="Enter Your name" required>
									<span class="focus-input100"></span>
								</div>





				<div class="wrap-input100 validate-input" data-validate="Father Name is required">
					<span class="label-input100">Your Father Name</span>
					<input class="input100" type="text" name="fathername" placeholder="Enter Your Father name" required>
					<span class="focus-input100"></span>
				</div>



								<div class="wrap-input100 validate-input" data-validate="Mother Name is required">
									<span class="label-input100">Your Mother Name</span>
									<input class="input100" type="text" name="mothername" placeholder="Enter Your Mother name" required>
									<span class="focus-input100"></span>
								</div>


								<!-- <div class="wrap-input100 input100-select">
									<span class="label-input100">Gender</span>
									<div>
										<select class="selection-2" name="gender">
											<option>Choose</option>
											<option>Male</option>
											<option>Female</option>
											<option>Others</option>
										</select>
									</div>
									<span class="focus-input100"></span>
								</div> -->

												<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
													<span class="label-input100">Email</span>
													<input class="input100" type="text" name="email" placeholder="Enter your email addess" required>
													<span class="focus-input100"></span>
												</div>




								<div class="wrap-input100 validate-input" data-validate="Occupation is required">
									<span class="label-input100">Occupation</span>
									<input class="input100" type="text" name="occupation" placeholder="Enter Your Occupation" required>
									<span class="focus-input50"></span>
								</div>


								<div class="wrap-input100 validate-input" data-validate="Present Address is required">
									<span class="label-input100">Your Present Address </span>
									<input class="input100" type="text" name="presentaddress" placeholder="Enter Your Present Address" required>
									<span class="focus-input100"></span>
								</div>




								<div class="wrap-input100 validate-input" data-validate="BRTA code is required">
									<span class="label-input100">Enter BRTA code </span>
									<input class="input100" type="text" name="brta" placeholder="Enter BRTA code " required>
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Learner licence code is required">
									<span class="label-input100">Enter Learner licence code </span>
									<input class="input100" type="text" name="learnerlicence" placeholder="Enter learner licence code " required>
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="vehicle number is required">
									<span class="label-input100">Enter Your vehicle number </span>
									<input class="input100" type="text" name="vehiclenumber" placeholder="Enter Your vehicle number" required>
									<span class="focus-input100"></span>
								</div>



								<div class="wrap-input100 input100-select">
									<span class="label-input100">Applicantion type</span>
									<div>
										<select class="selection-2" name="applicationtype" required>
											<option>Choose</option>
											<option>General</option>
											<option>Defense Personnel</option>
											<option>Foriegner</option>
											<option>Deplomat</option>
										</select>
									</div>
									<span class="focus-input100"></span>
								</div>


								<div class="wrap-input100 validate-input" data-validate="Instructor lincence number is required">
									<span class="label-input100">Enter your Instructor licence number </span>
									<input class="input100" type="text" name="instructornbr" placeholder="Enter Instructor lincence number "required>
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 input100-select">
									<span class="label-input100">Class of vehicle type</span>
									<div>
										<select class="selection-2" name="classofvehicle">
											<option>Choose</option>
											<option>Three Wheeler</option>
											<option>Light vehicle</option>
											<option>Heavy vehicle</option>
															<option>Motorcycle</option>
										</select>
									</div>
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Date of Renewal is required">
									<span class="label-input100">Your Date of Renewal</span>
									<input class="input100" type="date" name="renewaldate" required>

								</div>

								<div class="wrap-input100 validate-input" data-validate="Expire date of Renewal is required">
									<span class="label-input100">Your Expire Date of Renewal</span>
									<input class="input100" type="date" name="expiredate" required>

								</div>

				<!-- <div class="wrap-input100 input100-select">
					<span class="label-input100">Licence Type</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select licence type</option>
							<option>Professional to non Professional</option>
							<option>Non Professional</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div> -->

				<div class="wrap-input100 validate-input" data-validate="RTC code is required">
					<span class="label-input100">Enter RTC code </span>
					<input class="input100" type="text" name="rtcCode" placeholder="Enter RTC code " required>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" id="submit" type="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
<!--
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div> -->
						<!-- <a class="btn btn-primary" href="{{ route('home') }}"> Home</a> -->
							<!-- <span>

								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span> -->
						<!-- </button>
					</div>
				</div>
			</form>
		</div>
	</div> -->



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
