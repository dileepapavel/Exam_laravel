<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enotice;

class EnoticeController extends Controller
{
    public function store(Request $request){
        $enotice = new Enotice;
        $this->validate($request,[
            'notice_content'=>'required|max:10000|min:5',
            

        ]);

        $enotice->Ncontent=$request->notice_content;
        $enotice->save();
        $data=Enotice::all();
        //dd($data);
        return view('notices')->with('enotices',$data);
        return view('snotices')->with('enotices',$data);
     }


     //delete********************************************
    public function deleteNotice($id){

        $enotice = new Enotice;
        $enotice=Enotice::find($id);
        $enotice->delete();
        return redirect()->back();
    }

   //update*****************************
   public function updateNoticeview($id){
    $notice=Enotice::find($id);

    return view('updateNotice')->with('noticedata',$notice);
}

public function updatenotice(Request $request){
    $id=$request->id;
    $notice=$request->notices;
    $data=Enotice::find($id);
    $data->Ncontent=$notice;
    $data->save();
    $datas=Enotice::all();
    return view('notices')->with('enotices',$datas);

}
}

