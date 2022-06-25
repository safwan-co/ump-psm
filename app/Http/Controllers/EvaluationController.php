<?php

namespace App\Http\Controllers;

use App\Models\evaluations as evaluations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EvaluationController extends Controller
{
    //student
    public function EvaluationInterface()
    {
        $USER_ID = session()->get('logged_user');
        $studentevaluations = DB::table('evaluations')
            ->get();
        return View('Evaluation.AddEvaluation')->with('studentevaluations', $studentevaluations);
    }
    
    function addEvaluation(Request $req) //student add reports
    {
        $student_id = $req->input('student_id');
        $student_name = $req->input('student_name');
        $psm_title = $req->input('psm_title');
        $psm_type = $req->input('psm_type');
        $supervisor_name = $req->input('supervisor_name');
        $psm1_mark = $req->input('psm1_mark');
        $psm2_mark = $req->input('psm2_mark');

 
        $evaluations = new evaluations;
        $evaluations->userID = session()->get('logged_user');
        $evaluations->Student_ID = $student_id;
        $evaluations->student_name = $student_name;
        $evaluations->psm_title= $psm_title;
        $evaluations->psm_type = $psm_type;
        $evaluations->supervisor_name = $supervisor_name;
        $evaluations->psm1_mark = $psm1_mark;
        $evaluations->psm2_mark = $psm2_mark;
        $evaluations->save();
        return redirect("ViewEvaluation");

    }
    
    function viewEvaluation() //student view reports
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('evaluations')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Evaluation.ViewEvaluation')->with('studentevaluations', $users);
         //var_dump($users);
    }
   

    function retriveEvaluation()  //lecturer view reports list detail
    {
        
        $USER_ID = session()->get('logged_user');
        $users = DB::table('evaluations')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Evaluation.RetriveEvaluation')->with('evaluations', $users);
         //var_dump($users);

    function edit_evaluation(Request $student_id)
    {

        $studentevaluations = DB::table('evaluations')
            ->where('evaluation.student_id', '=', $student_id)
            ->get();
        return View('Evaluation.ViewEvaluation')->with('studentevaluations', $studentevaluations);
        //$manageevaluation = DB::select('select * from evaluations where student_id = ?', [$student_id]);          
        //return view('Evaluation.UpdateEvaluation',['manageevaluation'=>$manageevaluation]);
         
    }

    function update_evaluation(Request $req)
    {
        $evaluations=evaluations::find($req->student_id);
        $evaluations->student_id=$req->student_id;
        $evaluations->userID=$req->userID;
        $evaluations->student_name=$req->student_name;
        $evaluations->psm_title=$req->psm_title;
        $evaluations->psm_type=$req->psm_type;
        $evaluations->supervisor_name=$req->supervisor_name;
        $evaluations->psm1_mark=$req->psm1_mark;
        $evaluations->psm2_mark=$req->psm2_mark;
        $evaluations->save();
        return redirect('ViewEvaluation');
    }  
    }
    function editEvaluation()  //student edit reports
    {
        return View('Evaluation.EditEvaluation'); 
    }
    
    
    
}

