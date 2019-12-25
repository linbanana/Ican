<input type="checkbox" name="" id="showsidebar" checked>
<div class="side-menu">
  <div class="sidebar-heading">
    <p>
      <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true" id="adminlogo">
      <i class="fa fa-user" aria-hidden="true">&nbsp;會員：</i>
      <strong><?php echo "<font id='usernamestyle'>" . $row_RecMember["m_name"] . "</font>"; ?></strong><br>
      本次登入的時間為：<?php echo $row_RecMember["m_logintime"]; ?>
    </p>
    <p align="center">
      <a href="updatemember.php?id=<?php echo $row_RecMember["m_id"]; ?>">修改資料</a> | <a href="?logout=true">登出系統</a>
    </p>
  </div>
  <ul class="list-group list-group-flush ">
    <li>
      <a class="list-group-item py-2 list-group-item-action">會員中心</a>
      <ol>
        <i>
          <a href="updatemember.php?id=<?php echo $row_RecMember["m_id"]; ?>" class="list-group-item py-2 list-group-item-action">修改會員資料</a>
        </i>
        <i>
          <a href="membermessage.php" class="list-group-item py-2 list-group-item-action">留言板</a>
        </i>
      </ol>
    </li>
    <li>
      <a class="list-group-item py-2 list-group-item-action">訂購/查詢</a>
      <ol>
        <i>
          <a href="memberqueryorder.php" class="list-group-item py-2 list-group-item-action">查詢訂單</a>
        </i>
        <i>
          <a href="../../picktravel.php" class="list-group-item py-2 list-group-item-action">旅遊行程規劃</a>
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
</div>