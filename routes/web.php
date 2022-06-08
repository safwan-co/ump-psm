<?php

use Illuminate\Support\Facades\Route;

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
    $logged_user = session()->get('logged_user');
    $user_type = session()->get('user_type');


    if (!$logged_user) {
        return view('welcome');
    } else {

        if ($user_type == 'Student') {
            return redirect('studentprofile');
        } elseif ($user_type == 'Supervisor') {
            return redirect('supervisorprofile');
        } elseif ($user_type == 'Technician') {
            return redirect('technicianprofile');
        }
    }
});

Route::get('/home', function () {
    return view('homepage');
});

Route::view('register', 'register');
Route::view('forgot', 'forgot');

Route::post('user_login', 'UsersController@login');
Route::post('user_register', 'UsersController@register');

Route::post('user_reset', 'UsersController@resetpassword');

Route::get('/logout', 'UsersController@logout');

// Route::get('/details', function () {
//     //getting user logged session
//     $logged_user = session()->get('logged_user');

//     if (!$logged_user) {
//         return redirect('/');
//     } else {
//         return view('semakan.semak_details');
//     }
// })->name('details');

//Profile
use App\Http\Controllers\studentController;

Route::get('studentprofile', [studentController::class, 'index']);
Route::get('STDedit', [studentController::class, 'editprofile']);
Route::post('STD_update', 'studentController@updateprofile');

use App\Http\Controllers\supervisorController;

Route::get('supervisorprofile', [supervisorController::class, 'index']);
Route::get('SVedit', [supervisorController::class, 'editprofile']);
Route::post('SV_update', 'supervisorController@update_profile');
// url tak boleh sama tapi ada cara kalau nak pakai url sama

use App\Http\Controllers\coordinatorController;

Route::get('coordinatorprofile', [coordinatorController::class, 'index']);
Route::get('COedit', [coordinatorController::class, 'editprofile']);
Route::post('CO_update', 'coordinatorController@update_profile');

//MeetingBooking
use App\Http\Controllers\MeetingController;

Route::get('AddMeetingBooking', [MeetingController::class, 'MeetingInterface']);//student add meeting booking
Route::get('ViewMeetingBooking', [MeetingController::class, 'viewMeetingBooking']); //student view meeting
Route::get('EditMeetingBooking', [MeetingController::class, 'editMeetingBooking']); //student edit meetig booking
Route::get('RetriveMeeting', [MeetingController::class, 'retriveMeeting']); //sv view meeting list detail
Route::get('AddMeetingStatus', [MeetingController::class, 'addMeetingStatus']); //sv add meeting status

Route::post('MeetingBooking', 'MeetingController@addMeetingBooking');

//Report
use App\Http\Controllers\ReportController;

Route::get('AddReport', [ReportController::class, 'ReportInterface']);//student add meeting booking
Route::get('ViewReport', [ReportController::class, 'viewReport']); 
Route::post('GenerateReport', 'ReportController@addReport');
Route::get('click_edit/{id}','ReportController@edit_function');
Route::post('update','ReportController@update_function');


//Student Ranking
use App\Http\Controllers\StudentRankingController;

Route::get('AddRanking', [StudentRankingController::class, 'RankingInterface']);//student add meeting booking

Route::post('StudentRanking', 'StudentRankingController@addRanking');

//Evaluation
use App\Http\Controllers\EvaluationController;

Route::get('AddEvaluation', [EvaluationController::class, 'EvaluationInterface']);//student add meeting booking

Route::post('Evaluation', 'EvaluationController@addEvaluation');

//Rubric
use App\Http\Controllers\RubricController;

Route::get('AddRubric', [RubricController::class, 'RubricInterface']);//student add meeting booking

Route::post('Rubric', 'RubricController@addRubric');

//! Schedule
use App\Http\Controllers\ScheduleController;

Route::get('AddSchedule', [ScheduleController::class, 'ScheduleInterface']);//student add meeting booking
Route::post('Schedule', 'ScheduleController@addSchedule');
Route::get('viewSchedule', [ScheduleController::class, 'viewSchedule']);//student add meeting booking
Route::get('view-records','StudViewController@index');

/*Route::get('getSchedule', function () {

    $psmuser = DB::table('psmuser')->get();

    return view('getSchedule', ['psmuser' => $psmuser]);
});*/
//test
