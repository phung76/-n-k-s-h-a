<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\addlicensesrequest;
use App\Models\license;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLicense()
    {
        $data['Licenselist']=license::all();

        return view("license.license",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getaddLicense()
    {

        return view("license.addlicenses");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postaddLicense(Request $request)
    {
        $license = new License;
        $license->licenses_name	 =$request->name;
        $license->Licenses_color =$request->color;
        $license->storagetime =$request->storagetime;
        $license->licenses_partent =$request->partent;
        $license->licenses_hide =$request->hide;
        $license->licenses_createddate =$request->createddate;
        $license->save();
        return back();
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
        $data = license::find($id);
        return view('license.editlicense', ['license' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posteditLicense(Request $request, $id)
    {
        $license = new License;
        $arr['licenses_name']	=$request->name;
        $arr['Licenses_color'] =$request->color;
        $arr['storagetime'] =$request->storagetime;
        $arr['licenses_partent'] =$request->partent;
        $arr['licenses_hide'] =$request->hide;
        $arr['licenses_createddate'] =$request->createddate;
        $license::where('licenses_id',$id)->update($arr);
        return redirect('license');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        license::destroy($id);
       return back();
    }
}
