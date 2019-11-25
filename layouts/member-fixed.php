<div class="Logininformation">
    <p class="heading"><strong>會員系統</strong></p>
      <p>
        <strong>
          <?php 
            echo "<font id='usernamestyle'>".$row_RecMember["m_name"]."</font>";
            ?>
        </strong>您好。<br>
        本次登入的時間為：<br>
        <?php 
          echo $row_RecMember["m_logintime"];
        ?>
      </p>
      <p align="center"><a href="updateadmin.php?id=<?php echo $mid;?>">修改資料</a> | <a href="?logout=true">登出系統</a>
    </p>
</div>

<div class="adminsidebar">
    <input type="checkbox" name="" id="showsidebar" checked>
    <div class="side-menu">
        <div class="sidebar-heading">
            <img src="images/logo.png" id="adminlogo">
        </div>
            <ul class="list-group list-group-flush ">
                <li>
                  <a class="list-group-item py-2 list-group-item-action">會員中心</a>
                    <ol>
                        <i>
                          <a href="../member/updatemember.php?id=<?php echo $row_RecMember["m_id"];?>" class="list-group-item py-2 list-group-item-action">修改會員資料</a>
                        </i>
                        <i>
                          <a href="#" class="list-group-item py-2 list-group-item-action">會員設定</a>
                        </i>
                    </ol>
                </li>
               <li>
                  <a class="list-group-item py-2 list-group-item-action">會員系統管理</a>
                    <ol>
                        <i>
                          <a href="#" class="list-group-item py-2 list-group-item-action">系統管理員設定</a>
                        </i>
                        <i>
                          <a href="#" class="list-group-item py-2 list-group-item-action">會員設定</a>
                        </i>
                    </ol>
                </li>
            </ul>
        <label for="showsidebar">
            <i class="fa fa-angle-right"></i>
        </label>
    </div>
</div>