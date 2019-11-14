<!-- footer -->    
<footer>
    <div class="container">
    <div class="row justify-content-start">
        <div class="logo  col-sm">
            <div class="logo-img">
                <img src="images/logo.png"><br>
                <!--<?php/*
                    date_default_timezone_set("Asia/Taipei");
                    echo '<div id="time" style="font-size: 18px; width: 250px;"></div>
        <script type="text/javascript">
            var dayNames = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
                function get_obj(time){
                    return document.getElementById(time);
                }
                var ts='.(round(microtime(true)*1000)).';
                function getTime(){
                    var t=new Date(ts);
                    with(t){
                        var _time="台灣時間："+getFullYear()+"-" + (getMonth()+1)+"-"+getDate()+"<br>" + (getHours()<10 ? "0" :"") + getHours() + ":" + (getMinutes()<10 ? "0" :"") + getMinutes() + ":" + (getSeconds()<10 ? "0" :"") + getSeconds() + "&emsp;" + dayNames[t.getDay()];
                    }
                    get_obj("time").innerHTML=_time;
                    setTimeout("getTime()",1000);
                    ts+=1000;
                }
                getTime();
        </script>';*/
                ?>   -->               
            </div>                
        </div>
        
        <div class="contact-info  col-sm">
            <div class="logo-font">
                <h3 id="ican-logo">I Can</h3>
                <h4 id="hotel-logo">大飯店</h4>
            </div>
            <hr size="1">
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
        <div class="social-link  col-sm">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <div class="item">
                <hr size="1">
                <p>Copyright © 2019 - <?php echo date("Y")?> by ican開發團隊</p>
            </div>
        </div>
    </div>
    </div>
    
    <a id="back-to-top" href="" class="btn btn-primary btn-lg back-to-top fa fa-angle-up" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>    
</footer>
<!-- footer -->   