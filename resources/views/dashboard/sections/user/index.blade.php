@extends('dashboard.layouts.app')
@section('title')
المشتركين
@endsection
@section('content')    


    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap align-items-center py-3">
            <div class="card-title">
             
                <div class="d-flex align-items-center justify-content-between w-100">
                    <h3 class="card-label bold-text"> المشتركين </h3>
                </div>
            </div>
            <div class="card-title">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <a class="btn btn-primary btn-lg" href="{{route('excel')}}">تصدير الى excel</a>

                </div>
               
            </div>

            <div class="card-title">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <a class="btn btn-primary btn-lg" target="_blank" href="{{route('pdf')}}">تصدير الى pdf</a>

                </div>
               
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-checkable yajra-datatable">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الإسم</th>
                        <th>رقم الهاتف</th>
                        <th>طريقة الدفع</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($subscribers as $sub)
                    <tr>
                        <th>{{$loop->index+1}}</th>
                        <th>{{$sub->name}}</th>
                        <th>{{$sub->phone}}</th>
                        <th>{{$sub->payment_type}}</th>
                  </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
      
    </script>
@endsection

