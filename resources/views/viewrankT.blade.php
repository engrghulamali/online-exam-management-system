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
	<link rel="stylesheet" href="{{asset('css/parsley.css')}}">
  <script type="text/javascript" src="{{asset('js/bootstrapjquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

	<title>Questionnaire Management System</title>
	<link rel="icon" type="icon" href="{{asset('icon/exam.png')}}">

	<style>
		.dropdown-menu li:hover{
			background-color: tomato;
		}
		.btn-block:hover{
			background-color: tomato;
		}
	</style>

</head>

<body style="background-color: whitesmoke;">

	<div class="container"><br>


		<!-- Navbar Started Hare -->

		<nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded">

		  <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <a class="navbar-brand" href="{{route('teacherdash')}}"><img src="{{asset('icon/exam.png')}}" style="height: 55px;"></a>

		  <div class="collapse navbar-collapse" id="target">
		    <ul class="navbar-nav mx-auto">
		      <li class="nav-item">
		        <a href="{{route('teacherdash')}}" class="nav-link btn-outline-info rounded text-white pr-3">HOME</a>
		      </li>

		      <li class="nav-item d-none">
		        <a href="#" class="nav-link btn-outline-info rounded text-white pr-3">ABOUT</a>
		      </li>

		      <li class="nav-item">
		        <a href="/examlistTeacher" class="nav-link btn-outline-info rounded text-white pr-3">Questionnaire List</a>
		      </li>

		      <li class="nav-item">
		        <a href="#" class="nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
		      </li>

		      <li class="nav-item dropdown">
		        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">CONTACT US</a>

		        <div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
		          <a href="#" class="dropdown-item text-white"><i class="far fa-envelope"></i> Via Email</a>
		          <a href="#" class="dropdown-item text-white"><i class="fab fa-facebook-messenger"></i> Via Messenger</a>
		          <a href="#" class="dropdown-item text-white"><i class="fas fa-phone-volume"></i> Via Phone Call</a>
		        </div>

		      </li>

		      <li class="nav-item dropdown">
		        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown"><i class="fas fa-user"></i><span class="text-uppercase"> {{Auth::guard('teachers')->user()->name}}</span></a>

		        <div class="dropdown-menu bg-info divide">
		          <a href="{{route('student')}}" class="dropdown-item text-white text-center">Settings</a>
		          <form action="/logout" method="post">
		            @csrf
		            <button type="submit" name="button" class="btn-info btn-block" style="border: none;">Logout</button>
		          </form>
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

		</nav>

		<!-- Navbar End Hare -->
		<hr style="border-color: mediumseagreen;">


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
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> Questionnaires   INFO</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Questionnaire List</a></li>
								<li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Questionnaire</a></li>
								<li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Questionnaire Trash</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-user"></i> STUDENT INFO</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('studentno')}}" class="dropdown-link text-white" style="text-decoration: none;">Student List</a></li>
								<li class="dropdown-item"><a href="/examlistforrank" class="dropdown-link text-white" style="text-decoration: none;">Student Group</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li class="d-none">
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-download"></i> EXPORT IMPORT</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="/exportquestion" class="dropdown-link text-white" style="text-decoration: none;">Export Question</a></li>
								<li class="dropdown-item"><a href="{{route('studentno')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
								<li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<!-- First Column End -->


				<!-- Second Column Starts -->

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Dashboard</h6>
						<hr>
					</div>

					<div class="d-flex justify-content-between align-items-center mb-3">
						<h4 class="text-info mb-0">Student Lists</h4>

						<div class="form-group d-flex align-items-center mb-0">
							<label for="gradeFilter" class="mr-2 mb-0"><strong>Filter by Group</strong></label>
							<select id="gradeFilter" class="form-control w-auto">
							<option value="A+">A+</option>
							<option value="A">A</option>
							<option value="B+">B+</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="F">F</option>
							<option value="all" selected>Show All</option>
							</select>
						</div>
					</div>

					<table id="example" class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Reg. No</th>
								<th>Score</th>
								<th>Percentage</th>
								<th>Group</th>
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
							@foreach($rs as $r)
	            <tr>
					<td>{{$i}}</td>
					<td>{{$r->student->name}}</td>
					<td>{{$r->student->registration}}</td>
					<td>{{$r->score}}</td>
					@if($r->marks)
					<td>{{(($r->score)*100)/($r->marks)}}%</td>
					@endif
					@if(!$r->marks)

					<td>{{$r->score}}%</td>
					@endif
					<td>{{$r->grade}}</td>
	            </tr>
							@php $i++ @endphp
	            @endforeach
						</tbody>
					</table><br>
					<div class="text-right">
			    	<button id="cmd" class="btn btn-info d-none">DOWNLOAD AS PDF</button>
			    </div><hr><br><br><br>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>
</div>

	<!--Footer-->
	<div class="container my-4 ">
	  <hr style="border-color: mediumseagreen;">
	  <div class="footer">
	    <ul class="nav nav-pills nav-fill bg-success rounded">
	      <li class="nav-item d-none">
	        <a href="{{route('dt')}}" class="nav-link text-white btn-outline-info"><i class="fab fa-connectdevelop"></i> Developers</a>
	      </li>
	      <li class="nav-item">
	        <a href="{{route('ct')}}" class="nav-link text-white btn-outline-info"><i class="far fa-copyright"></i> Copyright</a>
	      </li>
	      <li class="nav-item">
	        <a href="{{route('ppt')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-user-shield"></i>  Privacy Policy</a>
	      </li>
	      <li class="nav-item ">
	        <a href="{{route('cot')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-file-signature"></i>  Contact</a>
	      </li>
	    </ul><hr>
	  </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
	  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
	<script src="/tableHTMLExport.js"></script>
	<script>
	  $('#json').on('click',function(){
	    $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
	  })
	  $('#csv').on('click',function(){
	    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
	  })
	  $('#pdf').on('click',function(){
	    $("#example").tableHTMLExport({type:'pdf',filename:'student-rank.pdf'});
	  })
	  </script>
	  <script>
	  var doc = new jsPDF();
	var specialElementHandlers = {
	  '#editor': function (element, renderer) {
	      return true;
	  }
	};

	$('#cmd').click(function () {
	  doc.fromHTML($('#content').html(), 15, 15, {
	      'width': 170,
	          'elementHandlers': specialElementHandlers
	  });
	  doc.save('student-rank.pdf');
	});
	  </script>
		<script>
			$(document).ready(function() {
				function filterTable(grade) {
					$("#example tbody tr").each(function() {
						var rowGrade = $(this).data("grade");
						if (grade === "all" || rowGrade === grade) {
							$(this).show();
						} else {
							$(this).hide();
						}
					});
				}

				// Default load: show only A+
				filterTable("all");

				// On change filter
				$("#gradeFilter").on("change", function() {
					var selected = $(this).val();
					filterTable(selected);
				});
			});
		</script>
	</body>
	</html>
