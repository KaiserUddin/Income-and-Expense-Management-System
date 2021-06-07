<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ExpenseCategory;
use Carbon\Carbon;
use Session;

class ExpenseCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $allData=ExpenseCategory::where('expcate_status',1)->orderBY('expcate_name','ASC')->get();
        return view('admin.expense.category.all',compact('allData'));
    }

    public function add(){
        return view('admin.expense.category.add');
    }

    public function edit($slug){
        $data=ExpenseCategory::where('expcate_status',1)->where('expcate_slug',$slug)->firstOrFail();
        return view('admin.expense.category.edit',compact('data'));
    }

    public function view($slug){
        $data=ExpenseCategory::where('expcate_status',1)->where('expcate_slug',$slug)->firstOrFail();
        return view('admin.expense.category.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
        ],[
            'name.required'=>'Please enter income category name!',
        ]);

        $slug = Str::of($request['name'])->slug('-');
        $insert=ExpenseCategory::insert([
          'expcate_name'=>$request->name,
          'expcate_remarks'=>$request->remarks,
          'expcate_slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($insert){
          Session::flash('success','expense category created successfully!');
          return redirect('admin/expense/category/add');
        }else{
          Session::flash('error','your operation failed!');
          return redirect('admin/expense/category/add');
        }
    }

    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
        ],[
            'name.required'=>'Please enter expense category name!',
        ]);

        $id =$request->id;
        $slug =$request->slug;
        $update=ExpenseCategory::where('expcate_status',1)->where('expcate_id',$id)->update([
          'expcate_name'=>$request->name,
          'expcate_remarks'=>$request->remarks,
          'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($update){
          Session::flash('success','expense category updated successfully!');
          return redirect('admin/expense/category/view/'.$slug);
        }else{
          Session::flash('error','your operation failed!');
          return redirect('admin/expense/category/edit/'.$slug);
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $softdel=ExpenseCategory::where('expcate_status',1)->where('expcate_id',$id)->update([
            'expcate_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($softdel){
          return redirect('admin/expense/category');
        }else{
          return redirect('admin/expense/category');
        }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restore=ExpenseCategory::where('expcate_status',0)->where('expcate_id',$id)->update([
          'expcate_status'=>1,
          'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restore){
        return redirect('admin/recycle/expense/category');
      }else{
        return redirect('admin/recycle/expense/category');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=IncomeCategory::where('expcate_status',0)->where('expcate_id',$id)->delete();
      
      if($del){
        return redirect('admin/recycle/expense/category');
      }else{
        return redirect('admin/recycle/expense/category');
      }
    }


}
