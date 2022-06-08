<?php

namespace App\Http\Controllers;

use App\Models\psmuser as psmuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ScheduleController extends Controller
{
    //student
    public function ScheduleInterface()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('psmuser', 'users.userID', '=', 'psmuser.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('Schedule.AddSchedule')->with('psmuser', $users);
    }
    
    function addSchedule(Request $req) //
    {
        $psm_sid = $req->input('psm_sid');
        $psm_year = $req->input('psm_year');
        $psm_sem = $req->input('psm_sem');

 
        $psmuser = new evaluations;
        $psmuser->userID = session()->get('logged_user');
        $psmuser->psm_sid = $psm_sid;
        $psmuser->psm_year = $psm_year;
        $psmuser->psm_sem= $psm_sem;
        $psmuser->save();
        return redirect("ViewSchedule");

    }
    
    function viewSchedule() //student view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('psmuser')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Schedule.ViewSchedule')->with('psmuser', $users);
         //var_dump($users);
    }
   

    function retriveSchedule()  //lecturer view reports list detail
    {
        
        $USER_ID = session()->get('logged_user');
        $users = DB::table('psmuser')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Schedule.RetriveSchedule')->with('psmuser', $users);
         //var_dump($users);

      
    }
    function editSchedule()  //student edit reports
    {
        return View('Schedule.EditSchedule'); 
    }
    public function index(){
        $users = DB::select('select * from psmuser ORDER BY psmsid ASC');
        return view('viewSchedule',['psmuser'=>$users]);
    }
}

