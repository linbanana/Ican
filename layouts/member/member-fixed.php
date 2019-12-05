<input type="checkbox" name="" id="showsidebar" checked>
<div class="side-menu">
<div class="sidebar-heading">
    <p>
      <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true" id="adminlogo">
      <i class="fa fa-user" aria-hidden="true">&nbsp;會員：</i>
      <strong><?php echo "<font id='usernamestyle'>".$row_RecMember["m_name"]."</font>";?></strong><br>
        本次登入的時間為：<?php echo $row_RecMember["m_logintime"];?>
    </p>
    <p align="center">
      <a href="updatemember.php?id=<?php echo $row_RecMember["m_id"];?>">修改資料</a> | <a href="?logout=true">登出系統</a>
    </p>
</div>
            <ul class="list-group list-group-flush ">
                <li>
                  <a class="list-group-item py-2 list-group-item-action">會員中心</a>
                    <ol>
                        <i>
                          <a href="updatemember.php?id=<?php echo $row_RecMember["m_id"];?>" class="list-group-item py-2 list-group-item-action">修改會員資料</a>
                        </i>
                        <i>
                          <a href="../messageboard.php" class="list-group-item py-2 list-group-item-action">留言板</a>
                        </i>
                    </ol>
                </li>
               <li>
                  <a class="list-group-item py-2 list-group-item-action">暫無功能</a>
                    <ol>
                        <i>
                          <a href="#" class="list-group-item py-2 list-group-item-action">暫無功能</a>
                        </i>
                        <i>
                          <a href="#" class="list-group-item py-2 list-group-item-action">暫無功能</a>
                        </i>
                    </ol>
                </li>
            </ul>
        <label for="showsidebar">
            <i class="fa fa-angle-right"></i>
        </label>
    </div>
</div>