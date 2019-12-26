<input type="checkbox" name="" id="showsidebar" checked>
<div class="side-menu" onclick="sidemenu(this,'sidemenu')">
  <script type="text/javascript">

</script>
  <div class="sidebar-heading">
    <p>
      <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true" id="adminlogo">
      <i class="fa fa-user-md" aria-hidden="true">&nbsp;管理者：</i>
      <strong><?php echo "<font id='usernamestyle'>" . $mname . "</font>"; ?></strong><br>
      本次登入的時間為：<?php echo $mlogintime; ?>
    </p>
    <p align="center">
      <a href="updateadmin.php?id=<?php echo $mid; ?>">修改資料</a> | <a href="?logout=true">登出系統</a>
    </p>
  </div>
  <ul class="list-group list-group-flush ">
    <li>
      <a class="list-group-item py-2 list-group-item-action">後台管理系統</a>
      <ol>
        <i>
          <a href="queryorder.php" class="list-group-item py-2 list-group-item-action">訂單管理</a>
        </i>
        <i>
          <a href="../../room.php" class="list-group-item py-2 list-group-item-action">商品管理</a>
        </i>
        <i>
          <a href="updatenews.php" class="list-group-item py-2 list-group-item-action">最新消息發佈</a>
        </i>
        <i>
          <a href="adminmessage.php" class="list-group-item py-2 list-group-item-action">留言板</a>
        </i>
      </ol>
    </li>
    <li>
      <a class="list-group-item py-2 list-group-item-action">會員系統管理</a>
      <ol>
        <i>
          <a href="updateadmin.php?id=<?php echo $mid; ?>" class="list-group-item py-2 list-group-item-action">修改資料</a>
        </i>
        <i>
          <a href="queryadmin.php" class="list-group-item py-2 list-group-item-action">查詢、修改管理員資料</a>
        </i>
        <i>
          <a href="querymember.php" class="list-group-item py-2 list-group-item-action">查詢、修改會員資料</a>
        </i>
        <i>
          <a href="queryorder.php" class="list-group-item py-2 list-group-item-action">訂單查詢</a>
        </i>
        <i>
          <a href="../../bookingroom.php" class="list-group-item py-2 list-group-item-action">立即訂房</a>
        </i>
        <i>
          <a href="queryorder.php" class="list-group-item py-2 list-group-item-action">取消訂房</a>
        </i>
        <i>
          <a href="../../travel.php" class="list-group-item py-2 list-group-item-action">旅遊行程規劃</a>
        </i>
        <i>
          <a href="\租車/scooter.php" class="list-group-item py-2 list-group-item-action">機車租賃</a>
        </i>
      </ol>
    </li>
  </ul>
  <label for="showsidebar">
    <i class="fa fa-angle-right"></i>
  </label>
</div>