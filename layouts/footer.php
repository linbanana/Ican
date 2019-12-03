<div class="clearfix"></div>
<!-- footer -->    
<footer>
    <div class="container">
    <div class="row justify-content-start">
        <div class="logo  col-sm">
            <div class="logo-img">
                <img src="https://raw.githubusercontent.com/linbanana/ican/master/images/logo-white.png">
        <?php
            date_default_timezone_set("Asia/Taipei");
            echo '<div id="time"></div>
        <script type="text/javascript">
            var dayNames = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
                function get_obj(time){
                    return document.getElementById(time);
                }
                var ts='.(round(microtime(true)*1000)).';
                function getTime(){
                    var t=new Date(ts);
                    with(t){
                        var _time="台灣時間：" + getFullYear() + "-" + (getMonth()+1<10 ? "0" :"") + (getMonth()+1) + "-" + (getDate()<10 ? "0" :"") + getDate() + "<br>" + dayNames[t.getDay()] + "&emsp;&emsp;" + (getHours()<10 ? "0" :"") + getHours() + ":" + (getMinutes()<10 ? "0" :"") + getMinutes() + ":" + (getSeconds()<10 ? "0" :"") + getSeconds();
                    }
                    get_obj("time").innerHTML=_time;
                    setTimeout("getTime()",1000);
                    ts+=1000;
                }
                getTime();
        </script>';
        ?>               
            </div>
            <hr size="1">              
        </div>
        
        <div class="contact-info  col-sm">
            <div class="item">
                <i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i>
                <p>929屏東縣琉球鄉復興路84號</p>
                <iframe src="https://www.google.com/maps/embed?pb=!4v1575217147413!6m8!1m7!1sxhGz2yiwCRsjKe_94v1URg!2m2!1d22.34486996193625!2d120.3707131741897!3f132.97!4f3.239999999999995!5f0.7820865974627469" width="auto" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="item">
                <i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>
                <p>
                    <a href="mailto:qaz1234567@gmail.com">qaz1234567@gmail.com</a>
                </p>
            </div>
            <div class="item">
                <i class="fa fa-phone" aria-hidden="true">&nbsp;</i>
                <p>
                <a href="tel:(08)1234567">(08)1234567</a>
                </p>
            </div>
            <hr size="1">
        </div>
        <div class="social-link  col-sm">
            <a href="#">
                <i class="fa fa-facebook-official" id="facebook" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter" id="twitter" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-instagram" id="instagram" aria-hidden="true"></i>
            </a>
            <div class="item">
                <p>Copyright © 2019 - <?php echo date("Y")?> by ican開發團隊</p>
            </div>
            <hr size="1">
        </div>
    </div>
    </div>
    
    <a id="back-to-top" href="" class="btn btn-primary btn-lg back-to-top fa fa-angle-up" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>    
</footer>
<!-- footer -->   