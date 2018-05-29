@extends('businessUser.layouts.default')

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">

    var item_no = 0;

    function add_new_item(obj, n) {


        // var_items.add("item_no" : item_no);

        var tag = "";
        item_no += 1;

        // tag += "<div>say hello</div>";
        //
        //  tag += "<div class=\"form-text flex-sm-row border\">";
        //  tag += "<label>item_no : "+ (item_no+n) + "</label>";
        //  tag += "<input id=\"item_no\" name=\"item_no[" + (item_no + n) + "]\" value="+ (item_no+n) + "><br/>";
        //  tag += "<div>";
        //  tag += "<label class=\"text-sm-right text-danger\">상품명</label>";
        //  tag += "<input class=\"text-lg-left\" id=\"item_name\" name=\"item_name["+ (item_no+n) +"]\" type=\"text\">";
        //  tag += "<label>쉬핑네임</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_shipping_name\" name=\"item_shipping_name\" type=\"text\">";
        //  tag += "<label>제품URL</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_url\" name=\"item_url\" type=\"text\">";
        //  tag += "<label>브랜드/셀러</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_brand_name\" name=\"item_brand_name\" type=\"text\">";
        //  tag += "<label>HS CODE</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_hs_code\" name=\"item_hs_code\" type=\"text\">";
        //  tag += "<label>주문번호</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_mgt_id\" name=\"item_mgt_id\" type=\"text\">";
        //  tag += "</div>";
        //  tag += "<div>";
        //  tag += "<label>트래킹넘버</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_tracking_no\" name=\"item_tracking_no\" type=\"text\">";
        //  tag += "<label>단가(USD)</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_unit_price\" name=\"item_unit_price\" type=\"text\">";
        //  tag += "<label>수량</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_quantity\" name=\"item_quantity\" type=\"text\">";
        //  tag += "<label>색상(영문)</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_color\" name=\"item_color\" type=\"text\">";
        //  tag += "<label>사이즈(영문)</label>";
        //  tag += "<input class=\"text-sm-right\" id=\"item_size\" name=\"item_size\" type=\"text\">";
        //  tag += "</div>";
        //  tag += "</div>";

            tag += "<div class=\"form-text border\">";
            tag += "<label>item_no : 1</label>";
            tag += "<input id=\"item_no_1\" name=\"item_no[" + (item_no + n) + "]\" value="+ (item_no+n) + "><br/>";
            tag += "<table class=\"table small\">";
            tag += "<tr>";
            tag += "<td class=\"text-right align-middle\">상품명</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_name[0]\" name=\"item_name[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">쉬핑네임</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_shipping_name[0]\" name=\"item_shipping_name[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">제품URL</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_url[0]\" name=\"item_url[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">브랜드/셀러</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_brand_name[0]\" name=\"item_brand_name[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "</tr>";
            tag += "<tr>";
            tag += "<td class=\"text-right align-middle\">HS CODE</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_hs_code[0]\" name=\"item_hs_code[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">주문번호</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_mgt_id[0]\" name=\"item_mgt_id[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">트래킹넘버</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_tracking_no[0]\" name=\"item_tracking_no[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "</tr>";
            tag += "<tr>";
            tag += "<td class=\"text-right align-middle\">단가(USD)</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_unit_price[0]\" name=\"item_unit_price[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">수량</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_quantity[0]\" name=\"item_quantity[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">색상(영문)</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_color[0]\" name=\"item_color[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "<td class=\"text-right align-middle\">사이즈(영문)</td>";
            tag += "<td>";
            tag += "<input class=\"text-sm-left\" id=\"item_size[0]\" name=\"item_size[" + (item_no + n) + "]\" type=\"text\">";
            tag += "</td>";
            tag += "</tr>";
            tag += "</table>";
            tag += "</div>";

        $("#" + obj).append(tag);

        // alert(tag);

        document.getElementById("item_cnt").value = item_no;

    }

    function add_new_row(obj, n) {

        // window.open("check");

        // var item_name;

        // $item_name = $("#item_name").val();
        // $brand = $("#item_name").val();

        // alert($("#num_rows").val(++num_rows));

        var item_name_input = ($("#item_name").val());


        $("#num_rows").val(++num_rows);
        var tag = ""
        tag += "<tr bgcolor=\"#ffffff\" id=\"tr_id" + (new_row_num + n) + "\">\n";
        tag += "<td align=\"center\">" + ((new_row_num + n) + 1) + "</td>\n";
        tag += "<td id=\"item_name1" + (new_row_num + n) + "\">\n";
        tag += ($("#item_name").val());
        tag += "</td>\n";
        tag += "<td>"
        tag += "<input type=\"text\" id=item_name_input name=item_name_input />\n";
        tag += "</td>\n"

        tag += "<td>\n";
        tag += ($("#brand_name").val());
        tag += "</td>\n";
        tag += "<td>\n";
        tag += ($("#website").val());
        tag += "</td>\n";
        tag += "<td>\n";
        tag += ($("#unit_price").val());
        tag += "</td>\n";
        tag += "<td>\n";
        tag += ($("#quantity").val());
        tag += "</td>\n";
        tag += ($("#hs_code").val());
        tag += "</td>\n";

        // tag +="<input type=\"hidden\" name=\"cma_num[]\" id=\"cma_num"+(new_row_num + n)+"\" value=\""+(new_row_num + n)+"\" />\n";
        // tag +="<input type=\"text\" name=\"cma_text[]\" id=\"cma_text"+(new_row_num + n)+"\" value=\"내용 "+($item_name)+"\" readonly/>\n";
        // tag +="<input type=\"text\" name=\"cma_text[]\" id=\"cma_text"+(new_row_num + n)+"\" value=\"내용 "+(new_row_num+1)+"\" />\n";
        tag += "</td>\n";
        tag += "<td>\n";
        tag += "<input type=\"button\" value=\"아래로\" onclick=\"movedown('cma_text[]','cma_num[]','cma_text_value','tr_id'," + (new_row_num + n) + ");\" />\n";
        tag += "<input type=\"button\" value=\"위로\" onclick=\"moveup('cma_text[]','cma_num[]','cma_text_value','tr_id'," + (new_row_num + n) + ");\" />\n";
        tag += "<input type=\"button\" value=\"삭제\" onclick=\"deleterow('cma_text[]','cma_num[]','cma_text_value','tr_id'," + (new_row_num + n) + ");\" />\n";
        tag += "</td>\n";
        tag += "</tr>\n";

        $("#" + obj).append(tag);

        new_row_num++;
        // addBasicData('cma_text[]','cma_text_value');

        document.getElementById("item_name_input").value = item_name_input;



    }


    function moveup(ctext, cnum, tval, obj, n) {
        $("#" + obj + n).insertBefore($("#" + obj + n).prev());
        checkTableForm(ctext, cnum, tval, obj, n, 'up');
    }

    function movedown(ctext, cnum, tval, obj, n) {
        $("#" + obj + n).insertAfter($("#" + obj + n).next());
        checkTableForm(ctext, cnum, tval, obj, n, 'down');
    }

    function deleterow(ctext, cnum, tval, obj, n) {
        $("#" + obj + n).remove();
        $("#num_rows").val(--num_rows);
        addBasicData(ctext, tval);
    }

    // function addBasicData(ctext,tval) {
    //     var i, tag=[];
    //     var tmp_text = document.getElementsByName(ctext);
    //     var tot = tmp_text.length;
    //     for (i = 0; i < tot; i++) {
    //         tag[i] = tmp_text[i].value;
    //     }
    //     document.getElementById(tval).value = tag.join(",");
    // }

    function checkTableForm(ctext, cnum, tval, obj, n, stype) {
        var i, tag = [];
        var tmp_text = document.getElementsByName(ctext);
        var tmp_num = document.getElementsByName(cnum);
        var tot = tmp_text.length;
        tot = (stype == "delete") ? (tot - 1) : tot;
        for (i = 0; i < tot; i++) {
            document.getElementById(obj + tmp_num[i].value).style.backgroundColor = "#fff";
            tag[i] = tmp_text[i].value;
        }
        document.getElementById(obj + n).style.backgroundColor = "#ffff80";
        document.getElementById(tval).value = tag.join(",");
    }


    function post_test() {

        alert(document.getElementById("item_cnt").value);


        var item_name_arr = array('가','나','다','라');

        document.getElementById("item_array").value = item_name_arr;

        // $(function () {
        //     var frm = $(document.sample);
        //
        //     var item_count = 10;
        //
        //     var dat = JSON.stringify(frm.serializeArray());
        //
        //     alert("I am about to POST this:\n\n" + dat);
        //
        //     // alert(JSON.stringify(eg_json));
        //
        //     // var xhr = new XMLHttpRequest();
        //     // xhr.open('GET', frm.action, true);
        //     // xhr.send();
        //
        //     // frm.post();
        //
        //     $.post(
        //         'deliveryOrder',
        //         dat,
        //         function (data) {
        //             alert("Response: " + data);
        //         }
        //     );
        // });

    }

