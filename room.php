<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>客房介紹</title>
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
                    <a href="room_details.php">
                        <img src="images/room/marvel.jpg">
                        <div class="txt">
                            <h3>漫威主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/disney.jpg">
                        <div class="txt">
                            <h3>迪士尼主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/Ocean.jpg">
                        <div class="txt">
                            <h3>海洋世界主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/shinestar.jpg">
                        <div class="txt">
                            <h3>星空主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/egypt.jpg">
                        <div class="txt">
                            <h3>埃及主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/rome.jpg">
                        <div class="txt">
                            <h3>羅馬主題客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/Europe.jpg">
                        <div class="txt">
                            <h3>歐式客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type double">
                    <a href="room_details.php">
                        <img src="images/room/jp-style.jpg">
                        <div class="txt">
                            <h3>和式客房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type family">
                    <a href="room_details.php">
                        <img src="images/room/parity-family.jpg">
                        <div class="txt">
                            <h3>經濟家庭房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type family">
                    <a href="room_details.php">
                        <img src="images/room/luxury-family.jpg">
                        <div class="txt">
                            <h3>豪華家庭房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type suite">
                    <a href="room_details.php">
                        <img src="images/room/business.jpg">
                        <div class="txt">
                            <h3>商務套房</h3>
                            <p>查看介紹</p>
                        </div>
                    </a>
                </div>
                <div class="room-type suite">
                    <a href="room_details.php">
                        <img src="images/room/president.jpg">
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

    <script type="text/javascript">

    </script>

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