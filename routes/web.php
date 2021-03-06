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


//Report
use App\Http\Controllers\ReportController;

Route::get('AddReport', [ReportController::class, 'ReportInterface']);
Route::get('ViewReport', [ReportController::class, 'viewReport']);
Route::get('ViewReportSV', [ReportController::class, 'viewReportSV']);
Route::get('ViewSVList', [ReportController::class, 'SVList']);
Route::post('GenerateReport', 'ReportController@addReport');
Route::get('click_edit/{id}','ReportController@edit_function');
Route::get('click_delete/{id}','ReportController@delete');
Route::get('click_view/{id}','ReportController@SV_View');
Route::post('update','ReportController@update_function');
Route::post('back','ReportController@back');


//Student Ranking
use App\Http\Controllers\StudentRankingController;

Route::get('AddRanking', [StudentRankingController::class, 'RankingInterface']);//student add meeting booking
Route::get('ViewRanking', [StudentRankingController::class, 'viewRanking']); //student view ranking
Route::get('RetriveRanking/{id}', [StudentRankingController::class, 'retriveRanking']); //student view ranking list detail
Route::post('StudentRanking', 'StudentRankingController@addRanking');
Route::put('EditRanking/{id}' , [StudentRankingController::class, 'editRanking']); //student edit Ranking

//Evaluation
use App\Http\Controllers\EvaluationController;

Route::get('AddEvaluation',[EvaluationController::class, 'EvaluationInterface']);//student add meeting booking

Route::get('onclick_edit/{student_id}','EvaluationController@edit_evaluation');
Route::post('UpdateEvaluation', 'EvaluationController@edit_Evaluation');
Route::post('onclick_update','EvaluationController@update_evaluation');





//Rubric



Route::get('AddRubric', 'RubricController@abc');

Route::get('rbinsert', function () {
    return view('Rubric.insert');
});

Route::post('create','RubricController@create');

Route::get('/rubricdata/{{rubricID}}/delete','RubricController@delete');

Route::get('edit-records','RubricController@index');
Route::get('edit/{id}','RubricController@show');
Route::post('edit/{id}','SRubricController@edit');




//! Schedule
use App\Http\Controllers\ScheduleController;

//Route::get('AddSchedule', [ScheduleController::class, 'ScheduleInterface']);//student add meeting booking
//Route::post('Schedule', 'ScheduleController@addSchedule');
//Route::get('viewSchedule', [ScheduleController::class, 'viewSchedule']);//
//Route::get('viewStd','ScheduleController@indexStudent');
//Route::get('viewCoo','ScheduleController@indexCoordinator');
Route::get('/viewSchedule', 'ScheduleController@viewSchedule');//student
Route::get('/viewstdSchedule', 'ScheduleController@viewstdSchedule');//student
Route::get('/edituserSchedule/{psm_id}', 'ScheduleController@edituserSchedule');
Route::get('/updateuserSchedule', 'ScheduleController@updateuserSchedule');
//Route::get('/edituserSchedule/{psm_id}', 'ScheduleController@deleteuserSchedule');
Route::get('/addPSM', 'ScheduleController@addPSM');//coordinator


//Route::get('viewCooSchedule', function(){return view('Schedule/viewCooSchedule');});
//Route::post('indexCoordinator()');

