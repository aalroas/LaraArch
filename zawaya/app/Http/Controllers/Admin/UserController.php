<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use App\Model\admin\role;


class UserController extends Controller
{

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
           $users = admin::all();
           return view('admin.user.show',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = role::all();
        return view('admin.user.create',compact('roles'));
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
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
          'phone' => ['required', 'numeric'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
          // 'image'=> ['required'],
      ]);
      if($request->hasFile('image')) {
         // $request->image->getClientOriginalName(); // to use orjnal name
         $imageUrl = $request->image->store('public');
         $user = new admin;
         $user->image = $imageUrl;  // here to store image alone
         $user->name = $request->name;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->password = $request['password'] = bcrypt($request->password);
         $user->status = $request->status? : $request['status']=0;
         $user->save();
         $user->roles()->sync($request->role);
      } else {
        // need development
        $user = new admin;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request['password'] = bcrypt($request->password);
        $user->status = $request->status? : $request['status']=0;
        $user->save();
        $user->roles()->sync($request->role);
      }

      return redirect(route('user.index'))->with('message','User Created successfully');
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
      $user = admin::find($id);
      $roles = role::all();
      return view('admin.user.edit',compact('user','roles'));
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
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255',
          'phone' => 'required|numeric',
          // 'image'=>'required',
      ]);

       if($request->hasFile('image')) {
        //$request->image->getClientOriginalName(); // to use orjnal name
         $imageUrl = $request->image->store('public');
         $userx = admin::find($id);  // here to store image alone
         $userx->image = $imageUrl; // here there is  a bug when update profile image
         $userx->save();
      }
      $request->status? : $request['status']=0;
      $user = admin::where('id',$id)->update($request->except('_token','_method','role','image'));
      // except image cus we handle it above
      admin::find($id)->roles()->sync($request->role);
      return redirect(route('user.index'))->with('message','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $admin = admin::find($id);
        // unlink($this->getUploadPath() . $admin->image);


      admin::where('id',$id)->delete();
      return redirect()->back()->with('message','User Deleted Sucsessfully');
    }
}
