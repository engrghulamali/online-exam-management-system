
	@extends('teacher.master')

	@section('content')


		<!-- Navbar End Hare -->

		<div class="container">
			<div class="row">

				<!--First Column -->

				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
					<ul class="list-unstyled mt-5">
						<li>
							<a href="{{route('teacherdash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> Questionnaires  </a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Questionnaire List</a></li>
								<li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Questionnaire</a></li>
								<li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Questionnaire Trash</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li class="d-none">
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-download"></i> EXPORT IMPORT</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
								<li class="dropdown-item"><a href="{{route('export')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<!-- First Column End -->


				<!-- Second Column Starts -->

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Create Questionnaire</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info my-4">Create Questionnaire</h3>
						<hr>
					</div>

					<!-- Question Option -->

					<div class="container">
						<form action="/updateexamdetail/{{$e->id}}" method="post">

							@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@if (\Session::get('success'))
										<div class="alert alert-success">
											<p>{{ \Session::get('success') }}</p>
										</div>
									@endif

							@csrf

							<div>
								<label for="examtitle" class="text-success">Questionnaire Title:</label>
								<input type="text" name="examtitle" value="{{$e->examtitle}}" placeholder="Questionnaire Title" class="form-control form-control-sm" required>
							</div><br>


							<div class="form-row">
								<div class="col-sm-4">
									<label for="name" class="text-success">Questionnaire Code:</label>
									<input type="text" name="examcode" value="{{$e->examcode}}" placeholder="Questionnaire Code" class="form-control form-control-sm">
								</div>
								<div class="col">
									<label for="name" class="text-success">Questionnaire Date:</label>
									<input type="date" name="examdate" value="{{$e->examdate}}" placeholder="Questionnaire Date" class="form-control form-control-sm">
								</div>
								<div class="col">
									<label for="name" class="text-success">Questionnaire Time:</label>
									<input type="time" name="examtime" value="{{$e->examtime}}" placeholder="Questionnaire Time" class="form-control form-control-sm">
								</div>
							</div><br>

							<div class="form-row">
								<div class="col">
									<label for="name" class="text-success">Total Marks:</label>

									<input type="number" name="marks" placeholder="Total Marks" value="{{$e->marks}}" class="form-control form-control-sm">
								</div>
								<div class="col">
									<label for="name" class="text-success">Total Time in Minutes:</label>
									<input type="number" name="totaltime" placeholder="Total Time" value="{{$e->totaltime}}" class="form-control form-control-sm">
								</div>
							</div><br>

							<div>
								<input type="submit" name="submit" value="UPDATE" class="btn btn-success mr-2 mb-5 mt-3" style="width: 200px; float: right;">
							</div>
							<br><br><br><br><br>



							<!--
								<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<input type="radio">
				</span>
			</div>
			<div class="input-group-prepend">
				<span class="input-group-text">$5.00</span>
			</div>
			<input type="text" class="form-control">
		</div><hr>
							-->

						</form>
					</div>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
