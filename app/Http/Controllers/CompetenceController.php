<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competence;

class CompetenceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Add more competences.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCompetence(Request $request)
    {
        $rules = [
            'comp_name' => ['required', 'string'],
            'comp_doc'  => 'required',
            'exp_date'  => 'required'
        ];

        $messages = [
            'comp_name.required' => 'Title',
            'comp_doc.required'  => 'Document',
            'exp_date.required'  => 'Expiry'
        ];

        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return response()->json(array(
                                'success'=>false,
                                'errors'=>$validator->errors()->all()
                            ));
        }
        if ($file = $request->file('comp_doc')) {
            $name = $file->getClientOriginalName();
            $storagePath = public_path('/assets/images/uploads/comp_docs');
            if ($file->move($storagePath, $name)) {
                $data = [
                            'user_id'     => $request->staffID,
                            'comp_name'   => $request->comp_name,
                            'comp_doc'    => $name,
                            'exp_date'    => $request->exp_date,
                        ];
                $comp = Competence::create($data);
                return response()->json(array(
                                        'success'=>true,
                                        'comp' => $comp),200);
            }
        }
        return response()->json(array(
                                'success'=>false,
                                'errors'=> 'Please upload a valid file'
                            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($input, $doc, $user_id)
    {
        $compArr = $this->createCompArr($input, $doc, $user_id);
        for($i = 0; $i < sizeof($compArr); $i++){
            Competence::create($compArr[$i]);
        }
        return true;
    }

    public function createCompArr($input, $doc, $user_id)
    {
         //Loop through the three arrays of competence vals (name, photo, exp_date)
         //and create one super array for all ($allComp)
        $allComps = [];
        foreach ($input['comp_name'] as $key => $value) {
            $name = $doc[$key]->getClientOriginalName();
            $storagePath = public_path('/assets/images/uploads/');
            if ($doc[$key]->move($storagePath, $name)) {
                array_push($allComps, [
                        'comp_name'   => $input['comp_name'][$key],
                        'comp_doc'    => $name,
                        'exp_date'    => $input['exp_date'][$key],
                        'user_id'     => $user_id
                ]);
            }
        }

        return $allComps;
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
