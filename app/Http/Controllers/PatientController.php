<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;
use App\Models\User;
use App\Models\Information;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id_number' => 'required|unique:patients',
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

        $patient=Patient::create(Arr::only($data,['id_number']));
        $path='';
        if ($request->hasFile('avatar'))
        {
            $path=Storage::putFileAs('public/patients/',$request->avatar, $request->id_number .".". $request->avatar->getClientOriginalExtension());
        }
        $data['avatar']=$path;
        $data['user_id'] = $patient->id;
        $data['account_type'] = 3;
        $information=Information::create(Arr::except($data, ['id_number']));
        
       $user = User::create([
        'username'=> $patient->id_number,
        'password' => bcrypt($request->password),
        'user_id' => $patient->id,
        'account_type'=> 3
        ]);
        
        Auth::login($user);
        return redirect(route('dashboard'));

    }
}
