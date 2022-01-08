<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Tomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('/public/customer/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/public/customer/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('/public/customer/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('/public/customer/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/public/customer/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/public/customer/css/custom.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="public/customer/css/font-awesome.min.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    {{-- <div class="loader_bg">
        <div class="loader"><img src="{{ asset('/public/customer/images/loading.gif" alt="#" /></div>
    </div> --}}
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="#"><img src="{{ asset('/public/customer/images/logo.png')}}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="http://localhost:8080/shopbandienthoai/">Home</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li><a href="#brand">Brand</a></li>
                                        <li><a href="#contactus">Contact Us</a></li>
                                        <li><a href="special.html">Cart<sup style="
                                                    border: 1px solid red;
                                                    border-radius: 50px;
                                                    background-color: white;
                                                    color: black;
                                                    padding: 2px;
                                        ">0</sup></a></li>
                                        <li class="last">
                                            <a href="#"><img src="{{ asset('/public/customer/images/search_icon.png')}}" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
      
            <div class="item active">
              <img src="{{ asset('/public/customer/images/banner.jpg')}}" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3>The shop 1</h3>
                <p>In here is always so much fun!</p>
              </div>
            </div>
      
            <div class="item">
              <img src="{{ asset('/public/customer/images/banner.jpg')}}" alt="Chicago" style="width:100%;">
              <div class="carousel-caption">
                <h3>The shop 2</h3>
                <p>Thank you!</p>
              </div>
            </div>
          
            <div class="item">
              <img src="{{ asset('/public/customer/images/banner.jpg')}}" alt="New York" style="width:100%;">
              <div class="carousel-caption">
                <h3>The slide 3</h3>
                <p>We love the Big Apple!</p>
              </div>
            </div>
        
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>

     <!-- modal -->
     <div class="modal-buy">
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialogs">
              
                <!-- Modal content-->
                <div class="modal-content" style="width:60em; margin: 2em auto;">
                  <div class="modal-header">
                      <h4 class="modal-title" style="color: black">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body" style="position: relative;
                  padding: 20px;
                  height: 30em;
                  overflow-y: scroll;">
                  <form id="form-buy" action="./bill/create" method="post">
                    @csrf
                   <div class="profile-cus">
                       <h3>Thông tin cơ bản</h3>
                    <table class="table">
                        <tr><td>Tên khách hàng:</td><td><input name="name" class="form-control" type="text" required></td></tr>
                        <tr><td>Số điện thoại khách hàng:</td><td><input name="phonenumber" class="form-control" type="text" required></td></tr>
                        <tr><td>Địa chỉ khách hàng:</td><td><input name="address" class="form-control" type="text" required></td></tr>
                    </table>
                   </div>
                   <div class="profile-product">
                    <h3>Thông tin sản phẩm</h3>
                        <table class="table">
                            <tr><td style="width:30em"><img class="modal-img"  src="https://padstore.vn/uploads/dong-iphone-nao-chup-anh-dep-nhat_1580889530.jpg" alt="">
                            </td><td>
                                <p> Màu sắc: <span class="colors"></span><input type="hidden" name="color" value="0" id="id_color">
                                    {{-- <span class="set-color bg-white not-available"></span>
                                    <span class="set-color  bg-warning"></span>  --}}
                                  </p>
                            <p>Dung lượng:  <span class="memorys"></span>  <input type="hidden" name="memory" value="0" id="id_memory">
                             {{-- <span class="memory bg-dark text-white" style="padding: 3px; 
                                border:1px solid black; border-radius: 2px" data-toggle="tooltip"
                                 title="xtra large">64G</span>
                             <span class="memory " style="padding: 3px; 
                                 border:1px solid black; border-radius: 2px" data-toggle="tooltip"
                                 title="xtra large">128G</span> --}}
                            </p>
                                <h3>Giá tiền: $<span id="money">999</span></h3>
                                <p>Bảo hành 12 tháng sau khi mua</p>
                        
                        
                        </td></tr>
                        
                        </table>

                   </div>
                
                  </div>
                  <div class="modal-footer"> 
                    <button type="submit" class="btn btn-default btn-buy" >Đặt mua</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div> 
                </form>
                </div>
                
              </div>
            </div>
            
          </div>


    </div>
    <!-- end modal -->

    <!-- brand -->
      @yield('content')

    <!-- end brand -->
    <!-- clients -->
    <!-- end clients -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 id="contactus">Contact us</h2>
                    </div>
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea form-control" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Số 3 Cầu Giấy, quận Cầu Giấy, thành phố Hà Nội </span>
                                <p>(+84) 62629999
                                    <br>webdemo@gmail.com</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    {{-- <script src="{{ asset('/public/customer/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/public/customer/js/popper.min.js')}}"></script>
    <script src="{{ asset('/public/customer/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/public/customer/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('/public/customer/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('/public/customer/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('/public/customer/js/custom.js')}}"></script>
    <!-- javascript --> --}}
    {{-- <script src="{{ asset('/public/customer/js/owl.carousel.js')}}"></script> --}}
</body>
<style>
    body {
        background: #eee
    }

    .wrapper {
        margin-top: 30px
    }

    .card {
        border: 1px solid #eee;
        cursor: pointer
    }

    .weight {
        margin-top: -65px;
        transition: all 0.5s
    }

    .weight small {
        color: #e2dede
    }

    .buttons {
        padding: 10px;
        background-color: #d6d4d44f;
        border-radius: 4px;
        position: relative;
        margin-top: 7px;
        opacity: 0;
        transition: all 0.8s
    }

    .dot {
        height: 14px;
        width: 14px;
        background-color: green;
        border-radius: 50%;
        position: absolute;
        left: 27%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 8px;
        color: #fff;
        opacity: 0
    }

    .cart-button {
        height: 48px
    }

    .cart-button:focus {
        box-shadow: none
    }

    .cart {
        position: relative;
        height: 48px !important;
        width: 50px;
        margin-right: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        padding: 11px;
        border-radius: 5px;
        font-size: 14px;
        transition: 1s ease-in-out;
        overflow: hidden
    }

    .cart-button.clicked span.dot {
        animation: item 0.3s ease-in forwards
    }

    @keyframes item {
        0% {
            opacity: 1;
            top: 30%;
            left: 30%
        }

        25% {
            opacity: 1;
            left: 26%;
            top: 0%
        }

        50% {
            opacity: 1;
            left: 23%;
            top: -22%
        }

        75% {
            opacity: 1;
            left: 19%;
            top: -18%
        }

        100% {
            opacity: 1;
            left: 14%;
            top: 28%
        }
    }

    .card:hover .buttons {
        opacity: 1
    }

    .card:hover .weight {
        margin-top: 10px
    }

    .card:hover {
        transform: scale(1.04);
        z-index: 2;
        overflow: hidden
    }


</style>
</html>