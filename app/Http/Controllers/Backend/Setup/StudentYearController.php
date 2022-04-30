<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;

class StudentYearController extends Controller
{
    public function ViewYear(){
        $data['allData'] = StudentYear::all();
        return view('backend.setup.year.view_year',$data);
}

public function AddYear(){
    return view('backend.setup.year.add_year');

}

public function StoreYear(Request $request){
    $validatedData = $request->validate([
        'name' => 'required|unique:student_years,name',
       
    ]);


    $data = new StudentYear();
    $data->name = $request->name;
    $data->save();

    return redirect()->route('student.year.view');
}

public function EditYear($id){
    $editData = StudentYear::find($id);
    return view('backend.setup.year.edit_year',compact('editData'));
}


public function UpdateYear(Request $request, $id){
    $data = StudentYear::find($id);
    $validatedData = $request->validate([
        'name' => 'required|unique:student_years,name,'.$data->id    
    ]);
    $data->name = $request->name;
    
    $data->save();

    return redirect()->route('student.year.view'); 
}

public function DeleteYear($id){
    $user = StudentYear::find($id);
    $user->delete();

    return redirect()->route('student.year.view'); 
}

}
