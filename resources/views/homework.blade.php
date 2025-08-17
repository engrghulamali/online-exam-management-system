<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.4.2/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
	<link rel="stylesheet" href="{{asset('css/test.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrapjquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

	<title>Homework</title>
	<link rel="icon" type="icon" href="{{asset('icon/exam.png')}}">

	<style>
		.dropdown-menu li:hover{
			background-color: tomato;
		}


	</style>

</head>
<body style="background-color: whitesmoke;">

	<div class="container">

		<!-- Navbar Started Hare -->

		<nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded">

			<button class="navbar-toggler" data-toggle="collapse" data-target="#target">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="{{route('student')}}"><img src="{{asset('icon/exam.png')}}" style="height: 55px;"></a>

			<div class="collapse navbar-collapse" id="target">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a href="{{route('student')}}" class="nav-link btn-outline-info rounded text-white pr-3">HOME</a>
					</li>

					<li class="nav-item d-none">
						<a href="{{route('about')}}" class="nav-link btn-outline-info rounded text-white pr-3">ABOUT</a>
					</li>

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">QUESTIONNAIRE  SCHEDULE</a>

						<div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
							<a class="dropdown-item text-white" href="{{route('upcomingExam')}}">Upcoming Exam</a>
							<a class="dropdown-item text-white" href="{{route('ongoingExam')}}">Ongoing Exam</a>
							<a class="dropdown-item text-white" href="{{route('previousExam')}}">Previous Exam</a>

						</div>

					</li>

					<li class="nav-item">
						<a href="{{route('noticeBoard')}}" class="d-none nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
					</li>

					<li class="nav-item dropdown d-npne">
						<a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">CONTACT US</a>

						<div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
							<a href="{{route('viaEmail')}}" class="dropdown-item text-white"><i class="far fa-envelope"></i> Via Email</a>
							<a href="{{route('viaMessenger')}}" class="dropdown-item text-white"><i class="fab fa-facebook-messenger"></i> Via Messenger</a>
							<a href="{{route('viaPhone')}}" class="dropdown-item text-white"><i class="fas fa-phone-volume"></i> Via Phone Call</a>
						</div>

					</li>

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3 text-uppercase" data-toggle="dropdown"><i class="fas fa-user"></i> Asadullah</a>

						<div class="dropdown-menu bg-info divide">
							<a href="{{route('settings')}}" class="dropdown-item text-white"><i class="fas fa-cogs"></i> Settings</a>
							<a href="{{route('logout')}}" class="dropdown-item text-white"><i class="fas fa-sign-out-alt"></i> Logout</a>
						</div>
					</li>

					<!--LOGIN DISABLED
					<li class="nav-item">
						<a href="#" class="nav-link btn-outline-info rounded text-white pr-4">LOGIN</a>
					</li>

				-->

				</ul>

				<!-- Search Box -->

				<ul class="navbar-nav ml-auto d-none">
					<form>
						<div class="input-group">
							<input class="form-control" type="text" name="search" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-info" style="width: 50px;" type="submit"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
				</ul>

				<!--End-->
			</div>

		</nav><hr style="border-color: mediumseagreen;">


		<!-- Navbar End Hare -->

		<div class="container">
			<div class="row">
				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
					<ul class="list-unstyled mt-5">
						<li>
							<a href="{{route('studentDash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
						</li><hr style="border-color: white;">
						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> Questionnaires  </a>
							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Questionnaire List</a></li>
								<li class="dropdown-item"><a href="{{route('examresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Questionnaire Result</a></li>
							</ul>

						</li><hr style="border-color: white;">
						<li class="d-none">
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> HOME WORK</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('homeworklist')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework List</a></li>
								<li class="dropdown-item"><a href="{{route('homeworkresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework Result</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Homework List</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info">Homework Lists</h3>
					</div>

					<!--Table -->

					<table class="table table-striped table-bordered mt-3">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Questionnaire Title</th>
								<th>Date</th>
								<th>Attend Exam</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>CSE-501</td>
								<td>2-03-19</td>
								<td>Attend</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>CSE-502</td>
								<td>3-05-19</td>
								<td>Attend</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>CSE-501</td>
								<td>2-03-19</td>
								<td>Attend</td>
							</tr>
						</tbody>
					</table><hr><br><br><br><br><br><br><br>

				</div>

			</div>
		</div>

	</div>

	<!--Footer-->
	<div class="container mt-4 mb-4 ">
		<hr style="border-color: mediumseagreen;">
		<div class="footer">
			<ul class="nav nav-pills nav-fill bg-success rounded">
			
			</ul><hr>
		</div>
	</div>

	<!-- Footer End -->

</body>
</html>
