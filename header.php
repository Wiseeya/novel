<header>
    <div class="hamburger" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    
     <nav>
         <div class="container">
             <div class="nav-grid">
                 
        <div class="logo">
            <h1>GetnovelsBlog </h1>
            
            <span>เว็บไซต์นิยาย</span>
        </div> 
        <div class="fr">
        <ul class="menu">
            <li><a href="index.php">หน้าแรก</a>
            </li>
     
            <li>
                <a href="about.php">เกี่ยวกับเรา</a>
        </li>

            <li>
                <a href="contact.php">ติดต่อเรา</a>
        </li>
            <?php
            if (isset($_SESSION['is_member'])) {
                ?>
            }
            <li><a href="secure/logout.php">ออกจากระบบ</a>
        </li>
        <?php } else { ?>
            <li><a href="secure/index.php">เข้าระบบ</a>
        </li>

            <li><a href="secure/frm_register.php">ลงทะเบียน</a>
            <?php }  ?>
        </li>
            
        </ul>
    </div>
    </div>
</div>
     </nav>
 </header>