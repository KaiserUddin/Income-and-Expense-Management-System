@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_header_title">
                      View User Information
                  </div>
                  <div class="col-md-4 card_btn_part">
                      <a href="{{url('admin/user')}}" class="btn btn-sm btn-dark">All User</a>
                  </div>
              </div>
          </div>
          <div class="card-body">
            @if(Session::has('success'))
              <script>
                swal({ title: "Success!", text: "{{Session::get('success')}}", icon: "success", timer: 5000});
              </script>
            @endif
            <div class="row">
              <!-- <div class="col-md-4 offset-4 mb-sm-5" style="height: auto;">
                @if($data->photo!='')
                <img height="40" src="{{asset('uploads/users/'.$data->photo)}}" alt="photo">
                @else
                <img height="40" src="{{asset('uploads/'.'avatar.jpg')}}" alt="photo">
                @endif
              </div> -->

              <div class="col-md-8 offset-2">
                <table class="table table-bordered table-striped table-hover custom_view_table">
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                      <td>Roll</td>
                      <td>:</td>
                      <td>{{$data->roleInfo->role_name}}</td>
                    </tr>
                    <tr>
                      <td>Photo</td>
                      <td>:</td>
                      <td>
                        @if($data->photo!='')
                        <img height="40" src="{{asset('uploads/users/'.$data->photo)}}" alt="photo">
                        @else
                        <img height="40" src="{{asset('uploads/'.'avatar.jpg')}}" alt="photo">
                        @endif
                      </td>
                    </tr>
                </table>
              </div>
            </div>

          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-sm btn-info">Print</a>
              <a href="#" class="btn btn-sm btn-dark">PDF</a>
              <a href="#" class="btn btn-sm btn-success">Excel</a>
          </div>
        </div>
    </div>
</div>
@endsection
