<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CompetenceController as Competence;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $password = "@projectX22";
        // dd(Hash::make($password));
        $title = "All staff";
        $staffs = User::where('role', '!=', 'Super Admin')
                    ->where(function($q){
                        $q->where('not_terminated', 'true');
                    })->get();
        return view('staff.all',compact('title','staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add staff";
        return view('staff.add',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'full_name'          => ['required', 'string', 'max:50'],
            'id'                 => ['required', 'min:3', 'unique:users'],
            'phone_no'           => ['required', 'min:10'],
            'email'              => ['required', 'string', 'unique:users'],
            'gender'             => 'required',
            'dob'                => 'required',
            'comp_doc'           => 'required',
            'photo_name'         => 'required',
            'join_date'          => 'required',
            'next_of_kin'        => ['required', 'string', 'max:50'],
            'next_of_kin_phn'    => ['required', 'min:10'],
            'next_of_kin_email'  => ['required', 'string'],
            'rela_next_of_kin'   => ['required', 'string'],
            'emergency_phn'      => ['required', 'min:10'],
            'emergency_email'    => ['required', 'string'],
            'emergency_name'     => ['required', 'string'],
            'emergency_rela'     => ['required', 'string'],
            'employment_type'    => 'required',
            'role'               => 'required',
            'address'            => 'required',
        ];

        $messages = [
            'full_name.required'             => 'The staff\'s full name is required',
            'full_name.max'                  => 'The staff\'s full name must not be more than 50 characters long',
            'phone_no.required'              => 'The staff\'s phone number is required',
            'phone_no.min'                   => 'The phone number should be atleast 10 characters long',
            'dob.required'                   => 'The date of birt is required',
            'photo_name.required'            => 'The staff\'s photo is required',
            'comp_doc.required'              => 'Please upload the supported file type. (Image: JPEG, JPG, PNG)',
            'join_date.required'             => 'A start date is required',
            'next_of_kin.required'           => 'The name of the next of kin is required',
            'next_of_kin_phn.required'       => 'A phone number is required for next of kin',
            'next_of_kin_phn.min'            => 'A minimun of 10 digits required for next of kin phone number',
            'next_of_kin_email.required'     => 'An email is require for next of kin',
            'next_of_kin_email.unique'       => 'This email is already taken',
            'rela_next_of_kin.required'      => 'Please enter the relationship with next of kin',
            'rela_next_of_kin.string'        => 'Please enter only text characters for relationship with next of kin',
            'emergency_phn.required'         => 'An emergency phone number is required',
            'emergency_phn.min'              => 'A minimun of 10 digits required for emergency phone number',
            'emergency_email.required'       => 'An emergency email address is required',
            'emergency_email.unique'         => 'This email is already taken',
            'emergency_name.required'        => 'The name of the emergency contact is required',
            'emergency_name.string'          => 'Only text characters required of emergency contact name',
            'emergency_rela.required'        => 'Relationship with emergency contact required',
            'emergency_rela.string'          => 'Only text characters required for relationship with emergency contact',
            'employment_type.required'       => 'Employee status is required',
            'role.required'                  => 'A role is required',
        ];
        $this->validate($request, $rules, $messages);
        if ($file = $request->file('photo_name')) {
            $name = $file->getClientOriginalName();
            $storagePath = public_path('/assets/images/uploads/');
            if ($file->move($storagePath, $name)) {
                $user = User::create($request->all());
                $user->photo_name = $name;
                $user->save();
                $competence = new Competence();
                $competence->store($request->only(['comp_name', 'exp_date']), $request->file('comp_doc'), $user->id);
                return redirect(route('all-staff'))->with('success', 'Staff successfully registered');
            }
        }
    }

    public function showLoginForm()
    {
       $title = "Admin Login";
       return view('auth.login',compact('title'));
    }

    public function login(Request $request)
    {
        $rules = [
            $this->username() => ['required','string'],
            'password' => ['required','string','min:6'],
        ];
        $this->validate($request, $rules);
        if (auth()->attempt(['email'=>$request->email,
                           'password'=>$request->password])) {
            return redirect(route('home'));
            // return redirect()->intended();
        }
        return redirect()->back()->with('error','Incorrect Login Credentials');
    }

    public function username()
    {
        return 'email';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = User::find($id);
        $title = $staff->full_name;
        return view('staff.profile', compact('title','staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = User::find($id);
        $title = 'Edit staff information';
        return view('staff.edit', compact('staff','title'));
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
         $rules = [
            'full_name'          => ['required', 'string', 'max:50'],
            'id'                 => ['required', 'min:3'],
            'phone_no'           => ['required', 'min:10'],
            'email'              => ['required', 'string'],
            'gender'             => 'required',
            'dob'                => 'required',
            'join_date'          => 'required',
            'next_of_kin'        => ['required', 'string', 'max:50'],
            'next_of_kin_phn'    => ['required', 'min:10'],
            'next_of_kin_email'  => ['required', 'string'],
            'rela_next_of_kin'   => ['required', 'string'],
            'emergency_phn'      => ['required', 'min:10'],
            'emergency_email'    => ['required', 'string'],
            'emergency_name'     => ['required', 'string'],
            'emergency_rela'     => ['required', 'string'],
            'employment_type'    => 'required',
            'role'               => 'required',
            'address'            => 'required',
        ];

        $messages = [
            'full_name.required'             => 'The staff\'s full name is required',
            'full_name.max'                  => 'The staff\'s full name must not be more than 50 characters long',
            'phone_no.required'              => 'The staff\'s phone number is required',
            'phone_no.min'                   => 'The phone number should be atleast 10 characters long',
            'dob.required'                   => 'The date of birt is required',
            'photo_name.required'            => 'The staff\'s photo is required',
            'comp_doc.required'              => 'Please upload the supported file type. (Image: JPEG, JPG, PNG)',
            'join_date.required'             => 'A start date is required',
            'next_of_kin.required'           => 'The name of the next of kin is required',
            'next_of_kin_phn.required'       => 'A phone number is required for next of kin',
            'next_of_kin_phn.min'            => 'A minimun of 10 digits required for next of kin phone number',
            'next_of_kin_email.required'     => 'An email is require for next of kin',
            'next_of_kin_email.unique'       => 'This email is already taken',
            'rela_next_of_kin.required'      => 'Please enter the relationship with next of kin',
            'rela_next_of_kin.string'        => 'Please enter only text characters for relationship with next of kin',
            'emergency_phn.required'         => 'An emergency phone number is required',
            'emergency_phn.min'              => 'A minimun of 10 digits required for emergency phone number',
            'emergency_email.required'       => 'An emergency email address is required',
            'emergency_email.unique'         => 'This email is already taken',
            'emergency_name.required'        => 'The name of the emergency contact is required',
            'emergency_name.string'          => 'Only text characters required of emergency contact name',
            'emergency_rela.required'        => 'Relationship with emergency contact required',
            'emergency_rela.string'          => 'Only text characters required for relationship with emergency contact',
            'employment_type.required'       => 'Employee status is required',
            'role.required'                  => 'A role is required',
        ];
        $this->validate($request, $rules, $messages);
        $user = User::find($id);
        if ($request->hasFile('photo_name')) {
            if ($file = $request->file('photo_name')) {
                $name = $file->getClientOriginalName();
                $storagePath = public_path('/assets/images/uploads/');
                if ($file->move($storagePath, $name)) {
                    $user->photo_name = $name;
                    $user->save();
                }
            }
        }
        $user->update($request->all());
        if ($request->hasFile('comp_doc')) {
            $competence = new Competence();
            $competence->update($request->only(['comp_name', 'exp_date', 'comp_id']), $request->file('comp_doc'), $user->id);
        }
        return redirect(route('profile', $user->id))->with('success', 'Staff information successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = User::find($id);
        $staff->delete();
        return redirect(route('all-staff'))->with('success','Staff Deleted!');
    }

    public function terminateContract(Request $request)
    {
        $staff = User::find($request->staffID);
        $staff->termination_date = Carbon::now();
        $staff->not_terminated = "false";
        $staff->save();
        return response()->json(true);
    }

    public function reinstateStaff(Request $request )
    {
        $staff = User::find($request->staffID);
        $staff->not_terminated = "true";
        $staff->save();
        return response()->json(true);
    }
}
