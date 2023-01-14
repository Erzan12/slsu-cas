<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;
use App\Models\Specialist;
use App\Models\User;
use App\Models\Information;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SpecialistController extends Controller
{

    public function index()
    {
        $specialists = \App\Models\Specialist::join('information', 'information.user_id','=','specialists.id')->where('account_type', 2)->get();
        return view('admins.specialist-index',['specialists'=> $specialists]);
    }

    public function create()
    {
        return view('admins.add-specialist');
    }
    public function edit(Request $request) 
    {
        
        $specialists = \App\Models\Specialist::join('information', 'information.user_id','=','specialist.id')->where('account_type', 2)->where('id',$request)->id->first();
       dd($specialist);
        return view('admins.edit-specialist', ['specialist' => $specialist]);
    }
    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'employee_id' => 'required|unique:specialists',
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'gender' => 'required|numeric',
            'barangay' => 'required',
            'municipality' => 'required',
            'province' => 'required',
            'password' => 'required'

        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();

        $specialists=Specialist::create(Arr::only($data,['employee_id']));
        $filename = $request->employee_id .".". $request->avatar->getClientOriginalExtension();
        if ($request->hasFile('avatar'))
        {
            Storage::putFileAs('public/specialists/',$request->avatar, $filename);
        }
        $data['avatar']= '/storage/specialists/' . $request->employee_id .".". $request->avatar->getClientOriginalExtension();
        $data['user_id'] = $specialist->id;
        $data['account_type'] = 2;
        $information=Information::create(Arr::except($data, ['employee_id']));
        
       $user = User::create([
        'username'=> $specialist->employee_id,
        'password' => bcrypt($request->password),
        'user_id' => $specialist->id,
        'account_type'=> 2
        ]);
        
        Auth::login($user);
        return redirect(route('specialists'));

    }

}


