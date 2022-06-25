<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rubrics;


class RubricController extends Controller
{
    
    // public function RubricInterface()
    // {
    //     $USER_ID = session()->get('logged_user');
    //     $users = DB::table('users')
    //         ->Join('rubrics', 'users.userID', '=', 'rubrics.userID')
    //         ->where('users.userID', '=', $USER_ID)
    //         ->get();
    //     return View('Rubric.AddRubric')->with('rubrics', $users);
    // }
    


    public function view() { //view rubric

        $rubric = \App\Models\rubrics::all();

        return view ('Rubric.AddRubric', ['rubric' => $rubric]);
    }

    public function create(Request $request)//create new rubric
    { 
		\App\Models\rubrics::create($request ->all());
		return redirect('AddRubric');
	}

    public function delete($rubricID) //delete rubric 
	{
		$rubric = \App\Models\rubrics::find($rubricID);
		$rubric-> delete($rubric);
		return redirect('AddRubric');
	}

    public function show($id) {//update rubric 
        $rubrics = DB::select('select * from rubrics where id = ?',[$rubricID]);
        return view('editRubric',['rubrics'=>$rubric]);
        }
        public function edit(Request $request,$id) {
        $rubricInfo = $request->input('rubricInfo');
        $rubricMark = $request->input('rubricMark');
        }
 }
   