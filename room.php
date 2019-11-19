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
        *{
            padding: 0;
            margin: 0;
            list-style: none;
            font-family: 'Noto Sans TC', sans-serif;
        }
        body{
            background-color: #FFEBC2;
        }

        @media screen and (max-width: 1200px) {
            .room_info .room-type{
                width: 220px;
            }
            .room_info .room-type .txt{
                position: relative;
                padding: 10px 20px;
                background-color: transparent;
                align-items: center;
                opacity: 1;
            }
            .room_info .room-type .txt h3{
                font-size: 18px;
                font-weight: 500;
                color: #000;
            }
            .room-type h3:after{
                display: none;
            }
            .room_info .room-type .txt p{
                display: none;
            }
        }
        
        @media screen and (max-width: 760px) {
            .room_info .info{
                margin-top: 10px;
            }
            .room_menu{
                border-top: 1px solid rgb(226, 182, 94);
                border-bottom: none;
            }
        }
        @media screen and (max-width: 650px) {
            .room_info .container{
                width: 80%;
            }
            .room_info h1{
                font-size: 30px;
            }
            .room_menu{
                padding: 10px 0;
                margin: 10px 0;
            }
            .room_menu button{
                display:block;
                width:100%;
                margin: 10px 0;
            }
            .room_info .room-type{
                width:100%;
                margin: 20px 0;
            }
            .room_info .room-type .txt h3{
                font-size: 25px;
                font-weight: 500;
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
                <button class="room-active" onclick="filterSelection('all')">房型總覽</button>
                <button onclick="filterSelection('double')">單人/雙人客房</button>
                <button onclick="filterSelection('family')">四人家庭房</button>
                <button onclick="filterSelection('suite')">套房</button>
            </div>
            <div class="info">
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/marvel.jpg">    
                        <div class="txt">                       
                            <h3>漫威主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/disney.jpg">    
                        <div class="txt">                       
                            <h3>迪士尼主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/Ocean.jpg">    
                        <div class="txt">                       
                            <h3>海洋世界主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/shinestar.jpg">    
                        <div class="txt">                       
                            <h3>星空主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/egypt.jpg">    
                        <div class="txt">                       
                            <h3>埃及主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/rome.jpg">    
                        <div class="txt">                       
                            <h3>羅馬主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/Europe.jpg">    
                        <div class="txt">                       
                            <h3>歐式客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room-detail.php">
                        <img src="images/jp-style.jpg">    
                        <div class="txt">                       
                            <h3>和式客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type family">
                    <a href="room-detail.php">
                        <img src="images/parity-family.jpg">    
                        <div class="txt">                       
                            <h3>經濟家庭房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type family">
                    <a href="room-detail.php">
                        <img src="images/luxury-family.jpg">    
                        <div class="txt">                       
                            <h3>豪華家庭房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type suite">
                    <a href="room-detail.php">
                        <img src="images/business.jpg">    
                        <div class="txt">                       
                            <h3>商務套房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type suite">
                    <a href="room-detail.php">
                        <img src="images/president.jpg">    
                        <div class="txt">                       
                            <h3>總統套房</h3>
                            <p>查看介紹</p>
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
    <script type="text/javascript">
        $(document).ready(function (){
            $(".room_menu > button").click(function(){
                $(".room_menu > button").removeClass("room-active");
                $(this).addClass("room-active");
            })
            
            
        });
        
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("room-type");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                Remove_Class(x[i], "show");
                if (x[i].className.indexOf(c) > -1) Add_Class(x[i], "show");
            }
        }

        function Add_Class(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
        }

        function Remove_Class(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            /*for (i = 0; i < arr1.length; i++) {
                document.write(arr1[1]);
            }*/
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
            }
            element.className = arr1.join(" ");
        }
    </script>   
</body>
</html>