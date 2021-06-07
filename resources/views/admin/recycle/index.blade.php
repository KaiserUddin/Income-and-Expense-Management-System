@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body ">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-primary bubble-shadow-small">
              <i class="fa fa-users"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">
            @php
                $totalUser=App\Models\User::where('status',0)->count();
            @endphp
            <div class="numbers">
              <p class="card-category">Users</p>
              <h4 class="card-title">
                @if($totalUser < 10)
                  0{{$totalUser}}
                @else
                  {{$totalUser}}
                @endif
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <a href="{{url('admin/recycle/income/category')}}">
      <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-info bubble-shadow-small">
              <i class="fa fa-info"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">
            @php
                $totalIncomeCate=App\Models\IncomeCategory::where('incate_status',0)->count();
            @endphp
            <div class="numbers">
              <p class="card-category">Income Category</p>
              <h4 class="card-title">
                @if($totalIncomeCate < 10)
                  0{{$totalIncomeCate}}
                @else
                  {{$totalIncomeCate}}
                @endif
              </h4>
            </div>
          </div>
        </div>
      </div>
      </div>
    </a>
  </div>

  <div class="col-sm-6 col-md-3">
    <a href="{{url('admin/recycle/expense/category')}}">
      <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-info bubble-shadow-small">
              <i class="fa fa-info"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">
            @php
                $totalExpenseCate=App\Models\ExpenseCategory::where('expcate_status',0)->count();
            @endphp
            <div class="numbers">
              <p class="card-category">Expense Category</p>
              <h4 class="card-title">
                @if($totalExpenseCate < 10)
                  0{{$totalExpenseCate}}
                @else
                  {{$totalExpenseCate}}
                @endif
              </h4>
            </div>
          </div>
        </div>
      </div>
      </div>
    </a>
  </div>

  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-secondary bubble-shadow-small">
              <i class="far fa-check-circle"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">
            <div class="numbers">
              <p class="card-category">Order</p>
              <h4 class="card-title">576</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
