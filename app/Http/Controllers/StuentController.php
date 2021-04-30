<?php

namespace App\Http\Controllers;

use App\Models\Stuent;
use App\Models\Home;
use App\Models\Department;

use Illuminate\Http\Request;
use  App\Http\Requests\StuentRequest;
use App\Models\Ourclass;
use App\Models\Subject;

class StuentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $departments=Department::all();
        $subjects=Subject::all();
        $ourclasses=Ourclass::all();
        return view('post.post',compact('departments','subjects','ourclasses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StuentRequest $request)
    {
        //
        $department_id=$request->department_id;
        $subject_id=$request->subject_id;
        $ourclass_id=$request->ourclass_id;
        $name=$request->name;
        $age=$request->age;
        $address=$request->address;
        $father_name=$request->father_name;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $path=public_path('/images/uploads',$imagename);
        $image->move($path,$image);

        //this is object
        $obj= new Stuent;
        $obj->department_id=$department_id;
        $obj->subject_id=$subject_id;
        $obj->ourclass_id=$ourclass_id;



        $obj->name=$name;
        $obj->age=$age;
        $obj->address=$address;
        $obj->father_name=$father_name;
        $obj->image=$imagename;
        $obj->save();
        return redirect()->back()->with('success','Data Insert Successfully');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
