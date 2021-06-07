@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{url('admin/user/update')}}">
          @csrf
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_title">
                        Update User Information
                    </div>
                    <div class="col-md-4 card_btn_part">
                        <a href="{{url('admin/user')}}" class="btn btn-sm btn-dark">All User</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label custom_form_label">User Role:<span class="req_star">*</span></label>
              <div class="col-sm-7">
              <input type="hidden" name="id" value="{{$data->id}}">
              <input type="hidden" name="slug" value="{{$data->slug}}">
              @php
                $allRole=App\Models\UserRole::where('role_status',1)->orderBY('role_id','ASC')->get();
              @endphp
              <select class="form-control custom_form_control" name="role">
                <option value="">-- Select Role --</option>
                @foreach($allRole as $urole)
                  <option value="{{$urole->role_id}}"
                    {{ ($data->role == $urole->role_id) ? 'selected' : '' }} >
                    {{$urole->role_name}}
                  </option>
                @endforeach
              </select>
              </div>
            </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-md btn-success">SUBMIT</button>
            </div>
          </div>
      </form>
    </div>
</div>
@endsection
















