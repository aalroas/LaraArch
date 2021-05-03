<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{


    private $uploadPath = "uploads/services/";


     /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
           $services = service::all();
           return view('admin.service.show',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // return  $request->all();
        $this->validate($request,[
          'title_ar' => ['required', 'string', 'max:255'],

          // 'image'=> ['required'],
      ]);



         // Start of Upload Files
      $formFileName = "image";
      $fileFinalName = "";
      if ($request->$formFileName != "") {
          $fileFinalName = time() . rand(1111,
                  9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
          $path = $this->getUploadPath();
          $request->file($formFileName)->move($path, $fileFinalName);
      }



      // End of Upload Files

        $service = new service;



        $service->image = $fileFinalName;

        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->title_tr = $request->title_tr;


        $service->text_ar = $request->text_ar;
        $service->text_en = $request->text_en;
        $service->text_tr = $request->text_tr;

        $service->price = $request->price;

        $service->save();



        return redirect(route('service.index'))->with('message', trans('backend.created_successfully'));



    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $service = service::find($id);

      return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'title_ar' => ['required', 'string', 'max:255'],
          // 'image'=>'required',
      ]);

       // Start of Upload Files
         $formFileName = "image";
         $fileFinalName = "";
         if ($request->$formFileName != "") {
             $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
             $path = $this->getUploadPath();
             $request->file($formFileName)->move($path, $fileFinalName);
             $sliderx = service::find($id);  // here to store image alone
             $sliderx->image = $fileFinalName; // here there is  a bug when update profile image
             $sliderx->save();
         }



         // End of Upload Files
        $service = service::where('id',$id)->update($request->except('_token','_method','image'));
      // except image cus we handle it aboves


        return redirect(route('service.index'))->with('message', trans('backend.updated_successfully'));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = service::find($id);
        unlink($this->getUploadPath() . $service->image);


      service::where('id',$id)->delete();


      return redirect()->back()->with('message', trans('backend.deleted_successfully'));
    }
}


