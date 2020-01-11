<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use DB;
use File;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::paginate(5);
        return view('admin.company.company', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.addcompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'company_name' => 'required|string',
            'company_email' => 'required|string',
            'website' => 'required|string',
            'logo' => 'required|image|max:2000'
        ]);
        
       if($request->hasFile('logo'))
       {
           $resource = $request->file('logo');
           $name =date('YmdHis').".". $resource->getClientOriginalExtension();
           $resource->move(\base_path()."/storage/app/company", $name);
           $save = DB::table('companies')->insert([
               'company_name' => $request->company_name,
               'company_email' => $request->company_email,
               'website' => $request->website,
               'logo' => $name
           ]);
           echo "Logo berhasil diupload";
           return redirect('dashboard/company');
       }else
       {
           echo "Logo Gagal diUpload";
       }
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
        $company = Company::find($id);
        return view('admin.company.editcompany', compact('company'));
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
        $logo = Company::where('id',$id)->first();
        File::delete('/storage/app/company'.$logo->file);

        Company::where('id',$id)->delete();

        return redirect()->back();
    }
}
