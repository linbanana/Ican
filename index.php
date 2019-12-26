<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link href="\css/ican.css" rel="stylesheet" />
    <script src="\scripts/jquery-3.4.1.min.js"></script>
    <!-- 環境建置 -->
    <title>ican</title>
</head>
<body>

    <?php
    include("layouts/header.php");
    ?>
    
    <div class="content">
        <!--Content部分(未改)-->
        <div class="welcome">
            <div class="container">
                <h3 id="ican-logo">I Can</h3>
                <h4 id="hotel-logo">大飯店</h4>
                <p align="left">I Can大飯店今年在小琉球全新開幕，給顧客不一樣的全新體驗，歡迎各位能蒞臨，您的到來使我們蓬蓽生輝，我們持續的新增不同的設施，並且招募與我們有共同理念的新成員，希望能帶給顧客更好的享受。I Can理念為努力、真誠、親切、熱忱，對待每一位顧客都以最高待遇服務，秉持著「真誠I Can心，服務最用心」的經營理念，提供顧客最高品質的産品，最親切細緻的服務，讓顧客有物超所值、賓至如歸的感受。</p>
            </div>
        </div>
        <div class="recommend">
            <div class="container">
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="txt">
                        <h3>誠摯的服務態度</h3>
                        <h3>親切的待人處事</h3>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                    </div>
                    <div class="txt">
                        <h3>提供免費WIFI</h3>
                        <h3>各項設施使用</h3>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                    </div>
                    <div class="txt">
                        <h3>全新客房</h3>
                        <h3>舒適享受</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="introducing">
            <div class="container">
                <div class="item">
                    <div class="pic">
                        <img src="/images/Christmas.svg">
                    </div>
                    <div class="txt">
                        <h2>聖誕節優待</h2>
                        <p>為了迎接熱鬧聖誕節、跨年倒數活動，各家飯店也推出搶手的好康專案，想開心出遊就趁早卡位吧！</p>
                        <a href="christmas.php">查看詳情</a>
                    </div>
                </div>
                <div class="item">
                    <div class="txt">
                        <h2>全新客房</h2>
                        <p>以「現代台灣」為靈感設計全新客房，牆面一系列台灣風景照定調房內主題，家具擺飾、整體色系皆互相呼應，打造現代摩登風格旅宿。六種色系區分房型，明亮自然光線映入，空間開闊舒適。房內皆配有頂級席夢思床墊與枕頭、TOTO多功能免治馬桶及專屬KOHLER浴缸。</p>
                        <a href="room.php">查看詳情</a>
                    </div>
                    <div class="pic">
                        <img src="/images/room/luxury-family.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <img src="/images/travel/map.jpg">
                    </div>
                    <div class="txt">
                        <h2>行程規劃系統</h2>
                        <p>自由行隨心所欲，完全可以按照自己的喜好去旅行。</p>
                        <a href="picktravel.php">查看詳情</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("layouts/footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="\scripts/umd/popper.min.js"></script>
    <script src="\scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="\scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>

</html>