</script>



<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function (data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if (data.userSelectedType === 'R') {
                    //법정동명이 있을 경우 추가한다.
                    if (data.bname !== '') {
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if (data.buildingName !== '') {
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' (' + extraAddr + ')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('receiver_zip_code').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('receiver_zip_address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('receiver_address_detail').focus();
            }
        }).open();
    }
</script>

@section('content')
    <div>
        <form method="POST" action="{{url('businessUser/deliveryOrder')}}" name="sample">
            @csrf

            <div>
                <div class="card">
                    <div class="card-header">{{ __('배송정보') }}</div>
                    <div class="card-body">
                        <table class="table small">
                            <td class="text-center">일반/목록</td>
                            <td>
                                <label class="radio-inline"><input name="customs_type" type="radio" value="N" checked="checked"/> 일반통관</label>
                                <label class="radio-inline"><input name="customs_type" type="radio" value="Y"/>목록통관</label>
                            </td>
                            <td class="text-right align-middle">출고박스수</td>
                            <td>
                                <input class="text-sm-right" id="box_count" name="box_count" type="text" value="1"> Box
                            </td>
                            <td class="text-center align-middle">실무게</td>
                            <td>
                                <input class="text-sm-right" id="weight" name="weight" type="text" size="10"> Kg
                            </td>
                            <td class="text-center align-middle">부피(가로)</td>
                            <td>
                                <input class="text-sm-right" id="width" name="width" type="text" size="10"> Cm
                            </td>
                            <td class="text-center align-middle">부피(세로)</td>
                            <td>
                                <input class="text-sm-right" id="length" name="length" type="text" size="10"> Cm
                            </td>
                            <td class="text-center align-middle">부피(높이)</td>
                            <td>
                                <input class="text-sm-right" id="height" name="height" type="text" size="10"> Cm
                            </td>
                        </table>
                    </div>

                    <div class="card-header">{{ __('송하인 정보') }}</div>
                    <div class="card-body">
                        <table class="table small">
                            <td class="text-right align-middle">송하인(영문)</td>
                            <td>
                                <input class="text-sm-left" id="sender_name" name="sender_name" type="text">
                            </td>
                            <td class="text-right align-middle">연락처</td>
                            <td>
                                <input class="text-sm-left" id="sender_tel" name="sender_tel" type="text">
                            </td>
                            <td class="text-right align-middle">업체주문번호</td>
                            <td>
                                <input class="text-sm-left" id="sender_mgt_id" name="sender_mgt_id" type="text">
                            </td>
                            <td class="text-right align-middle">주소</td>
                            <td>
                                <input class="text-sm-left" id="sender_address" name="sender_address" type="text">
                            </td>
                        </table>
                    </div>

                    <div class="card-header">{{ __('수령지 정보') }}</div>
                    <div class="card-body">
                        <table class="table small">
                            <tr>
                                <td class="text-right align-middle">이름</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_name" name="receiver_name" type="text">
                                </td>
                                <td class="text-right align-middle">영문이름</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_english_name" name="receiver_english_name" type="text">
                                </td>
                                <td class="text-right align-middle">핸드폰번호</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_mobile" name="receiver_mobile" type="text">
                                </td>
                                <td class="text-right align-middle">전화번호</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_tel" name="receiver_tel" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right align-middle">주소</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_zip_code" name="receiver_zip_code" type="text" size="10" readonly>
                                    <input type="button" class="btn btn-info btn-xs" onclick="execDaumPostcode()" value="우편번호 찾기">
                                </td>
                                <td>
                                    <input type="text" id="receiver_zip_address" name='receiver_zip_address' placeholder="주소" size="70" readonly>
                                </td>
                                <td colspan="6">
                                    <input type="text" id="receiver_address_detail" name='receiver_address_detail' placeholder="상세주소" size="70">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right align-middle">개인통관부호</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_id_info" name="receiver_id_info" type="text">
                                </td>
                                <td class="text-right align-middle">배송메모</td>
                                <td>
                                    <input class="text-sm-left" id="receiver_memo" name="receiver_memo" type="text">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-header">{{ __('상품 정보') }}
                        <input type="button" class="btn btn-info btn-xs" onclick="add_new_item('items',0)" value="추가">
                        <input type="hidden" id="item_cnt" name="item_cnt" value="0">
                        <input type="hidden" id="item_array" name="item_array" >
                    </div>
                    <div class="card-body" id="items">
                        <div class="form-text border">
                            <label>item_no : 1</label>
                            <input id="item_no_1" name="item_no[0]" value="0" hidden><br/>
                            <table class="table small">
                                <tr>
                                    <td class="text-right align-middle">상품명</td>
                                    <td>
                                        <input class="text-sm-left" id="item_name[0]" name="item_name[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">쉬핑네임</td>
                                    <td>

                                        <input class="text-sm-left" id="item_shipping_name[0]" name="item_shipping_name[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">제품URL</td>
                                    <td>
                                        <input class="text-sm-left" id="item_url[0]" name="item_url[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">브랜드/셀러</td>
                                    <td>
                                        <input class="text-sm-left" id="item_brand_name[0]" name="item_brand_name[0]" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right align-middle">HS CODE</td>
                                    <td>
                                        <input class="text-sm-left" id="item_hs_code[0]" name="item_hs_code[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">주문번호</td>
                                    <td>
                                        <input class="text-sm-left" id="item_mgt_id[0]" name="item_mgt_id[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">트래킹넘버</td>
                                    <td>
                                        <input class="text-sm-left" id="item_tracking_no[0]" name="item_tracking_no[0]" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right align-middle">단가(USD)</td>
                                    <td>
                                        <input class="text-sm-left" id="item_unit_price[0]" name="item_unit_price[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">수량</td>
                                    <td>
                                        <input class="text-sm-left" id="item_quantity[0]" name="item_quantity[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">색상(영문)</td>
                                    <td>
                                        <input class="text-sm-left" id="item_color[0]" name="item_color[0]" type="text">
                                    </td>
                                    <td class="text-right align-middle">사이즈(영문)</td>
                                    <td>
                                        <input class="text-sm-left" id="item_size[0]" name="item_size[0]" type="text">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div align="right">
                    <input type="button" class="btn btn-dark" value="취소">
                    <input type="submit" class="btn btn-primary" value="저장">
                    <input type="button" class="btn btn-primary" onclick="post_test()" value="post_test">
                    <input type="button" class="btn btn-primary" id="test_button" value="test_button">
                </div>

                <!-- 상품등록 popup -->
                {{--<div class="modal fade" id="addItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">--}}
                    {{--<div class="modal-dialog" role="document">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="modal-header">--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
                                            {{--aria-hidden="true">&times;</span></button>--}}
                                {{--<h4 class="modal-title" id="exampleModalLabel">상품등록</h4>--}}
                            {{--</div>--}}
                            {{--<div class="modal-body" style="width: 100%;">--}}
                                {{--<form>--}}
                                    {{--<div class="form-text">--}}
                                        {{--<label for="item_name" class="control-label">상품명</label>--}}
                                        {{--<input type="text" class="form-control" id="item_name" name="item_name">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-text">--}}
                                        {{--<label for="brand" class="control-label">브랜드</label>--}}
                                        {{--<input type="text" class="form-control" id="brand_name" name="brand_name">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-text">--}}
                                        {{--<label for="web_site" class="control-label">웹사이트</label>--}}
                                        {{--<input type="text" class="form-control" id="website" name="website">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-text" style="width: 50%; float:left">--}}
                                        {{--<label for="unit_price" class="control-label">단가</label>--}}
                                        {{--<input type="text" class="form-control" id="unit_price" name="unit_price">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-text" style="width: 50%; float:right">--}}
                                        {{--<label for="quantity" class="control-label">수량</label>--}}
                                        {{--<input type="text" class="form-control" id="quantity" name="quantity">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-text">--}}
                                        {{--<label for="hs_code" class="control-label">HS CODE</label>--}}
                                        {{--<input type="button" class="btn-default" value="검색">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                        {{--<label class="label-success">화장품[33]-목록통관</label>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                {{--<button type="button" class="btn btn-primary" onclick="add_new_row('items',0);"--}}
                                        {{--data-dismiss="modal">등록--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </form>
    </div>
@endsection
