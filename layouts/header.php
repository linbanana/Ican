<!-- header -->
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
                <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true">
            </div>
            <div class="menu"> 
                <a href="\index.php">首頁</a>
                <a href="#">最新消息</a>
                <a href="\room.php">客房介紹</a>
                <a href="\about.php">關於我們</a>
                <a href="layouts/order/selet.php">線上訂房</a>
                <?php 
                if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
                ?>
                    <a href="\login.php">會員登入</a>
                    <a href="\join.php">會員註冊</a>
                <?php
                }else{
                ?>
                    <a href="?logout=true">登出系統</a>
                <?php 
                    if($_SESSION["memberLevel"]=="member"){
                ?>
                    <a href="\member.php">管理中心</a> 
                <?php                   
                    }else{
                ?>
                    <a href="\admin.php">管理中心</a>  
                <?php      
                    }
                ?>                    
                <?php
                }
                ?>
            </div>
        </div>
        <div class="toggle-btn"><i class="fa fa-bars"></i></div>
    </div>
    
    <!--側邊選單Sidebar--> 
    <div id="sidebar">
        <div class="logo">
            <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true">
        </div>
        <div class="closebtn">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        
        <div class="side-nav">
            <?php 
            if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
            ?>
                <a href="index.php">首頁</a>
            <?php
            }
            ?>
            <a href="#">最新消息</a>
            <a href="\room.php">客房介紹</a>
            <a href="\about.php">關於我們</a>
            <a href="layouts/order/selet.php">線上訂房</a>
            <?php 
            if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
            ?>
                <a href="\login.php">會員登入</a>
                <a href="\join.php">會員註冊</a>
            <?php
            }else{
            ?>
                <a href="?logout=true">登出系統</a>
            <?php 
                if($_SESSION["memberLevel"]=="member"){
            ?>
                <a href="\member.php">管理中心</a> 
            <?php                   
                }else{
            ?>
                <a href="\admin.php">管理中心</a>  
            <?php      
                }
            ?>                    
            <?php
            }
            ?>  
        </div>
    </div>
</header>
<!-- header -->