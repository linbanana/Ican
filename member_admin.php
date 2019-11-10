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
    <title>ican</title>
</head>
<body>

    <?php
        include("layouts/header.php");
    ?>
 <div class="admincontent" id="wrapper">
<div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="images/logo.png">
            </div>
            <ul class="list-group list-group-flush ">
                <!--py-2於RWD有BUG -->
                <!--限時優惠 -->
                <li><a href="#" class="list-group-item py-2 list-group-item-action">會員管理</a>
                    <ul>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">權限設定</a></li>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">訂房資訊</a></li>
                    </ul>
                </li>
                <!--居家生活 -->
                <li><a href="#" class="list-group-item py-2 list-group-item-action">測試</a>
                    <ul>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">留言</a>
                            <ul>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">一般</a></li>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">公司行號</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">測試2</a>
                            <ul>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">小測試1</a></li>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">小測試2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                
            </ul>
        </div>

        <button class="btn btn-primary" id="menu-toggle">
                管<br>
                理<br>
                中<br>
                心              
        </button>
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