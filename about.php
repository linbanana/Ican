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
  <style>
/*about.php*/

.aboutcontent{
    text-align: center;
}

.aboutcontent .container{
        padding: 40px;
        border-bottom: 1px solid rgb(226, 182, 94);
}


.aboutcontent .container .title{
        padding: 40px;
        font-size: 40px;
        text-align: center;
       /* -webkit -writing-mode: vertical-lr;
        writing-mode: vertical-lr;*/
}

.aboutcontent .container .photo{
        width: 100%;
        height: 0;
        //float: left;
        margin: 15px;
}

.aboutcontent .container .photo img{
        width: 300px;
        height: 300px;
        float: left;
        margin: 15px;
}

.aboutcontent .container p{
        padding: 10px;
        font-size: 18px;
        font-weight: 300;
        color: #000;
	    text-align: left;
        vertical-align: top;
       /* display: inline-block;*/
}
@media screen and (max-width: 1200px) {

    .aboutcontent .container{
        padding: 40px;
        border-bottom: 1px solid rgb(226, 182, 94);
    }


    .aboutcontent .container .title{
        padding: 40px;
        font-size: 40px;
        text-align: center;
       /* -webkit -writing-mode: vertical-lr;
        writing-mode: vertical-lr;*/
    }

    .aboutcontent .container p{
        padding: 10px;
        font-size: 18px;
        font-weight: 300;
        color: #000;
	    text-align: left;
        vertical-align: top;
       /* display: inline-block;*/
    }
}

@media screen and (max-width: 840px) {
    .aboutcontent .container{
        padding: 40px;
        border-bottom: 1px solid rgb(226, 182, 94);
    }


    .aboutcontent .container .title{
        padding: 40px;
        font-size: 30px;
        text-align: center;
       /* -webkit -writing-mode: vertical-lr;
        writing-mode: vertical-lr;*/
    }

    .aboutcontent .container p{
        padding: 10px;
        font-size: 18px;
        font-weight: 300;
        color: #000;
	    text-align: left;
        vertical-align: top;
       /* display: inline-block;*/
    }
}

@media screen and (max-width: 650px) {
    .aboutcontent .container{
        padding: 40px;
        border-bottom: 1px solid rgb(226, 182, 94);
        margin: auto;
    }


    .aboutcontent .container .title{
        padding: 40px;
        font-size: 30px;
        text-align: center;
       /* -webkit -writing-mode: vertical-lr;
        writing-mode: vertical-lr;*/
    }

    .aboutcontent .container p{
        padding: 10px;
        font-size: 18px;
        font-weight: 300;
        color: #000;
	    text-align: left;
        vertical-align: top;
       /* display: inline-block;*/
    }
    .aboutcontent .container .photo img{
        width:  50%;
        height:  50%;
        float: left;
        margin: 15px;
    }
}
/*about.php*/
  </style>
    <?php
        include("layouts/header.php");
    ?>
    <div class="aboutcontent" >
	   <div class="container">
        <div class="photo">
		    <img src="https://www.ciaotw.com/wp-content/uploads/2018/10/%E9%A3%AF%E5%BA%97%E5%A4%96%E8%A7%80JPG-498x600.jpg"></div>
        <div class="title"><strong>關於我們</strong></div><br/>
			
			<p>ican大飯店是地下2層，地上8層，並擁有198間時尚客房、15間專業的會議室、300人的國際會議廳、800人的會展大廳、暨3家頂級美饌中西式餐廳的精緻飯店。會館位於高雄新市政中心，坐擁最美麗的蓮池潭湖景，鄰近1,000公尺內計有高鐵左營站、高雄捷運站、左營火車站、國道出口、巨蛋球場、漢神百貨、新光三越。</p>
            

		    <p>ican的概念，是我們希望能夠以這個logo，提醒我們秉持不放棄的精神，並相信我們能夠做得到，不斷地前進，創造更好的作品!</p><br />
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