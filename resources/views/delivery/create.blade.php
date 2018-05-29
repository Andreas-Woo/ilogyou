@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{url('delivery')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">관리번호</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="mgt_no" name="mgt_no">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">상품명</label>
                <div class="col-sm-10">
                    <textarea name="item_nm" rows="8" cols="80"></textarea>
                </div>
                <input name="item_qty">
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection