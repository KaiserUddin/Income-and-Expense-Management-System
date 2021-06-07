<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Image;

class UserController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $allUser=User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('allUser'));
    }

    public function add(){
      return view('admin.user.add');
    }

    public function edit($slug){
      $data = User::where('status',1)->where('slug',$slug)->firstOrFail();
      return \view('admin.user.edit',\compact('data'));
    }

    public function view($slug){
      $data = User::where('status',1)->where('slug',$slug)->firstOrFail();
      return \view('admin.user.view',\compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
        'role' => 'required',
      ],[
        'name.required'=>'Please enter name!'
      ]);

      $slug='U'.uniqid(20);
      $insert=User::insertGetId([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role'=>$request->role,
        'slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($request->hasFile('pic')){
        $image = $request->file('pic');
        $imageName = 'user_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(250,250)->save(base_path('public/uploads/users/'.$imageName));

        User::where('id',$insert)->update([
          'photo'=>$imageName,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
      }

      if($insert){
        Session::flash('success','value');
        return redirect('admin/user');
      }else{
        Session::flash('error','value');
        return redirect('admin/user/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
          'role'=>'required',
      ],[
          'role.required'=>'Please enter User Role!',
      ]);
      
      $id=$request->id;
      $slug =$request->slug;
      $update=User::where('status',1)->where('id',$id)->update([
        'role' => $request->role,
        'updated_at'=>Carbon::now()->toDateTimeString(),

      ]);

      if($update){
        Session::flash('success','User role updated successfully.');
        return redirect('admin/user/view/'.$slug);
      }else{
        Session::flash('error','your operation failed!');
        return redirect('admin/user/edit/'.$slug);
      }
    }

    public function softdelete(){

    }

    public function restore(){

    }

    public function delete(){

    }

}
