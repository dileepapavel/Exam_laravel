<?php
//these are the routes for the lecturers*********************************************************

Route::get('/exam', function () {
    return view('exams');
});

Route::get('/result', function () {
    $data=App\Result::all();
    return view('results')->with('results',$data);
});
Route::get('/notice', function () {
    $data=App\Enotice::all();
    
        return view('notices')->with('enotices', $data);
    });
Route::get('/resultReport', function () {
    return view('reports');
});

Route::get('/resultReport', 'reportController@count');


Route::get('/assignment', function () {
    $data=App\Assignment::all();
    return view('assignments')->with('assignments',$data);
});

//end of the lecturer routes......
//these are the student routes***************************************************************************

Route::get('/sexam', function () {
    return view('examsStu');
});

Route::get('/sresult', function () {
    $data=App\Result::all();
    return view('resultsStu')->with('results',$data);
});
Route::get('/snotice', function () {
    $data=App\Enotice::all();
    return view('noticesStu')->with('enotices',$data);
});
Route::get('/sassignment', function () {
    $data=App\Assignment::all();
    return view('assignmentsStu')->with('assignments',$data);
});

//end of the student routes......
//here begins the routes for the controllers

//result*******************************************************************************************************
Route::post('/saveResult' , 'resultController@store');

Route::get('/deleteResult/{id}', 'resultController@deleteResult');
//Route::delete('/deleteResult/{Rid}', 'resultController@deleteResult');


Route::get('/updateResult/{id}', 'resultController@updateResultview');
Route::post('/updateresults' , 'resultController@updateresult');

Route::post('/resultsearch','resultController@resultsearch'); 




//assignment******************************************************************************************************
Route::post('/saveAssignment','assignmentController@store');

Route::get('/deleteAssignment/{id}', 'assignmentController@deleteAssignment');
//Route::delete('/deleteAssignment/{id}', 'assignmentController@store');

Route::get('/updateAssignment/{id}', 'assignmentController@updateAssignmentview');
Route::post('/updateAssignments', 'assignmentController@updateassignment');

Route::post('/assignmentsearch','assignmentController@assignmentsearch'); 





//notice***********************************************************************************************************
Route::post('/saveNotice', 'EnoticeController@store');

Route::get('/deleteNotice/{id}', 'EnoticeController@deleteNotice');
//Route::delete('/deleteResult/{id}', 'resultController@deleteResult');

Route::get('/updateNotice/{id}', 'EnoticeController@updateNoticeview');
Route::post('/updateNotices', 'EnoticeController@updatenotice');