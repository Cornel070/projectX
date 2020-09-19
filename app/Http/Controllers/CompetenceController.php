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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
