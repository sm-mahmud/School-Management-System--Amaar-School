<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentReg;

class StudentRegController extends Controller
{
    public function StudentRegView(){
        $data['allData'] = StudentReg::all();
        return view('backend.student.view_registration',$data);

    }

    public function StudentRegAdd(){
        return view('backend.student.add_registration');

    }

    public function StudentRegStore(Request $request){
        $validatedData = $request->validate([

           
            'name' => 'required|unique:student_regs,name,',
            'email'=> 'required|unique:student_regs,email,' ,
            'class' =>'required|unique:student_regs,class,',
            'group' => 'required|unique:student_regs,group,',
            'year' => 'required|unique:student_regs,year,', 
            'mobile' => 'required|unique:student_regs,mobile,' ,
            'address' => 'required|unique:student_regs,address,',
            'gender' => 'required|unique:student_regs,gender,', 
            'fname' => 'required|unique:student_regs,fname,', 
            'mname' => 'required|unique:student_regs,mname,' ,
            'religion' => 'required|unique:student_regs,religion,',    
            
           
        ]);
 
 
        $data = new StudentReg();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->class = $request->class;
        $data->group = $request->group;
        $data->year = $request->year;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->fname = $request->fname;
        $data->mname = $request->mname;
        $data->religion = $request->religion;
        $data->save();
 
        return redirect()->route('student.reg.view');

    }
}
