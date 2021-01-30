<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consent;
use DataTables;

class ConsentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $consent = new Consent();
        // $consent->name = $request->get('name');
        // $consent->detail = $request->get('detail');
        // $consent->nameeng = $request->get('nameeng');
        // $consent->status = $request->get('status');
        // $consent->version = $request->get('version');
        // $consent->start = $request->get('start');
        // $consent->end = $request->get('end');
        // $consent->save();
        // return redirect('dashboard')->withSuccess('บันทึกสำเร็จ');

/*         Consent::updateOrCreate(['id' => $request->Customer_id],
                ['firstName' => $request->firstName, 
                'detail' => $request->detail,
                'nameeng' => $request->nameeng,
                'status' => $request->status,
                'version' => $request->version,
                'start' => $request->start,
                'end' => $request->end
                ]);        

        return response()->json(['success'=>'Consent saved successfully!']); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

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
