/*join.php*/
 function checkForm(){
    if(document.formJoin.m_username.value==""){     
        alert("請填寫帳號!");
        document.formJoin.m_username.focus();
        return false;
    }else{
        uid=document.formJoin.m_username.value;
        if(uid.length<6 || uid.length>12){
            alert( "您的帳號長度只能6至12個字元!" );
            document.formJoin.m_username.focus();
            return false;}
        if(!(uid.charAt(0)>='a' && uid.charAt(0)<='z')){
            alert("您的帳號第一字元只能為小寫字母!" );
            document.formJoin.m_username.focus();
            return false;}
        for(idx=0;idx<uid.length;idx++){
            /*if(uid.charAt(idx)>='A'&&uid.charAt(idx)<='Z'){
                alert("帳號不可以含有大寫字元!" );
                document.formJoin.m_username.focus();
                return false;}*/
            if(!(( uid.charAt(idx)>='a'&&uid.charAt(idx)<='z')||(uid.charAt(idx)>='0'&& uid.charAt(idx)<='9')||( uid.charAt(idx)=='_'))){
                alert( "您的帳號只能是數字,英文字母及「_」等符號,其他的符號都不能使用!" );
                document.formJoin.m_username.focus();
                return false;}
            if(uid.charAt(idx)=='_'&&uid.charAt(idx-1)=='_'){
                alert( "「_」符號不可相連 !\n" );
                document.formJoin.m_username.focus();
                return false;}
        }
    }
    if(!check_passwd(document.formJoin.m_passwd.value,document.formJoin.m_passwdrecheck.value)){
        document.formJoin.m_passwd.focus();
        return false;}  
    if(document.formJoin.m_name.value==""){
        alert("請填寫姓名!");
        document.formJoin.m_name.focus();
        return false;}
    if(document.formJoin.m_birthday.value==""){
        alert("請填寫生日!");
        document.formJoin.m_birthday.focus();
        return false;}
    if(document.formJoin.m_email.value==""){
        alert("請填寫電子郵件!");
        document.formJoin.m_email.focus();
        return false;}
    if(!checkmail(document.formJoin.m_email)){
        document.formJoin.m_email.focus();
        return false;}
    if(!checkphone(document.formJoin.m_phone)){
        document.formJoin.m_phone.focus();
        return false;}
    if(!checkbirthday(document.formJoin.m_birthday)){
    document.formJoin.m_birthday.focus();
    return false;}          
    return confirm('確定送出嗎？');
}
function check_passwd(pw1,pw2){
    if(pw1==''){
        alert("密碼不可以空白!");
        return false;}
    for(var idx=0;idx<pw1.length;idx++){
        if(pw1.charAt(idx) == ' ' || pw1.charAt(idx) == '\"'){
            alert("密碼不可以含有空白或雙引號 !\n");
            return false;}
        if(pw1.length<6 || pw1.length>12){
            alert( "密碼長度只能6到12個字母 !\n" );
            return false;}
        if(pw1!= pw2){
            alert("密碼二次輸入不一樣,請重新輸入 !\n");
            return false;}
    }
    return true;
}
function checkmail(myEmail) {
    var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(filter.test(myEmail.value)){
        return true;}
    alert("電子郵件格式不正確");
    return false;
}

function checkphone(myphone) {
    var phonenum =/(^[0]{1}[9]{1}[0-9]{2}[0-9]{3}[0-9]{3}$)/
    if(phonenum.test(myphone.value)){
        return true;
    }
    alert("手機號碼格式不正確");
    return false;
}
/*join.php*/

/*header*/
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

    $('#back-to-top').click(function(){ 
        $('html,body').animate({scrollTop:0}, 333);
    });

    /*判斷輪軸往下後header-menu變色*/
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300 ){
            $('#back-to-top').fadeIn(222);
            $('.header-menu').addClass('scrolldown');
        } else {
            $('#back-to-top').stop().fadeOut(222);
            $('.header-menu').removeClass('scrolldown');
        }
    }).scroll();            
})();
/*header*/

/*admin*/
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#showsidebar").toggleClass("toggled");
 }
)
/*admin*/

/*footer*/
/*時間自動更新*/
$('#date').datetimepicker({
    format: 'yyyy-mm-dd',
    weekStart: 1,
    todayBtn:  true,
    autoclose: true,
    todayHighlight: true,
    startView: 2,
    minView: 2,
    forceParse: 0,
    locale:moment.locale('zh-tw'),
});
/*footer*/