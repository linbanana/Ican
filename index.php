<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="css/ican.css" rel="stylesheet" />
    <!-- w3 js -->
    <script src="Scripts/w3.js"></script>
    <!-- w3 js -->
    <title>I CAN</title>
    <style>
        /*@import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");*/
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900|Lobster&display=swap');

        
    @media screen and (max-width: 1200px) {
        .header-menu .menu a{
            font-size: 20px;
            padding: 10px;
        }
    }

    @media screen and (max-width: 960px) {
        .header-menu .menu a{
            font-size: 18px;
            padding: 10px;
        }
    }

    @media screen and (max-width: 840px) {
        .header-menu .menu{
            display: none;
        }
        .header-menu .container{
            padding: 50px;
        }
        .header-menu .logo{
            width: 80px;
            position: fixed;
            top: 30px;
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
            /*非header*/
            .col-sm-4{
                text-align: center;
            }
            .card{
                margin: 20px auto;
            }
    }
    @media screen and (max-width: 600px) {  
        .header-menu .logo{
            width: 50px;
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
            <div class="toggle-btn" onclick="toggleSidebar()"><i class="fa fa-bars"></i></div>
        </div>
        
        <!--側邊選單Sidebar-->
        
        
        <div id="sidebar">
            <div class="logo">
                <img src="images/logo.gif" alt="com.logo">
            </div>
            <div class="closebtn" onclick="toggleSidebar()">
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
            <div class="item">
                <div class="icon">
                    <i class="fa fa-thumbs-up"></i>
                </div>
                <div class="txt">
                    誠摯的服務態度
                    親切的
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    
                </div>
                <div class="txt">
                    提供免費WIFI
                    各項設施使用
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    
                </div>
                <div class="txt">
                    全新客房
                    舒適享受
                </div>
            </div>
        </div>
        <div class="introducing">
            <img src="https://picsum.photos/400/400/?random=1">
        </div>
        
           
        
            
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Column 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                    <h3>Column 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                    <h3>Column 3</h3>        
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
            </div>
        </div>
    </div>
        
    <!--Footer部分(未改)-->    
    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
        <a href="#">Back to top</a>
        </p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</body>
</html>