@extends('view_customer.layout_cus')

@section('content')

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{ $color[0]->anh }}" alt="">
                            </div>
                            {{-- <div class="tab-pane" id="pic-2"><img
                                    src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg"
                                    alt="Học thiết kế web bán hàng Online">
                            </div>
                            <div class="tab-pane" id="pic-3"><img
                                    src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg"
                                    alt="Học thiết kế web bán hàng Online">
                            </div>
                            <div class="tab-pane" id="pic-4"><img
                                    src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg"
                                    alt="Học thiết kế web bán hàng Online">
                            </div>
                            <div class="tab-pane" id="pic-5"><img
                                    src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg"
                                    alt="Học thiết kế web bán hàng Online">
                            </div> --}}
                        </div>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{ $product->ten }}</h3>
                        {{-- <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div> <span class="review-no">123 đánh giá</span>
                        </div> --}}
                        <p class="product-description">{{$product->thongso}}</p>
                        <h4 class="price" data-id="{{ $memory[0]->giatien }}">Giá tiền: {{ $memory[0]->giatien }}</h4>
                        {{-- <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87
                                bình chọn)</strong>
                        </p> --}}
                        <h5 class="sizes">Dung lượng:
                            <?php $j = 0?>
                            @foreach ($memory as $item)
                                <span class="size <?php if($j==0) echo "bg-secondary text-white"; $j++?>" data-toggle="tooltip"
                                    title="small" style="border: 1px solid black" data-id="{{ $item->giatien }}">{{ $item->dungluong }}G</span>
                            @endforeach
                            {{-- <span class="size" data-toggle="tooltip"
                                title="medium">m</span> <span class="size" data-toggle="tooltip"
                                title="large">l</span> <span class="size" data-toggle="tooltip"
                                title="xtra large">xl</span> --}}
                        </h5>
                        <h5 class="colors">Màu: 
                            <?php $i = 0 ?>
                            @foreach ($color as $item)
                                </span> <span class="{{ $item->id_mau }}
                                    <?php if($i == 0) echo "not-available"; $i++?>
                                     set-color" data-toggle="tooltip"
                                    style="border: 1px solid black" data-id='{{$item->anh}}'>
                            @endforeach
                            {{-- <span class="color orange not-available" data-toggle="tooltip"
                                title="Not In store"></span> <span class="color green"></span> <span
                                class="color blue"></span> --}}
                        </h5>
                        <div class="action"> <a href="#" target="_blank"> <button
                                    class="add-to-cart btn btn-default" type="button">MUA NGAY</button> </a> <a href="#"
                                target="_blank"> <button class="like btn btn-default" type="button"><span
                                        class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
        }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
            cursor: pointer;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }

        .card {
            margin-top: 0px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;
        }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title,
        .price,
        .sizes,
        .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }

        .checked,
        .price span {
            color: #ff9f1a;
        }

        .product-title,
        .rating,
        .product-description,
        .price,
        .vote,
        .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart,
        .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }

        .add-to-cart:hover,
        .like:hover {
            background: #b36800;
            color: #fff;
            text-decoration: none;
        }

        .not-available {
            text-align: center;
            line-height: 2em;
        }

        .not-available:before {
            font-family: fontawesome;
            content: "\f00c";
            color: #fff;
        }

        .orange {
            background: #ff9f1a;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }

        .tooltip-inner {
            padding: 1.3em;
        }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".set-color").click(function() {
            // alert($(this).data('id'));
            var link = $(this).data('id');
            $("#pic-1").find('img').attr('src',link);
            $(".color").removeClass('not-available');
            $(this).addClass('not-available');
        });
        $(".size").click(function(){
            var money = $(this).data('id');
            $('.size').removeClass("bg-secondary text-white");
            $(this).addClass("bg-secondary text-white");
            $(".price").html("Giá tiền: "+ money);
            $(".price").attr('data-id',money);
        });
    </script>
@endsection
