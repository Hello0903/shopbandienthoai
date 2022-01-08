@extends('view_customer.layout_cus')
@section('content')
    <div class="brand" id="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row g-1">
                   {{-- {{print_r($data)}} --}}
                   {{-- call js to redirect website --}}
                     @foreach ($data as $item)
                        <div class="col-3" style="with:20%">
                            <div class="card p-3">
                                <div class="text-center" data-id="{{$item['id']}}"> <img
                                        src="{{$item['anh']}}" style="width: 100%; height:16em"> </div>
                                <div class="product-details"> <span class="font-weight-bold d-block">${{$item['giatien']}}</span>
                                    <span>{{$item['ten']}}</span>
                                    <div class="buttons d-flex flex-row">
                                        <div class="cart"><i class="fa fa-shopping-cart"></i></div>
                                        <button data-id="{{$item['id']}}" class="btn btn-success cart-button btn-block" data-toggle="modal" data-target="#myModal"><span
                                                class="dot">1</span>Buy now </button>
                                    </div>
                                    {{-- <div class="weight"> <small>1 piece 2.5kg</small> </div> --}}
                                </div> 
                            </div>
                        </div>
                    @endforeach  

                </div>
            </div>

            <div class="col-md-12">
                <a class="read-more">See More</a>
            </div>

        </div>
        <script>
            $(".buttons").click(function(){
            
               
            $.ajax({
        type: "GET",
        url: 'http://localhost:8080/shopbandienthoai/api/product/'+$(this).find('button').data('id'),
        success: function(dulieu)
        {
            var data = JSON.parse(dulieu);
          console.log(data['product']); // show response from the php script.
        // show html in modal
        $('.modal-title').html("Mua sản phẩm: "+ data['product']['ten']);
            var anh = data['color'][0]['anh'];
            console.log(anh);
            $(".modal-img").attr('src',anh);
            var str = "";
            let count = 0
            var sub = "";
            for(let i = 0 ; i < data['color'].length; i++){
                if(count == 0) {sub = "not-available";
                                $('#id_color').val(data['color'][i]['id_mau']) }
                str += "<span class='set-color "+data['color'][i]['id_mau']+
                " "+ sub+"' data-id='"+data['color'][i]['anh']+"' data-color='"+data['color'][i]['id_mau']+"')></span>";
                count++;
                sub = "";
                console.log()
            }
            $('.colors').html(str);
            var memorys = "";
            count = 0;
            sub = "";
            for(let i = 0 ; i < data['memory'].length; i++){
                if(count == 0) {sub = "bg-dark text-white"; 
                                $('#money').html(data['memory'][i]['giatien'])
                                $('#id_memory').val(data['memory'][i]['dungluong']) }
                memorys += "<span class='memory "+sub+"' style='padding: 3px;"+
                            "border:1px solid black; border-radius: 2px; margin-left:1em' data-toggle='tooltip'"+
                            "  title='xtra large' data-id='"+data['memory'][i]['giatien']+"'"+
                             " data-memory='"+data['memory'][i]['dungluong']+"'>"+data['memory'][i]['dungluong']+"G</span>";
                            count++;
                            sub = "";
            }
            $('.memorys').html(memorys);

            $('.set-color').click(function(){
                //  alert($(this).data('id'));
                $('.modal-img').attr('src',$(this).data('id'));
                $(".colors").find('.set-color').removeClass('not-available');
                $(this).addClass('not-available');
                $('#id_color').val($(this).data('color'));
            })
            $('.memory').click(function(){
                 $('.memorys').find('.memory').removeClass('bg-dark text-white');
                 $(this).addClass('bg-dark text-white');
                 $('#money').html($(this).data('id'));
                 $('#id_memory').val($(this).data('memory'));

            })
         }
    }); 

            })
            $('.btn-buy').click(function(){
            //    $('#form-buy').submit();

            })
            $(".text-center").click(function(){
                alert('redirect click');
                window.location='http://localhost:8080/shopbandienthoai/product_detail/'+$(this).data('id')+'/#pic-1';
            })

       


        </script>
    @endsection
