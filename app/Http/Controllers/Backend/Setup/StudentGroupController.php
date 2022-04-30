<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;

class StudentGroupController extends Controller
{
    public function ViewGroup(){
        $data['allData'] = StudentGroup::all();
        return view('backend.setup.group.view_group',$data);
}

public function AddGroup(){
    return view('backend.setup.group.add_group');

}

public function StoreGroup(Request $request){
    $validatedData = $request->validate([
        'name' => 'required|unique:student_groups,name',
       
    ]);


    $data = new StudentGroup();
    $data->name = $request->name;
    $data->save();

    return redirect()->route('student.group.view');
}

public function EditGroup($id){
    $editData = StudentGroup::find($id);
    return view('backend.setup.group.edit_group',compact('editData'));
}


public function UpdateGroup(Request $request, $id){
    $data = StudentGroup::find($id);
    $validatedData = $request->validate([
        'name' => 'required|unique:student_groups,name,'.$data->id    
    ]);
    $data->name = $request->name;
    
    $data->save();

    return redirect()->route('student.group.view'); 
}

public function DeleteGroup($id){
    $user = StudentGroup::find($id);
    $user->delete();

    return redirect()->route('student.group.view'); 
}

}


