<?php
//執行登出動作
if (isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
    unset($_SESSION["loginMember"]);
    unset($_SESSION["memberLevel"]);
    header("Location: ../../index.php");
}
?>
<!-- header -->
<header>
    <!--背景輪播Carousel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://github.com/linbanana/ican/blob/master/images/header/header1.jpg?raw=true" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/linbanana/ican/blob/master/images/header/header2.jpg?raw=true" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/linbanana/ican/blob/master/images/header/header3.jpg?raw=true" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://github.com/linbanana/ican/blob/master/images/header/header4.jpg?raw=true" class="d-block w-100">
            </div>
        </div>
    </div>
    <!--Logo跟選單-->

    <div class="header-menu">
        <div class="container">
            <div class="logo">
                <img src="https://raw.githubusercontent.com/linbanana/ican/master/images/logo-white.png">
            </div>
            <div class="menu">
                <a href="/index.php">
                    <i class="fa fa-home" aria-hidden="true">&nbsp;首頁</i>
                </a>
                <a href="/news.php">
                    <i class="fa fa-newspaper-o" aria-hidden="true">&nbsp;最新消息</i>
                </a>
                <a href="/room.php">
                    <i class="fa fa-bed" aria-hidden="true">&nbsp;客房介紹</i>
                </a>
                <a href="/about.php">
                    <i class="fa fa-users" aria-hidden="true">&nbsp;關於我們</i>
                </a>
                <a href="/layouts/order/selet.php">
                    <i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;線上訂房</i>
                </a>
                <?php
                if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
                    ?>
                    <a href="/login.php">
                        <i class="fa fa-sign-in" aria-hidden="true">&nbsp;登入</i>
                    </a>
                    <a href="/join.php">
                        <i class="fa fa-user-plus" aria-hidden="true">&nbsp;註冊</i>
                    </a>
                <?php
                } else {
                    ?>
                    <a href="?logout=true">
                        <i class="fa fa-sign-out" aria-hidden="true">&nbsp;登出</i>
                    </a>
                    <?php
                        if ($_SESSION["memberLevel"] == "member") {
                            ?>
                        <a href="/layouts/member/member.php">會員中心</a>
                    <?php
                        } else {
                            ?>
                        <a href="/layouts/admin/admin.php">管理中心</a>
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
        <div class="closebtn">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>

        <div class="side-nav">
            <a href="/index.php">
                <i class="fa fa-home" aria-hidden="true">&nbsp;首頁</i>
            </a>
            <a href="/news.php">
                <i class="fa fa-newspaper-o" aria-hidden="true">&nbsp;最新消息</i>
            </a>
            <a href="/room.php">
                <i class="fa fa-bed" aria-hidden="true">&nbsp;客房介紹</i>
            </a>
            <a href="/about.php">
                <i class="fa fa-users" aria-hidden="true">&nbsp;關於我們</i>
            </a>
            <a href="/layouts/order/selet.php">
                <i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;線上訂房</i>
            </a>
            <?php
            if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
                ?>
                <a href="/login.php">
                    <i class="fa fa-sign-in" aria-hidden="true">&nbsp;登入</i>
                </a>
                <a href="/join.php">
                    <i class="fa fa-user-plus" aria-hidden="true">&nbsp;註冊</i>
                </a>
            <?php
            } else {
                ?>
                <a href="?logout=true">
                    <i class="fa fa-sign-out" aria-hidden="true">&nbsp;登出</i>
                </a>
                <?php
                    if ($_SESSION["memberLevel"] == "member") {
                        ?>
                    <a href="/layouts/member/member.php">管理中心</a>
                <?php
                    } else {
                        ?>
                    <a href="/layouts/admin/admin.php">管理中心</a>
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