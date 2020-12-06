<?php

namespace App\Http\Controllers;
use App\models\employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class employeescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        return "this index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        //validate data before insert to database
        $rules = $this->getRules();
        $message = $this->getMessages();
        $validator = Validator::make($request->all() ,$rules, $message);
         if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInputs($request->all());
         }


        //save image in folder
        $file_extension= $request -> image -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path ='images';
        $request-> image -> move($path,$file_name);


        //save in Database

        $employee = new employee;
        $employee->name= request('name');
        $employee->membership= request('membership');
        $employee->telephone= request('telephone');
        $employee->image= $file_name;
        $employee->save();


    }


        protected function getRules()
        {
            return $rules = [
                'name' => 'required',
                'telephone' => 'required|min:11',
                'membership' => 'required|min:7|max:7',
                'image' => 'required',
            ];
        }
        protected function getMessages()
        {
            return $messages = [
              //  'name.required' => __('messages name required'),
                'name.required' => 'name is required',
                'telephone.min'=>'telephone number must be 11 character',
                'telephone.required'=>'telephone number is required',
                'membership.min'=>'membership must be 7 character',
                'membership.max'=>'membership must be 7 character',
                'membership.required'=>'membership is required',
                'image.required'=>'image is required',

            ];
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
