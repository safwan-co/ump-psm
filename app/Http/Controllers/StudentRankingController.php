<?php

namespace App\Http\Controllers;

use App\Models\rankings as rankings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentRankingController extends Controller
{
    //student
    public function RankingInterface()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('rankings', 'users.userID', '=', 'rankings.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('StudentRanking.AddRanking')->with('rankings', $users);
    }
    
    function addRanking(Request $req) //student add reports
    {
        $Student_ID = $req->input('Student_ID');
        $student_grade = $req->input('student_grade');
        $student_ranking = $req->input('student_ranking');
 
        //table meetings
        $rankings = new rankings;
        $rankings->userID = session()->get('logged_user');
        $rankings->Student_ID = $Student_ID;
        $rankings->student_grade = $student_grade;
        $rankings->save();
        return redirect("ViewRanking");

    }
    
    function viewRanking() //student view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('rankings')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('StudentRanking.ViewRanking')->with('rankings', $users);
         //var_dump($users);
    }
   

    function retriveRanking()  //lecturer view reports list detail
    {
        
        $USER_ID = session()->get('logged_user');
        $users = DB::table('rankings')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('StudentRanking.RetriveRanking')->with('rankings', $users);
         //var_dump($users);

      
    }
    function editRanking()  //student edit reports
    {
        return View('StudentRanking.EditRanking'); 
    }
    
    
    
}

