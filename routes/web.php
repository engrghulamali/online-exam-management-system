<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  ///  return view('welcome');
   return view('student');
});


// Route::get('/homepage','MyController@homepage')->name('homepage')->middleware('guest');
Route::get('/homepage','MyController@student')->name('student');
Route::get('/about','MyController@about')->name('about');

Route::get('/upcomingExam','MyController@upcomingExam')->name('upcomingExam');
Route::get('/ongoingExam','MyController@ongoingExam')->name('ongoingExam');
Route::get('/previousExam','MyController@previousExam')->name('previousExam');

Route::get('/noticeBoard','MyController@noticeBoard')->name('noticeBoard');

Route::get('/viaEmail','MyController@viaEmail')->name('viaEmail');
Route::get('/viaMessenger','MyController@viaMessenger')->name('viaMessenger');
Route::get('/viaPhone','MyController@viaPhone')->name('viaPhone');

Route::get('/teacher','MyController@teacher')->name('teacher');
Route::post('/teacher_info','MyController@teacherInformation')->name('teacherInformation');

Route::get('/student','MyController@student')->name('student');
Route::post('/student_info','MyController@studentInformation')->name('studentInformation');
//
Route::get('/questions/{e}','MyController@questionsN')->middleware('auth:teachers');
Route::get('/developer','MyController@developer')->name('developer');
Route::get('/copyright','MyController@copyright')->name('copyright');
Route::get('/privacy','MyController@privacy')->name('privacy');
Route::get('/contact','MyController@contact')->name('contact');

Route::get('/settings','MyController@settings')->name('settings');
Route::post('/logout','MyController@logout')->name('logout');

Route::get('/teacherdash','MyController@teacherdash')->name('teacherdash')->middleware('auth:teachers');
Route::get('/studentno','MyController@studentno')->name('studentno')->middleware('auth:teachers');

Route::get('/examlistTeacher','MyController@examlistTeacher')->name('examlistTeacher');
Route::get('/examname','MyController@examname')->name('examname')->middleware('auth:teachers');

Route::post('/exam-name','MyController@examDetailInformation')->name('exam-name')->middleware('auth:teachers');

Route::get('/examtrash','MyController@examtrash')->name('examtrash')->middleware('auth:teachers');

Route::get('/studentDash','MyController@studentDash')->name('studentDash')->middleware('auth:students');
Route::get('/examlist','MyController@examlist')->name('examlist')->middleware('auth:students');

Route::get('/examresult','MyController@examresult')->name('examresult')->middleware('auth:students');
Route::get('/homeworklist','MyController@homeworklist')->name('homeworklist')->middleware('auth:students');
Route::get('/homeworkresult','MyController@homeworkresult')->name('homeworkresult')->middleware('auth:students');

Route::get('/coursewisestudentlist','MyController@coursewisestudentlist')->name('coursewisestudentlist')->middleware('auth:teachers');
Route::get('/overollstudentlist','MyController@overollstudentlist')->name('overollstudentlist')->middleware('auth:teachers');
Route::get('/rankcoursewise','MyController@rankcoursewise')->name('rankcoursewise')->middleware('auth:teachers');
// Route::get('/rankoverall','MyController@rankoverall')->name('rankoverall');

Route::get('/teacherLogin','MyController@teacherLogin')->name('teacherLogin')->middleware('guest');
Route::post('/teacher-login','MyController@teacherLoginPost')->name('teacher-login')->middleware('guest');

Route::get('/studentLogin','MyController@studentLogin')->name('studentLogin')->middleware('guest');
Route::post('/student-login','MyController@studentLoginPost')->name('student-login')->middleware('guest');

Route::get('/import','MyController@import')->name('import')->middleware('auth:teachers');
Route::get('/export','MyController@export')->name('export')->middleware('auth:teachers');

Route::get('/createexam','MyController@createexam')->name('createexam')->middleware('auth:teachers');
Route::post('/create-exam','MyController@createexamInformation')->name('create-exam')->middleware('auth:teachers');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notice-home','MyController@noticeHome')->name('noticeHome');
Route::get('/ongoing-exam','MyController@ongoingHome')->name('ongoingHome');
Route::get('/upcoming-exam','MyController@upcomingHome')->name('upcomingHome');
Route::get('/previous-exam','MyController@previousHome')->name('previousHome');

