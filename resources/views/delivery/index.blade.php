@extends('layouts.app')
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemModal" data-whatever="@mdo">상품추가</button>
        <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">상품등록</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="item_name" class="control-label">상품명</label>
                                <input type="text" class="form-control" id="item_name">
                            </div>
                            <div class="form-group">
                                <label for="brand" class="control-label">브랜드</label>
                                <input type="text" class="form-control" id="brand">
                            </div>
                            <div class="form-group">
                                <label for="unit_price" class="control-label">단가</label><input type="text" class="form-control" id="unit_price" width="10">
                                <label for="quantity" class="control-label">수량</label>
                                <input type="text" class="form-control" id="quantity">
                            </div>
                            <div class="form-group">
                                <label for="hs_code" class="control-label">HS CODE</label>
                                <input type="text" class="form-control" id="hs_code">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">등록</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>관리번호</th>
                <th>상품명</th>
            </tr>
            </thead>
            <tbody>
            @foreach($deliveries as $post)
                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['mgt_no']}}</td>
                    <td>{{$post['item_nm']}}</td>
                    <td><a href="{{action('DeliveryController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{action('DeliveryController@destroy', $post['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection