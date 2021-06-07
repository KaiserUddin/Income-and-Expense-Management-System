<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\models\Income;
use Carbon\Carbon;
use Session;
use Auth;

class IncomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $all = Income::where('income_status',1)->orderBy('income_id','DESC')->get();
        return view('admin.income.main.all',compact('all'));
    }

    public function add(){
        return view('admin.income.main.add');
    }

    public function edit($slug){
        $data=Income::where('income_status',1)->where('income_slug',$slug)->firstOrFail();
        return view('admin.income.main.edit',compact('data'));
    }

    public function view($slug){
        $data=Income::where('income_status',1)->where('income_slug',$slug)->firstOrFail();
        return view('admin.income.main.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'category'=>'required',
        ],[
            'category.required'=>'Please enter income category name!',
        ]);

        $slug = 'I'.uniqid();
        $creator = Auth::user()->id;
        $insert=Income::insert([
            'income_title'=>$request->title,
            'incate_id'=>$request->category,
            'income_amount'=>$request->amount,
            'income_date'=>$request->date,
            'income_slug'=>$slug,
            'income_creator'=>$creator,
            'income_date'=>$request->date,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','income information successfully saved!');
            return redirect('admin/income/add');
          }else{
            Session::flash('error','your operation failed!');
            return redirect('admin/income/add');
          }
    }

    public function update(Request $request){
        $this->validate($request,[
            'category'=>'required',
        ],[
            'category.required'=>'Please enter income category name!',
        ]);

        $id =$request->income_id;
        $slug =$request->income_slug;
        $update=Income::where('income_status',1)->where('income_id',$id)->update([
          'income_title'=>$request->title,
          'incate_id'=>$request->category,
          'income_amount'=>$request->amount,
          'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($update){
          Session::flash('success','income information updated successfully!');
          return redirect('admin/income/view/'.$slug);
        }else{
          Session::flash('error','your operation failed!');
          return redirect('admin/income/edit/'.$slug);
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $softdel=Income::where('income_status',1)->where('income_id',$id)->update([
            'income_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($softdel){
          return redirect('admin/income');
        }else{
          return redirect('admin/income');
        }
    }

    public function restore(){

    }

    public function delete(){
        
    }
}
