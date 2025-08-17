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
            <a href="#" class="d-none nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
          </li>

          <li class="nav-item dropdown d-none">
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
      <liv class="d-none">
        <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-download"></i> EXPORT IMPORT</a>

        <ul class="dropdown-menu bg-success">
          <li class="dropdown-item"><a href="/exportquestion" class="dropdown-link text-white" style="text-decoration: none;">Export Question</a></li>
          <li class="dropdown-item"><a href="{{route('export')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
          <li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
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

    <div class="container" style="background-color: #cfd8dc;" id="content">
      <h4 class="text-uppercase text-center my-3 text-info">Questionnaire Title: {{$e->examtitle}}</h4>
      <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="text-center"><b>Questionnaire Date: {{$e->examdate}}</b></div>
        </div>
        <div class="col-md-4">
            <div class="text-center"><b>Total Time: {{$e->totaltime}} min</b></div>
        </div>
        <div class="col-md-4">
            <div class="text-center"><b>Full Marks: {{$e->marks}}</b></div>
        </div>
      </div><br>
      <hr>

      @php  $i=1;   @endphp

      @foreach($qs as $q)
      <lebel for="question">{{$i}}. {{ $q->question }}</lebel>

      @php $i++;  @endphp
      <div class="row my-2 clearfix">
        <div class="col-5 ml-5">A. {{ $q->a }}</div>
        <div class="col-5">B. {{ $q->b }}</div>
      </div>

      <div class="row mb-3 my-2">
        <div class="col-5 ml-5">C. {{ $q->c }}</div>
        <div class="col-5">D. {{ $q->d }}</div>
      </div>
      @endforeach
    </div><br>
    <div class="text-center">
    	<button id="cmd" class="btn btn-info">DOWNLOAD AS PDF</button>
    </div> <br><hr>

  </div>
</div>
</div>
</div>
<div class="container my-4 ">
  <hr style="border-color: mediumseagreen;">
  <div class="footer">
    <ul class="nav nav-pills nav-fill bg-success rounded">
      <li class="nav-item">
           <a href="#" class="nav-link text-white btn-outline-info"><i class="far fa-copyright"></i> Copyright</a>
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
    $("#example").tableHTMLExport({type:'pdf',filename:'exam-question.pdf'});
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
  doc.save('exam-question.pdf');
});
  </script>


</body>
</html>
