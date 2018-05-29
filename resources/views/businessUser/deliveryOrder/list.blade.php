@extends('businessUser.layouts.default')
@section('content')

<script>
    // $(document).ready(function(){
    //     $("#list_search").click(function(){
    //         $.get("/businessUser/deliveryOrder/list2", function(data){
    //             alert("Data: " + data);
    //         });
    //     });
    // });

    $(document).ready(function(){
        $("#list_search").click(function(e) {
            e.preventDefault();
            var form = $(this);

            alert('check');

            $.get(form.attr('/businessUser/deliveryOrder/list2'), form.serialize(), function(data) {
                // $("#deliveryOrderList").html(data);
                // alert(data);
            });
        });
    });
</script>

    <div>
        <form method="get" action="{{url('/businessUser/deliveryOrder/list')}}" id="deliveryOrderList">
            <div class="card">
                <div class="card-header">배송요청목록</div>
                <div class="card-body">
                    <table class="table table-bordered small">
                        <tr>
                            <td class="text-center align-middle">배송요청일</td>
                            <td>
                                @if(empty($request_data->order_date_start))
                                <input class="text-center" type="date" name="order_date_start" value="{{date('Y-m-d')}}"> ~ <input class="text-center" type="date" name="order_date_end" value="{{date('Y-m-d')}}">
                                @else
                                <input class="text-center" type="date" name="order_date_start" value={{$request_data->order_date_start}}> ~ <input class="text-center" type="date" name="order_date_end" value="{{$request_data->order_date_end}}">
                                @endif
                            </td>
                            <td class="text-center align-middle">수령인</td>
                            <td>
                                @if(empty($request_data->receiver_name))
                                    <input class="small text-md-left" type="text" name="receiver_name">
                                @else
                                    <input class="small text-md-left" type="text" name="receiver_name" value="{{$request_data->receiver_name}}">
                                @endif
                            </td>
                            <td class="text-center align-middle">업체관리번호</td>
                            <td>
                                @if(empty($request_data->sender_mgt_id))
                                    <input class="small text-md-left" type="text" name="sender_mgt_id">
                                @else
                                    <input class="small text-md-left" type="text" name="sender_mgt_id" value="{{$request_data->sender_mgt_id}}">
                                @endif
                            </td>
                            <td class="text-center align-middle">HBL</td>
                            <td>
                                @if(empty($request_data->hbl_no))
                                    <input class="small text-md-left" type="text" name="hbl_no">
                                @else
                                    <input class="small text-md-left" type="text" name="hbl_no" value="{{$request_data->hbl_no}}">
                                @endif
                            </td>
                            <td>
                                <button type="submit" class="btn btn-xs" >검색</button>
                                <input type="button" class="btn btn-xs" id="list_search" value="ajax검색">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

to do : 전체 : {{ $deliveryOrders->total() }} ( 1 / 1 페이지)37건
        <div id="deliveryOrder-table" style="height: 400px;">
            <table class="table table-bordered small">
                <thead>
                <tr>
                    <th class="align-middle text-center">선택</th>
                    <th class="align-middle text-center">상세</th>
                    <th class="align-middle text-center">순번</th>
                    <th class="align-middle text-center">업체관리번호</th>
                    <th class="align-middle text-center">요청일</th>
                    <th class="align-middle text-center">상태</th>
                    <th class="align-middle text-center">아이템명</th>
                    <th class="align-middle text-center">상품수<br/>총수량</th>
                    <th class="align-middle text-center">신고금액</th>
                    <th class="align-middle text-center">실무게</th>
                    <th class="align-middle text-center">수취인</th>
                    <th class="align-middle text-center">송장번호<br/>마스터BL</th>
                    <th class="align-middle text-center">ETD</th>
                </tr>
                </thead>
                <tbody>
                @foreach($deliveryOrders as $deliveryOrder)
                    <tr>
                        <td class="text-center align-middle" height="5" width="5"><input type="checkbox"></td>
                        <td class="text-center align-middle" width="10"><input type="button" value="상세"> </td>
                        <td class="text-center align-middle"> to_do </td>
                        <td class="text-center align-middle"> {{$deliveryOrder->sender_mgt_id}}</td>
                        <td class="text-center align-middle"> {{$deliveryOrder->order_date}}</td>
                        {{--<td class="text-center"> {{$order->mgt_id}}</td>--}}
                        <td class="text-center align-middle"> to_do </td>
                        <td class="text-center align-middle"> {{$deliveryOrder->item_name}} </td>
                        <td class="text-center align-middle"> to_do <br/> to_do </td>
                        <td class="text-center align-middle"> to_do </td>
                        <td class="text-center align-middle">{{$deliveryOrder->weight}}</td>
                        <td class="text-center align-middle">{{$deliveryOrder->receiver_name}}</td>
                        <td class="text-center align-middle">to_do</td>
                        <td class="text-center align-middle">to_do</td>
                        {{--<td class="text-center"> {{$order->order_date}}</td>--}}
                        {{--<td class="text-center"> {{$order->order_date}}</td>--}}
                        {{--<td>{{$post['mgt_no']}}</td>--}}
                        {{--<td>{{$post['item_nm']}}</td>--}}
                        {{--<td >--}}
                            {{--<button type="button" class="btn btn-danger " style="height: 30px">삭제</button>--}}
                            {{--<button type="button" class="btn btn-default" style="height: 30px">상세보기</button>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        to do :: 총무게: 165.35
                    </tr>
                    <tr>
                        <div align="right">
                            <button type="button" class="btn btn-xs btn-danger">삭제</button>
                            <a href="{{ action('DeliveryOrderController@create')}}" class="btn btn-xs btn-info" >등록</a>
                        </div>
                    </tr>
                </tfoot>
            </table>
            @if(!empty($deliveryOrders))
                {{ $deliveryOrders->links() }}
            @endif

        </div>
        <div align="right" style="bottom: auto">
            <button type="button" class="btn btn-xs btn-danger">삭제</button>
            <a href="{{ action('DeliveryOrderController@create')}}" class="btn btn-xs btn-info" >등록</a>
        </div>

@endsection
