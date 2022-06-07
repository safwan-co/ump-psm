<?php

namespace App\Http\Controllers;

use App\Models\reports as reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    //student
    public function ReportInterface()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('reports', 'users.userID', '=', 'reports.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('GenerateReport.addReport')->with('reports', $users);
        // var_dump($students);

    }
    
    function addReport(Request $req) //student add reports
    {
        $Student_ID = $req->input('Student_ID');
        $Date = $req->input('Date');
        $Time = $req->input('Time');
        $Title = $req->input('Title');
        $Description = $req->input('Description');
 
        //table meetings
        $reports = new reports;
        $reports->userID = session()->get('logged_user');
        $reports->Student_ID = $Student_ID;
        $reports->Date = $Date;
        $reports->Time = $Time;
        $reports->Title = $Title;
        $reports->Description = $Description;
        $reports->save();
        return redirect("ViewReport");

    }
    
    function viewReport() //student view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('reports')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('GenerateReport.ViewReport')->with('reports', $users);
         //var_dump($users);
    }
   

    function retriveReport()  //lecturer view reports list detail
    {
        
        $USER_ID = session()->get('logged_user');
        $users = DB::table('reports')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('GenerateReport.RetriveReport')->with('reports', $users);
         //var_dump($users);

      
    }
    function editReport()  //student edit reports
    {
        return View('GenerateReport.EditReport'); 
    }
    
    
    
}

