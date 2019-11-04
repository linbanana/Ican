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
        
    /*Header*/   

        .carousel{
            margin-bottom: 3em;
        }

        /*LOGO跟選單*/
        .header-menu{
            position: fixed;
            top:0;
            left: 0;
            right: 0;
            transition: 1s;
            z-index: 1;
        }

        .header-menu.scrolldown{
            background-color: #fff;
            z-index: 10;
            transition: 1.5s;
        }
        .header-menu.scrolldown .menu a{
            color: #000;
            transition: 1.5s;
        }

        .header-menu .container{
            display: flex;
            justify-content:space-evenly;
            padding: 20px;
            align-items: center;
            
        }
        
        .header-menu .logo{
            width: 100px;
            
        }
        .header-menu .logo img{
            width: 100%;
        }
        .header-menu .menu {
          display: flex;
          margin: auto;
        }
        .header-menu .menu a{
            color: #fff;
            text-decoration: none;
            font-size: 23px;
            padding: 20px;
            font-weight: 500;
            transition: 1s;
        }
        .header-menu .menu a:hover{
            color: rgb(175, 5, 5);
            font-weight: 900;
        }
        /*LOGO跟選單*/

        /*側邊選單Sidebar*/
        #sidebar{
            position: fixed;
            top:0;
            right:0;
            width: 100%;
            height: 100%;
            background-color: #000;
            padding:20px 10px;
            transform: translateX(100%);
            transition: transform .5s ease;
            z-index: 11;
        }
        .active-nav #sidebar{
            transform: translateX(0);
        }
        .toggle-btn{
            font-size: 30px;
            color:#fff;   
            padding: 0 10px;
            position: fixed;
            top: 30px;
            right: 10px;
            z-index: 1;
        }
        .toggle-btn:hover{
            border: 2px solid #fff;
            border-radius: 10px;
        }    
        #sidebar .logo{
            width: 80px;
            position: absolute;
            top: 30px;
            left:30px;
        }
        #sidebar .logo img{
            width: 100%;
        }
        #sidebar .closebtn{
            font-size: 30px;
            color: #fff;
            position: absolute;
            top: 30px;
            right:25px;
        }
        
        #sidebar .side-nav a{
            display: block;
            text-decoration: none;
            padding: 15px;
            color:#fff;
            font-size: 20px;
        }
        #sidebar .side-nav{
            margin-top: 150px;
            text-align: center;
        }
        #sidebar,.toggle-btn{
            display: none;
        }
        /*Sidebar*/

    /*Header*/

    /*Content*/    

        .content{
            margin-bottom: 3em;
        }
        .welcome{
            text-align: center;
        }
        .welcome .container{
            padding: 40px;
            border-bottom: 1px solid rgb(226, 182, 94);
        }
        .welcome h3{
            font-size: 40px;
            color: #5aecf7;
            display: inline-block;
            font-family: 'Lobster', cursive;
            text-shadow: 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183;
        }
        .welcome h4{
            font-size: 35px;
            color: #000;
            display: inline-block;
            font-weight: 700;
        }
        .welcome p{
            padding: 10px;
            font-size: 24px;
            font-weight: 300;
            color: #000;
            display: inline-block;
        }

        .recommend .container{
            display: flex;
            margin: 50px auto;
            padding: 75px 0 100px;
            border-bottom: 1px solid rgb(226, 182, 94);
        } 
        .recommend .container .item{
            width: 370px;
            margin: 0 15px;
            text-align: center;
            border: 10px solid #f8d187;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 10px 20px 50px #fcd896;
        }
        .recommend .item .txt{
            padding: 20px;
        }
        .recommend .item .icon{
            width: 150px;
            height: 150px;
            background-color: #fff;
            margin: -75px auto 0;
            font-size: 65px;
            line-height: 150px;
            border-radius: 50%;
            color:#f7bf58;
            position: relative;
        }
        .recommend .item .icon:before{
            content:'';
            position: absolute;
            width: 100%;
            height: 100%;
            border-top: 10px solid #f8d187;
            border-right: 10px solid #f8d187;
            border-bottom: 10px solid transparent;
            border-left: 10px solid transparent;
            left: 0px;
            top: 0px;
            border-radius: 50%;
            transform: rotate(-45deg);
        }
        .recommend .item h3{
            color:#f7bf58;
        }

        
        .introducing .container{
            padding: 100px 50px;
            margin: auto;
        }
        .introducing .item{
            margin-bottom: 80px;
            display: flex;
            align-items: center;
            font-family: 'Noto Sans TC', sans-serif;
        }
        .introducing .item .pic{
            width:55%;
            flex-shrink: 0;
        }
        .introducing .item .pic img{
            width:100%;
            vertical-align: middle;
        }
        .introducing .item .txt{
            width: 55%;
            padding: 50px 30px 80px;
            flex-shrink: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
        }
        .introducing .item > :first-child{
            margin-right: -10%;
        }
        .introducing .item:nth-child(1) .txt{
            background-color: rgba(240, 174, 193, .8);
        }
        .introducing .item:nth-child(2) .txt{
            background-color: rgb(42, 253, 208, .8);
        }
        .introducing .item:nth-child(3) .txt{
            background-color: rgb(254, 201, 121, .8);
        }
        .introducing .item .txt h2{
            font-weight: 900;
        }
        .introducing .item .txt p{
            font-weight: 300;
            font-size: 22px;
            margin-bottom: 30px;
        }
        .introducing .item .txt a{
            border: 1px solid #e08a09;
            font-size: 20px;
            font-weight: 500;
            color:#e08a09;
            padding: 10px 20px;
            text-decoration: none;
            position: absolute;
            right: 30px;
            bottom: 30px;
        }
        .introducing .item .txt a:hover{
            border: 1px solid #f7ab3a;
            color: #f7ab3a;
        }
    /*Content*/

    /*Footer*/
        footer {
            padding: 100px 0;
            color: #fff;
            text-align: center;
            background-color: #456;
            border-top: .05rem solid #e5e5e5;
        }
        footer .logo{
            text-align: left;
        }
        footer .logo-img{
            width: 100px;
            display: inline-block;
        }
        footer .logo-img img{
            width: 100%;
            vertical-align: middle;
        }
        footer .logo-font{
            display: inline-block;
            padding: 0 20px;
        }
        footer .logo-font h3{
            font-size: 40px;
            color: #5aecf7;
            display: inline-block;
            font-family: 'Lobster', cursive;
            text-shadow: 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183;
        }
        footer .logo-font h4{
            font-size: 35px;
            color: #fff;
            display: inline-block;
            font-weight: 700;
        }
        .contact-info{
            display: block;
            margin: 20px;
        }
        .contact-info i{
            display: inline-block;
            color: #fff;
            padding: 5px 10px;
            font-size: 20px;
        }
        .contact-info p{
            display: inline-block;
            font-size: 20px;
        }
        .social-link{
            text-align: right;
        }
        .social-link a{
            color: #fff;
            font-size: 30px;
            padding: 5px 10px;
            margin: 20px;
            
            text-decoration: none;
            
        }
        .social-link a:hover{
            color: rgb(255, 187, 0);
        }
        .back-to-top{
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 5;
        }
        
    /*Footer*/
        
    @media screen and (max-width: 1200px) {
        .header-menu .menu a{
            font-size: 20px;
            padding: 10px;
        }

        .recommend .item h3{
            font-size: 22px;
        }
        .introducing .item .txt{
            padding: 30px 30px 50px;
        }
        .introducing .item .txt h2{
            font-weight: 700;
            font-size: 20px;
        }
        .introducing .item .txt p{
            font-weight: 300;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .introducing .item .txt a{
            font-size: 16px;
            font-weight: 300;
            padding: 10px 20px;
            position: absolute;
            right: 20px;
            bottom: 20px;
        }
    }

    @media screen and (max-width: 960px) {
        .header-menu .menu a{
            font-size: 18px;
            padding: 10px;
        }
    }

    @media screen and (max-width: 840px) {
    /*Header*/ 
        .header-menu .menu{
            display: none;
        }
        .header-menu .container{
            padding: 50px;
        }
        
        .header-menu .logo{
            width: 70px;
            position: fixed;
            top: 20px;
            left: 30px;
        }
        .header-menu .logo img{
            width: 100%;
        }
        #sidebar,.toggle-btn{
            display: inherit;
        }   
        .header-menu.scrolldown .toggle-btn{
            color:#000;
        }
    /*Header*/ 

    /*content*/
        .welcome h3{
            font-size: 25px;
            color: #5aecf7;
            display: inline-block;
            font-family: 'Lobster', cursive;
            text-shadow: 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183, 0px 0px 10px #053183;
        }
        .welcome h4{
            font-size: 25px;
            color: #000;
            display: inline-block;
            font-weight: 700;
        }
        .welcome p{
            padding: 10px;
            font-size: 16px;
            font-weight: 300;
            color: #000;
            display: inline-block;
        }
        .content .recommend{
            display: none;
        }
        .introducing .item .txt{
            padding: 30px 30px;
        }
        .introducing .item .txt h2{
            font-weight: 700;
            font-size: 18px;
        }
        .introducing .item .txt p{
            font-weight: 300;
            font-size: 16px;
            margin-bottom: 0;
        }
        .introducing .item .txt a{
            font-size: 14px;
            font-weight: 300;
            padding: 0;
            text-decoration: solid;
            border: none;
            position: absolute;
            right: 30px;
            bottom: 10px;
        }
    /*Content*/
    /*Footer*/
        footer .logo-img{
            width: 80px;
        }
        footer .logo-font h3{
            font-size: 30px;
        }
        footer .logo-font h4{
            font-size: 25px;
        }
    /*Footer*/
    }
    @media screen and (max-width: 650px) {  
        .header-menu .logo{
            width: 60px;
        }
     
    /*Content*/   
        .welcome .container{
            padding: 10px;
        }
        .welcome h3{
            font-size: 18px;
        }
        .welcome h4{
            font-size: 18px;
        }
        .welcome p{
            padding: 10px;
            font-size: 12px;
        }
        
        .introducing .container{
            padding: 50px 0;
        }
        .introducing .item{
            margin-bottom: 50px;
            padding: 30px;
            display: block;
        }
        .introducing .item .pic{
            width: 100%;
        }
        .introducing .item .txt{
            width: 100%;
        }
        .introducing .item .txt h2{
            font-weight: 500;
            font-size: 16px;
        }
        .introducing .item .txt p{
            font-weight: 300;
            font-size: 12px;
            margin-bottom: 0;
        }
        .introducing .item .txt a{
            font-size: 12px;
            font-weight: 300;
            padding: 0;
            text-decoration: solid;
            border: none;
            position: absolute;
            right: 20px;
            bottom: 10px;
        }
    /*Content*/ 

    /*Footer*/
        footer {
            padding: 50px 0;
        }
        footer .logo{
            text-align: center;
        }
        footer .logo-img{
            width: 50px;
        }
        footer .logo-font h3{
            font-size: 25px;
        }
        footer .logo-font h4{
            font-size: 20px;
        }
        .contact-info{
            display: block;
            margin: 30px;
        }
        .contact-info i{
            display: inline-block;
            color: #fff;
            padding: 5px 10px;
            font-size: 16px;
        }
        .contact-info p{
            display: inline-block;
            font-size: 16px;
        }
        .social-link{
            text-align: center;
        }
        .social-link a{
            color: #fff;
            font-size: 20px;
            padding: 5px 10px;
            margin: 10px;
            
            text-decoration: none;
            
        }
        .social-link a:hover{
            color: rgb(255, 187, 0);
        }
    /*Footer*/
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
                    <img src="images/logo.gif" alt="com.logo">
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
                <h3>I Can</h3>
                <h4>大飯店</h4>
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