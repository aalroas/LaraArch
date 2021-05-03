<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\frontend\post;
use App\Model\frontend\tag;
use App\Model\frontend\category;
use App\Model\frontend\post_images;
use Illuminate\Support\Facades\Auth; // error by tring to use restrict so i add it


class PostController extends Controller
{

      private $uploadPath = "uploads/posts/";


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

      $posts = post::all();
      return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = category::all();
        return view('admin.post.create',compact('categories'));
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
          'title_ar'=>'required',


        ]);




        $post = new post;

        $post->title_ar = $request->title_ar;
        $post->title_tr = $request->title_tr;
        $post->title_en = $request->title_en;

        $post->text_ar = $request->text_ar;
        $post->text_tr = $request->text_tr;
        $post->text_en = $request->text_en;



        $post->slug = $request->slug;
        $post->date = $request->date;


        $post->save();

        $post->categories()->sync($request->categories);


        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $post_images = new post_images;
                $post_images->post_id = $post->id;
                $post_images->post_image_path = $image_name;
                $post_images->save();
            }
        }
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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



        $post = post::with('categories')->where('id',$id)->first();

        $categories = category::all();
        return view('admin.post.edit',compact('post','categories'));


        return redirect(route('admin.dashboard'));       // here we add restract user of ccreating post

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
      $this->validate($request,[
        'title_ar'=>'required',

        // 'image'=>'required',
      ]);




         // End of Upload Files
      $post = post::find($id);
        //   $post->image = $imageUrl;


        $post->title_ar = $request->title_ar;
        $post->title_tr = $request->title_tr;
        $post->title_en = $request->title_en;

        $post->text_ar = $request->text_ar;
        $post->text_tr = $request->text_tr;
        $post->text_en = $request->text_en;



        $post->slug = $request->slug;
        $post->date = $request->date;

      $post->save();


        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $post_images = new post_images;
                $post_images->post_id = $id;
                $post_images->post_image_path = $image_name;
                $post_images->save();
            }
        }



      $post->categories()->sync($request->categories);
      return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      post::where('id',$id)->delete();
      return redirect()->back();

    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new post_images();
        $images = post_images::find($id);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}
