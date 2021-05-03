<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\portfolio_images;
use App\Model\admin\plan_images;
use App\Model\admin\portfolio_cats;
class PortfolioController extends Controller
{


    private $uploadPath = "uploads/portfolio/";


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

           $categories = portfolio_cats::all();

           $portfolios = portfolio::all();
           return view('admin.portfolio.show',compact('portfolios', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = portfolio_cats::all();

         return view('admin.portfolio.create',compact('categories'));
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


        // End of Upload Files

        $portfolio = new portfolio;

        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/portfolio', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $portfolio->f_image = $fileNameToStore;

        $portfolio->title_ar = $request->title_ar;
        $portfolio->title_en = $request->title_en;
        $portfolio->title_tr = $request->title_tr;

        $portfolio->text_ar = $request->text_ar;
        $portfolio->text_en = $request->text_en;
        $portfolio->text_tr = $request->text_tr;


        $portfolio->date = $request->date;
        $portfolio->url = $request->url;
        $portfolio->status = $request->status;
        $portfolio->client = $request->client;
        $portfolio->video_url = $request->video_url;

        $portfolio->video_text_ar = $request->video_text_ar;
        $portfolio->video_text_en = $request->video_text_en;
        $portfolio->video_text_tr = $request->video_text_tr;
        $portfolio->location = $request->location;
        $portfolio->location_url = $request->location_url;

        $portfolio->save();
        $portfolio->categories()->sync($request->categories);


        // Start of Upload Files
        if ($request->hasFile('portfolio_images')) {
            $all_images = $request->file('portfolio_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $portfolio_images = new portfolio_images;
                $portfolio_images->portfolio_id = $portfolio->id;
                $portfolio_images->portfolio_image_path = $image_name;
                $portfolio_images->save();
            }
        }

        // Start of Upload Files
        if ($request->hasFile('plan_images')) {
            $all_images = $request->file('plan_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $plan_images = new plan_images;
                $plan_images->portfolio_id = $portfolio->id;
                $plan_images->plan_image_path = $image_name;
                $plan_images->save();
            }
        }

      return redirect(route('portfolio.index'))->with('message',trans('backend.created_successfully'));

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
     * @param  \App\Admin\Model\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = portfolio_cats::all();


        $portfolio = portfolio::find($id);

        return view('admin.portfolio.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title_ar' => ['required', 'string', 'max:255'],

        ]);


        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('uploads/portfolio', $fileNameToStore);
            $portfoliox = portfolio::find($id);  // here to store image alone
            $portfoliox->f_image = $fileNameToStore;
            $portfoliox->save();
        }


        // Start of Upload Files
        if ($request->hasFile('portfolio_images')) {
            $all_images = $request->file('portfolio_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $portfolio_images = new portfolio_images;
                $portfolio_images->portfolio_id = $id;
                $portfolio_images->portfolio_image_path = $image_name;
                $portfolio_images->save();
            }
        }


        // Start of Upload Files
        if ($request->hasFile('plan_images')) {
            $all_images = $request->file('plan_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $plan_images = new plan_images;
                $plan_images->portfolio_id = $id;
                $plan_images->plan_image_path = $image_name;
                $plan_images->save();
            }
        }





        // End of Upload Files
        $portfolio = portfolio::where('id', $id)->update($request->except('_token', '_method', 'portfolio_images','f_image', 'plan_images','categories'));
        // except image cus we handle it aboves

        $portfoliox = portfolio::find($id);
        $portfoliox->categories()->sync($request->categories);

        return redirect(route('portfolio.index'))->with('message', trans('backend.updated_successfully'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


      $images = portfolio_images::where('portfolio_id', $id)->find();
      unlink($this->getUploadPath() . $images->portfolio_image_path);

      $pimages = plan_images::where('portfolio_id', $id)->find();
      unlink($this->getUploadPath() . $pimages->plan_image_path);


      portfolio::where('id',$id)->delete();
      return redirect()->back()->with('message','portfolio Deleted Sucsessfully');
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new portfolio_images;
        $images = portfolio_images::find($id);
        unlink($this->getUploadPath() . $images->portfolio_image_path);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);


    }



    public function deleteplanImage($id)
    {

        //For Deleting
        $images = new plan_images;
        $images = plan_images::find($id);
        unlink($this->getUploadPath() . $images->plan_image_path);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}
