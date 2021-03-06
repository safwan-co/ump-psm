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
        $id = $req->input('id');
        $sv = $req->input('sv');
        $Date = $req->input('Date');
        $Time = $req->input('Time');
        $Title = $req->input('Title');
        $Description = $req->input('Description');
 
        //table meetings
        $reports = new reports;
        $reports->userID = session()->get('logged_user');
        $reports->id = $id;
        $reports->sv = $sv;
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
   
    function viewReportSV() //SV view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('reports')
            ->where('sv', '=', $USER_ID)
            ->get();
        return View('GenerateReport.ViewReportSV')->with('reports', $users);
         //var_dump($users);
    }
   

    function retriveReport() 
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
    
    function edit_function($id)
    {
        $student = DB::select('select * from reports where id = ?', [$id]);          
        return view('GenerateReport.EditReport',['student'=>$student]);
    
    }
    function update_function(Request $req)
    {
        $data=reports::find($req->id);
        $data->id=$req->id;
        $data->sv=$req->sv;
        $data->Date=$req->Date;
        $data->Time=$req->Time;
        $data->Title=$req->Title;
        $data->Description=$req->Description;
        $data->save();
        return redirect('ViewReport');
    }

    function SV_View($id)
    {
        $student = DB::select('select * from reports where id = ?', [$id]);          
        return view('GenerateReport.SvReportView',['student'=>$student]);
    
    }

    function back()
    {
        return redirect('ViewReportSV');
    }

    function SVList() //student view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->where('user_type', '=', 'Supervisor')
            ->get();
        return View('GenerateReport.ViewSVList')->with('users', $users);
         //var_dump($users);
    }
    
    function delete($id)
    {
        $student = DB::delete('delete from reports where id = ?', [$id]);          
        return redirect('ViewReport');
    
    }

}