Route::get('/about-home','MyController@aboutHome')->name('aboutHome');


Route::get('/developer-t','MyController@dt')->name('dt')->middleware('auth:teachers');
Route::get('/copyright-t','MyController@ct')->name('ct')->middleware('auth:teachers');
Route::get('/privacy-policy-t','MyController@ppt')->name('ppt')->middleware('auth:teachers');
Route::get('/contact-t','MyController@cot')->name('cot')->middleware('auth:teachers');

Route::get('/developer-s','MyController@ds')->name('ds')->middleware('auth:students');
Route::get('/copyright-s','MyController@cs')->name('cs')->middleware('auth:students');
Route::get('/privacy-policy-s','MyController@pps')->name('pps')->middleware('auth:students');
Route::get('/contact-s','MyController@cos')->name('cos')->middleware('auth:students');

Route::get('/questions','MyController@questions')->name('questions')->middleware('auth:teachers');
// Route::get('/loginfirst','MyController@loginfirst')->name('loginfirst');

Route::get('/create','MyController@create')->name('create')->middleware('auth:teachers');
Route::get('/giveexam/{exam_detail}','MyController@giveexam')->name('giveexam')->middleware('auth:students');

Route::post('/view_result/{exam_detail}','MyController@giveexaminfo')->middleware('auth:students');
Route::get('/view-rank/{exam_detail}', 'MyController@viewrank')->middleware('auth:students');

Route::get('/view-rankt/{e}', 'MyController@viewrankT')->middleware('auth:teachers');
Route::get('/examlistforrank', 'MyController@examlistforrank')->middleware('auth:teachers');

Route::get('/viewstudent/{exam_detail}', 'MyController@viewstudent')->middleware('auth:teachers');
Route::post('/homepagelogin', function(\Illuminate\Http\Request $request){
  if($request->type=='s'){
    $crs = $request->only(['email', 'password']);
    \Auth::guard('students')->attempt($crs);
    if(  \Auth::guard('students')->check()){
      return  redirect('/studentDash');
    }
  } else {
    $crs = $request->only(['email', 'password']);
    \Auth::guard('teachers')->attempt($crs);
    if(  \Auth::guard('teachers')->check()){
      return  redirect('/teacherdash');
    }
  }
  session()->flash('f',1);
  return redirect()->back();
})->middleware('guest');




Route::get('/deletequestion/{q}','MyController@deletequestion')->middleware('auth:teachers');

Route::get('/editquestion/{q}','MyController@editquestion')->middleware('auth:teachers');
Route::post('/updatequestion/{q}','MyController@updatequestion')->middleware('auth:teachers');

Route::get('/editexamdetail/{e}','MyController@editexamdetail')->middleware('auth:teachers');
Route::post('/updateexamdetail/{e}','MyController@updateexamdetail')->middleware('auth:teachers');
Route::get('/deleteexamdetail/{e}','MyController@deleteexamdetail')->middleware('auth:teachers');

Route::get('/resetpasswordT','MyController@resetpasswordT');
Route::get('/confirmpasswordT','MyController@confirmpasswordT');

Route::get('/resetpasswordS','MyController@resetpasswordS');
Route::get('/confirmpasswordS','MyController@confirmpasswordS');
Route::post('/fpt','Fpt@sendResetLinkEmail');
Route::post('/fps','Fps@sendResetLinkEmail');

Route::get('password/reset/{token}','Rps@showResetForm');
Route::get('password/reset/','Rps@showResetForm');
Route::post('password/reset','Rps@reset')->name('password.reset');

Route::get('exportquestion','MyController@exportquestion')->middleware('auth:teachers');
Route::get('/exportquestionview/{e}','MyController@exportquestionview')->middleware('auth:teachers');

Route::get('addquestion/{e}','MyController@addquestion')->middleware('auth:teachers');
Route::post('addquestion/{e}','MyController@addquestionPost')->middleware('auth:teachers');
