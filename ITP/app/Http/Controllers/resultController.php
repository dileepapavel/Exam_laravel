<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use Illuminate\Support\Facades\DB;

class resultController extends Controller
{
    public function store(Request $request){

        $result=new Result;

        $this->validate($request,[
            'year'=>'required|max:100|min:5',
             'name'=>'required|max:100|min:5',
            'module'=>'required|max:100|min:5',
            'mark'=>'required|max:2|min:1',
        ]);


        $result->year=$request->year;
        $result->Sname=$request->name;
        $result->module=$request->module;
        $result->resType=$request->mark;
        $result->save();

        $data=Result::all();

        return view('results')->with('results',$data);
        return view('resultsStu')->with('resultsStu',$data);

        //dd($request->all());
    }
    //delete********************************
    public function deleteResult($id){
     
        $res=Result::find($id);
      
      $res->delete();
        return redirect()->back();
    }

    //search*****************************
    public function resultsearch(Request $request)
    {
        $search = $request->get('resultsearch');
        
            $posts = DB::table('results')->where('Sname','LIKE', '%' . $search . '%')->paginate(5);
            return view('results', ['results' => $posts]);
    
    

    }

    //update*****************************
   public function updateResultview($id){
        $res=Result::find($id);

        return view('updateResult')->with('resultdata',$res);
    }

    public function updateresult(Request $request){
        $this->validate($request,[
            'year1'=>'required|max:100|min:5',
             'name1'=>'required|max:100|min:5',
            'module1'=>'required|max:100|min:5',
            'mark1'=>'required|max:2|min:1',
        ]);

        
        $id=$request->id;
        $result=$request->year1;
        $result1=$request->name1;
        $result2=$request->module1;
        $result3=$request->mark1;


        $data=Result::find($id);
        $data->year=$result;
        $data->Sname=$result1;
        $data->module=$result2;
        $data->resType=$result3;
        $data->save();
        $datas=Result::all();
        return view('results')->with('results',$datas);

    }
}
