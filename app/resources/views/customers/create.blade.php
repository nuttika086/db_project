@extends('customers.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CREATE CUSTOMERS</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('customers.store') }}" method="POST">
    @csrf

     

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อ:</strong>
                <input type="text" name="customerFirstName" class="form-control" placeholder="customerFirstName">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุล:</strong>
                <input type="text" name="customerLastName" class="form-control" placeholder="customerLastName">
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทรลูกค้า:</strong>
                <input type="text" name="customerphone" class="form-control" placeholder="customerphone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ที่อยู่:</strong>
                <input type="text" name="customeraddress" class="form-control" placeholder="customeraddress">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <input type="reset" value="ยกเลิก" class="btn btn-warning">
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            </div>
        </div>
     </div>
</form>

@endsection

