<?php

namespace App\Http\Controllers;

use App\Models\rubrics as rubrics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RubricController extends Controller
{
    //student
    public function RubricInterface()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('rubrics', 'users.userID', '=', 'rubrics.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('Rubric.AddRubric')->with('rubrics', $users);
    }
    
    function addRubric(Request $req) //student add reports
    {
        $rubricID = $req->input('rubricID');
        $userID = $req->input('userID');
        $rubricInfo = $req->input('rubricInfo');
        $rubricMark = $req->input('rubricMark');
        $coordinator_ID = $req->input('coordinator_ID');
        $coordinatorName = $req->input('coordinatorName');
        $date = $req->input('date');
        $time = $req->input('time');

 
        $rubrics = new rubrics;
        $rubrics->userID = session()->get('logged_user');
        $rubrics->rubricID = $rubricID;
        $rubrics->userID = $userID;
        $rubrics->rubricInfo= $rubricInfo;
        $rubrics->rubricMark = $rubricMark;
        $rubrics->coordinator_ID = $coordinator_ID;
        $rubrics->coordinatorName = $coordinatorName;
        $rubrics->date = $date;
        $rubrics->time = $time;
        $rubrics->save();
        return redirect("ViewRubric");

    }
    
    function viewRubric() //student view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('rubrics')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Rubric.ViewRubric')->with('rubrics', $users);
         //var_dump($users);
    }
   

    function retrieveRubric()  
    {
        
        $USER_ID = session()->get('logged_user');
        $users = DB::table('rubrics')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Rubric.RetrieveRubric')->with('rubrics', $users);
         //var_dump($users);

      
    }
    function editRubric()  //student edit reports
    {
        return View('Rubric.EditRubric'); 
    }
    
    
    
}

