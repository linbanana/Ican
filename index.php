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
                <p>I Can大飯店今年在高雄全新開幕，給顧客不一樣的全新體驗，歡迎各位能蒞臨，您的到來使我們蓬蓽生輝，我們持續的新增不同的設施，並且招募與我們有共同理念的新成員，希望能帶給顧客更好的享受。I Can理念為努力、真誠、親切、熱忱，對待每一位顧客都以最高待遇服務，秉持著「真誠I Can心，服務最用心」的經營理念，提供顧客最高品質的産品，最親切細緻的服務，讓顧客有物超所值、賓至如歸的感受。</p>
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
                        <img src="https://picsum.photos/600/400/?random=1">
                    </div>
                    <div class="txt">
                        <h2>聖誕節優待</h2>
                        <p>檢察官今日下午會同法醫相驗，檢視大體頭部有明顯外傷，美國籍男子涉嫌過失致死罪嫌，檢察官諭知交保新台幣20萬元，且限制出境出海，並同時命其交付護照及旅行文件以防止逃匿。</p>
                        <a href="#">查看詳情</a>
                    </div>
                </div>
                <div class="item">
                    <div class="txt">
                        <h2>全新客房</h2>
                        <p>美國籍男子David昨天拒絕夜間偵訊，今天在律師陪同下進行偵訊，下午移送屏東地檢署，步上偵防車前一度懊悔的說「extremely sorry！」</p>
                        <a href="#">查看詳情</a>
                    </div>
                    <div class="pic">
                        <img src="https://picsum.photos/600/400/?random=2">
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <img src="https://picsum.photos/600/400/?random=3">
                    </div>
                    <div class="txt">
                        <h2>完善租車系統</h2>
                        <p>據了解，David當發現飛機在視線中已無法找尋，不見了就開始尋找，結果飛機竟撞死了人，令他驚慌失措，根本就沒料想到會發生如此憾事。</p>
                        <a href="#">查看詳情</a>
                    </div>
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