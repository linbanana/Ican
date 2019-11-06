<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="css/ican.css" rel="stylesheet" />
    <title>I CAN</title>

    <style>
        /*@import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");*/
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900|Lobster&display=swap');
        *{
            padding: 0;
            margin: 0;
            font-family: 'Noto Sans TC', sans-serif;
        }
        body{
            background-color: #FFEBC2;
            transition: transform .5 ease;
        }              

    }
</style>
</head>
<body>
    <header>
        <!--背景輪播Carousel-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/900/500/?random=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/900/500/?random=2" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/900/500/?random=3" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!--Logo跟選單-->
        
        <div class="header-menu">
            <div class="container">
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="menu">
                    <a href="#">最新消息</a>
                    <a href="#">客房介紹</a>
                    <a href="#">關於我們</a>
                    <a href="#">聯絡我們</a>
                    <a href="#">線上訂房</a>
                    <a href="#">會員登入</a>
                </div>
            </div>
            <div class="toggle-btn"><i class="fa fa-bars"></i></div>
        </div>
        
        <!--側邊選單Sidebar-->
        
        
        <div id="sidebar">
            <div class="logo">
                <img src="images/logo.gif" alt="com.logo">
            </div>
            <div class="closebtn">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            
            <div class="side-nav">
                <a href="#">最新消息</a>
                <a href="#">客房介紹</a>
                <a href="#">關於我們</a>
                <a href="#">聯絡我們</a>
                <a href="#">線上訂房</a>
                <a href="#">會員登入</a>
            </div>
        </div>
    </header>

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
    
    <!--Footer部分(未改)-->    
    <footer>
        <div class="container">
            <div class="logo">
                <div class="logo-img">
                    <img src="images/logo.gif">
                </div>
                <div class="logo-font">
                    <h3>I Can</h3>
                    <h4>大飯店</h4>
                </div>
            </div>
            
            <div class="contact-info">
                <div class="item">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>地址:</p><p>80144高雄市民生二路202號</p>
                </div>
                <div class="item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>電話:</p><p>(07)1234567</p>
                </div>
                <div class="item">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>E-mail:</p><p>qaz1234567@gmail.com</p>
                </div>
            </div>
            <div class="social-link">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
        
        <a id="back-to-top" href="" class="btn btn-primary btn-lg back-to-top fa fa-angle-up" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        (function(){
            /*漢堡選單開跟關Sidebar/On/Off*/
            var bodyEl = $('body');
            $(".toggle-btn").on('click', function(e) {
                bodyEl.toggleClass('active-nav');
                e.preventDefault();
            });
            $(".closebtn").on('click', function(e) {
                bodyEl.toggleClass('active-nav');
                e.preventDefault();
            });

            $('#BackTop').click(function(){ 
                $('html,body').animate({scrollTop:0}, 333);
            });

            /*判斷輪軸往下後header-menu變色*/
            $(window).scroll(function() {
                if ( $(this).scrollTop() > 300 ){
                    $('#BackTop').fadeIn(222);
                    $('.header-menu').addClass('scrolldown');
                } else {
                    $('#BackTop').stop().fadeOut(222);
                    $('.header-menu').removeClass('scrolldown');
                }
            }).scroll();

            /*$(".txt").each(function(){
                var maxwidth = 100;//設置最多顯示的字數
                var text=$(this).text();

                if($(this).text().length > maxwidth){
                    $(this).text($(this).text().substring(0, maxwidth));
                    $(this).html($(this).html()+"..."+"<a href='###'> 點擊展開</a>");//如果字數超過最大字數，超出部分用...代替，並且在後面加上點擊展開的鏈接；

                };
                $(this).find("a").click(function(){
                    $(this).parent().text(text);//點擊“點擊展開”，展開全文
                })
            })*/
        })();


    </script>        
    



    


</body>
</html>