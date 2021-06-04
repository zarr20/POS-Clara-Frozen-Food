<?php include("admin_header.php") ?>

<div class="wrapper">
    <div class="sidebar">
    <div style=" display: flex; padding: 20px; width: max-content;">
        <img src="/assets/foto-tidak_ada.svg" style=" margin-right: 20px; ">
        

        <div style=" align-self: center; ">
            <div style="font-weight: 600;"><?php echo $nama_pengguna_; ?></div>
            <div style=" font-size: 14px; color: #bababa; "><?php echo $akses_pengguna_; ?></div>
        </div>
    </div>
    <div style=" height: 1px; background: #00000024; margin: 0 20px; margin-bottom: 20px;"></div>
        
        <ul>
            <li class="<?php if($content_ == 'dashboard'){ echo 'active'; } ?>"><a href="/admin"><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="<?php if($content_ == 'inventory'){ echo 'active'; } ?>"><a href="/admin/inventory"><i class="fa fa-home"></i>Inventory</a></li>
            <li class="<?php if($content_ == 'transaction'){ echo 'active'; } ?>"><a href="/admin/transaction"><i class="fa fa-home"></i>Transaction</a></li>
            <li class="<?php if($content_ == 'report'){ echo 'active'; } ?>"><a href="/admin/report"><i class="fa fa-home"></i>Report</a></li>
            <li class="<?php if($content_ == 'user'){ echo 'active'; } ?>"><a href="/admin/user"><i class="fa fa-home"></i>User</a></li>
            <li><a  href="/login/logout" style=" color: #DA4403; "><i class="fa fa-home"></i>Logout</a></li>
        </ul>
        <div class="social_media"> <a href="#"><i class="fa fa-facebook-f"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
    </div>

    <div class="main_content">
        <div class="header" style=" display: flex; ">
            <style>
                img#list-icon {
                    padding: 10;
                    margin-right: 20px;
                    border-radius: 5px;
                }
                img#list-icon:hover {
                    padding: 10;
                    background: #00000036;
                }
            </style>
            <a href="#" onclick="nav_click() ">
            <img id="list-icon" src="/assets/list-icon.svg"/>
            </a>

            <script>
            var sidebar = true;

            function nav_click() {
                // console.log(sidebar);
                if(sidebar == true){
                    $('.sidebar').attr("style", "width:0;");
                    $('.main_content').attr("style", "margin-left:0;");
                    // $(".sidebar").css("width", "0");
                    // $(".main_content").css("margin-left", "0");
                    sidebar = false;
                }else{
                    $('.sidebar').attr("style", "");
                    $('.main_content').attr("style", "");
                    // $(".sidebar").style.clear;
                    // $(".main_content").style.clear;
                    sidebar = true;
                }
                
            }
            </script>
            <div style=" align-self: center; "><?php echo ucfirst($content_); ?></div>    
        </div>
        <div class="info">
        <?php 
        // echo $content_;
        if($content_ == 'dashboard'){
            include("pages/dashboard.php");
        }else if ($content_ == 'a'){
            echo "asdas";
        }else{
            echo "404";
        }
        
        ?> 
        </div>
    </div>
</div>

<?php include("admin_footer.php"); ?>
