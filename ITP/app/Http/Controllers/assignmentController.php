<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use Illuminate\Support\Facades\DB;

class assignmentController extends Controller
{
    public function store(Request $request){

        $assignment=new Assignment;

        $this->validate($request,[
            'assignment_name'=>'required|max:100|min:5',
              'subject_name'=>'required|max:100|min:5',
        ]);

        $assignment->aName=$request->assignment_name;
        $assignment->Asub=$request->subject_name;
        $assignment->save();

        $data=Assignment::all();

        return view('assignments')->with('assignments',$data);
        return view('assignmentsStu')->with('assignmentsStu',$data);

        //dd($request->all());
    }
    //search*****************************
    public function assignmentsearch(Request $request)
    {
        $search = $request->get('assignmentsearch');
        
            $posts = DB::table('assignments')->where('aName','LIKE', '%' . $search . '%')->paginate(5);
            return view('assignments', ['assignments' => $posts]);
    
    

    }

   //delete*****************************************
   public function deleteAssignment($id){
     
    $ass=Assignment::find($id);
  
  $ass->delete();
    return redirect()->back();
}

 //update*****************************
 public function updateAssignmentview($id){
    $ass=Assignment::find($id);

    return view('updateAssignment')->with('assignmentdata',$ass);
}

public function updateassignment(Request $request){

    $this->validate($request,[
        'assignment_name'=>'required|max:100|min:5',
    ]);
    $id=$request->id;
    $assignment=$request->assignment_name;
    $data=Assignment::find($id);
    $data->aName=$assignment;
    $data->save();
    $datas=Assignment::all();
    return view('assignments')->with('assignments',$datas);

}
}
