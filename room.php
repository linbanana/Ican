<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>客房介紹</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900|Lobster&display=swap');
        *{
            padding: 0;
            margin: 0;
            list-style: none;
            font-family: 'Noto Sans TC', sans-serif;
        }
        body{
            background-color: #000;
        }
        .room_info h1{
            font-size: 40px;
            text-align: center;
            color:#fff;
        }
        .room_info .container{
            max-width: 1200px;
            width: 85%;
            margin: auto;
        }
        .room_menu{
            text-align: center;
            padding: 30px 0;
            border-bottom: 1px solid #fff;
        }
        .room_menu a{
            display:inline-block;
            width:150px;
            padding: 10px 0;
            font-size: 18px;
            margin: 10px 30px;
            text-decoration: none;
            text-align: center;
            background-color: rgb(64, 69, 100);
            color: rgb(0, 148, 74);
        }
        .room_menu a:hover{
            background-color: rgb(0, 148, 74);
            color: #fff;
        }
        .room_info .info{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 30px 0;
        }
        .room_info .room-type{
            width: 300px;
            margin: 20px;
            position: relative;
            overflow:hidden;
        }
        .room_info .room-type img{
            width: 100%;
            z-index: 0;
            transform:scale(1,1);
            transition: all .6s ease-out;
        }
        .room_info .room-type:hover img{
            transform:scale(1.2,1.2);
        }
        .room_info .room-type .txt{
            position: absolute;
            top: 0;
            bottom: 0;
            left : 0;
            right: 0;
            padding: 30px;
            background-color: rgba(0, 0, 0, .6);
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
        }
        .room_info .room-type:hover .txt{
            opacity: 1;
        }
        .room_info .room-type .txt p{
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: #fff;
            
        }
        .room-type p:after{
            content: '';
            display: block;
            width: 0%;
            height: 2px;
            margin: 10px 0;
            background-color: #ff0;
            transition: width .3s .3s;
        }
        .room-type:hover p::after{
            width: 100%;
        }
        .room_info .room-type .txt h3{
            text-align: center;
            font-size: 18px;
            color: #fff;
            text-decoration: underline;
            padding: 10px;
            
        }
        @media screen and (max-width: 1200px) {
            .room_info .room-type{
                width: 230px;
            }
        }
        @media screen and (max-width: 960px) {
            .room_info .room-type{
                width: 250px;
            }
            .room_info .info{
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <?php
        include("layouts/header.php");
    ?>
    
    <div class="room_info">
        <div class="container">
            <h1>客房簡介</h1>
            <div class="room_menu">
                <nav>
                    <a href="#">房型總覽</a>
                    <a href="#">單人/雙人客房</a>
                    <a href="#">四人家庭房</a>
                    <a href="#">套房</a>
                </nav>
            </div>
            <div class="info">
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=1">    
                        <div class="txt">                       
                            <p>漫威主題客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=2">    
                        <div class="txt">                       
                            <p>迪士尼主題客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=3">    
                        <div class="txt">                       
                            <p>海洋世界主題客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=4">    
                        <div class="txt">                       
                            <p>星空主題客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=5">    
                        <div class="txt">                       
                            <p>埃及主題客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=6">    
                        <div class="txt">                       
                            <p>羅馬主題客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=7">    
                        <div class="txt">                       
                            <p>歐式客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=8">    
                        <div class="txt">                       
                            <p>和式客房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=9">    
                        <div class="txt">                       
                            <p>經濟家庭房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=10">    
                        <div class="txt">                       
                            <p>豪華家庭房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=11">    
                        <div class="txt">                       
                            <p>商務套房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
                <div class="room-type">
                    <a href="#">
                        <img src="https://picsum.photos/400/300/?random=12">    
                        <div class="txt">                       
                            <p>總統套房</p>
                            <h3>查看介紹</h3>
                        </div>
                    </a>
                </div>
            </div>



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