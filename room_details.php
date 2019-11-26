<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900|Lobster&display=swap');
        *{
			padding: 0;
			margin: 0;
            list-style: none;
            font-family: 'Noto Sans TC', sans-serif;
		}
        .room_detail_content{
            background-color: burlywood;
            padding: 50px 0;
            
        }
        .room_carousel{
            padding:20px;
            background-color: #fff;
            width: 900px;
            margin: 50px auto;
        }
        .title{
            text-align: center;
        }
        .title h3{
            font-size: 50px;
            font-weight: 500;
            padding: 0;
            font-family: 'Noto Sans TC', sans-serif;
        }
        .title p{
            font-size: 30px;
            font-weight: 300;
            font-family: 'Lobster', cursive;
        }
        .room_deta{
            display: flex;
            width: 900px;
            margin: auto;
        }
        .price_deta{
            padding: 20px 0;
            width: 50%;
        }
        .room_faci{
            padding: 20px 0;
            width: 50%;
        }
        .room_deta h3{
            display: inline-block;
            color:rgb(247, 1, 1);
            font-family: 'Noto Sans TC', sans-serif;
            padding: 10px 0;
        }
        .room_deta h6{
            display: inline-block;
            font-family: 'Lobster', cursive;
            padding: 0 10px;
        }
        .room_deta p{
            font-size: 22px;
        }
        ul{
            margin-bottom: 0;
        }
        .icons li {
            margin: 5px 5px;
            display: inline-block;
            flex-wrap: wrap;
            vertical-align: top;
            width: 80px;
            background: rgba(255,255,255,.6);
            border-radius: 7px;
            padding: 5px 0 8px;
            text-align: center;
        }
        .icons li img {
            padding: 0 7px;
            margin: 0 auto;
            vertical-align: middle;
            width: 100%;
        }
        .icons li span {
            display: block;
            font-size: 14px;
            line-height: 20px;
        }
        .reservation{
            text-align: center;
            margin: 100px;
        }
        .reservation a{
            font-size: 25px;
            font-family: 'Noto Sans TC', sans-serif;
            font-weight: 500;
            text-decoration: none;
            background-color: transparent;
            color: red;
            border: 2px solid red;
            padding: 15px 20px;
        }
        .reservation a:hover{
            background-color: red;
            color: #fff;
            border: 2px solid transparent;
        }
        @media screen and (max-width: 1200px) {
            .title h3{
                font-size: 40px;
            }
            .title p{
                font-size: 30px;
            }
            .room_carousel{
                width: 660px;
                padding:10px; 
            }
            .room_deta{
                display: block;
                width: 660px;
            }
            .price_deta{
                width: 100%;
            }
            .room_faci{
                width: 100%;
            }
        }
        @media screen and (max-width: 960px) {
            .title h3{
                font-size: 35px;
            }
            .title p{
                font-size: 25px;
            }
            .room_carousel{
                width: 550px;
                padding:10px; 
            }
            .room_deta{
                display: block;
                width: 550px;
            }
            .price_deta{
                padding: 10px 0;
            }
            .room_faci{
                padding: 10px 0;
            }
        }
        @media screen and (max-width: 650px) {
            .title h3{
                font-size: 24px;
            }
            .title p{
                font-size: 18px;
            }
            .carousel-control-next{
                width: 45%;
                justify-content: flex-end;
                padding: 20px;
            }
            .carousel-control-prev{
                width: 45%;
                justify-content: flex-start;
                padding: 20px;
            }
            .room_carousel{
                width: 90%;
            }
            .room_deta{
                width: 90%;
            }
            .room_deta h3{
                font-size: 20px;
            }
            .room_deta h6{
                font-size: 10px;
            }
            .room_deta p{
                font-size: 18px;
            }
            .reservation{
                margin: 50px;
            }
            .reservation a{
                font-size: 20px;
                padding: 10px 15px;
            }
        }
    </style>
</head>

<body>
    <?php
        include("layouts/header.php");
    ?>
    <div class="room_detail_content">
        <div class="title">
            <h3>客房介紹</h3>
            <p>Guest Room</p>
        </div>
        <div class="room_carousel">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/600/400/?random=1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/600/400/?random=2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/600/400/?random=3" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/600/400/?random=4" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/600/400/?random=5" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="room_deta">
            <div class="price_deta">
                <h3>房價資訊</h3><h6>Room Price</h6>
                <p>平日：$1600   假日：$2200   定價：$4500 </p>
                <p>標準入住人數:2位</p>
                <p>平日:週日 ~ 週四</p>
                <p>假日:週六、連續假日</p>
                <p>定價:春節期間</p>
            </div>
            <div class="room_faci">
                <h3>房內設施</h3><h6>Room Facilities</h6>
                <div class="icons">
                    <ul>
                        <li>
                            <img src="images/room_details/r01.png" class="img-responsive">
                            <span>冷氣機</span>
                        </li>
                        <li>
                            <img src="images/room_details/r02.png" class="img-responsive">
                            <span>液晶電視</span>
                        </li>
                        <li>
                            <img src="images/room_details/r03.png" class="img-responsive">
                            <span>房內冰箱</span>
                        </li>
                        <li>
                            <img src="images/room_details/r04.png" class="img-responsive">
                            <span>吹風機</span>
                        </li>
                        <li>
                            <img src="images/room_details/r05.png" class="img-responsive">
                            <span>電熱水瓶</span>
                        </li>
                        <li>
                            <img src="images/room_details/r06.png" class="img-responsive">
                            <span>毛巾浴巾</span>
                        </li>
                        <li>
                            <img src="images/room_details/r07.png" class="img-responsive">
                            <span>牙膏牙刷</span>
                        </li>
                        <li>
                            <img src="images/room_details/r08.png" class="img-responsive">
                            <span>沐浴用品</span>
                        </li>
                        
                        <li>
                            <img src="images/room_details/s04.png" class="img-responsive">
                            <span>Wifi網路</span>
                        </li>
                        <li>
                            <img src="images/room_details/r10.png" class="img-responsive">
                            <span>淋浴</span>
                        </li>
                        <li>
                            <img src="images/room_details/r12.png" class="img-responsive">
                            <span>免費飲品</span>
                        </li>
                    </ul>
                </div>
                
            </div> 
            
        </div>
        <div class="reservation">
            <a href="#">立即訂房</a>
        </div>
    </div>
    
    <?php
        include("layouts/footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="scripts/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/umd/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>