@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_header_title">
                      View Income Information
                  </div>
                  <div class="col-md-4 card_btn_part">
                      <a href="{{url('admin/income')}}" class="btn btn-sm btn-dark">All Income</a>
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
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <table class="table table-bordered table-striped table-hover custom_view_table">
                      <tr>
                        <td>Income Title</td>
                        <td>:</td>
                        <td>{{$data->income_title}}</td>
                      </tr>
                      <tr>
                        <td>Income Category</td>
                        <td>:</td>
                        <td>{{$data->incateInfo->incate_name}}</td>
                      </tr>
                      <tr>
                        <td>Income Amount</td>
                        <td>:</td>
                        <td>{{$data->income_amount}}</td>
                      </tr>
                      <tr>
                        <td>Income Date</td>
                        <td>:</td>
                        <td>{{$data->created_at->format('d-m-Y')}}</td>
                      </tr>
                  </table>
                </div>
                <div class="col-md-2"></div>
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
