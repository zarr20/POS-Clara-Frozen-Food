<?php include("admin_header.php") ?>

<div class="wrapper">
    <div class="sidebar">
    <div style=" display: flex; padding: 20px; width: max-content;">
        <img src="/assets/foto-tidak_ada.svg" style=" margin-right: 20px; ">
        

        <div style=" align-self: center; ">
            <div style="font-weight: 600;">Dzarr al ghifari</div>
            <div style=" font-size: 14px; color: #bababa; ">admin</div>
        </div>
    </div>
    <div style=" height: 1px; background: #00000024; margin: 0 20px; margin-bottom: 20px;"></div>
        
        <ul>
            <li class="active"><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
            <li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
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
                console.log(sidebar);
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
            <div style=" align-self: center; ">Dashboard</div>    
        </div>
        <div class="info">
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae purus. Nibh praesent tristique magna sit amet purus gravida quis. Lacus luctus accumsan tortor posuere. Vitae sapien pellentesque habitant morbi tristique senectus et. Odio ut sem nulla pharetra diam sit amet nisl. Consectetur purus ut faucibus pulvinar elementum integer. Pretium fusce id velit ut tortor. Fringilla est ullamcorper eget nulla facilisi etiam dignissim. Lectus proin nibh nisl condimentum. Sed vulputate odio ut enim blandit volutpat maecenas volutpat. Sollicitudin ac orci phasellus egestas tellus. Elit pellentesque habitant morbi tristique senectus et netus. Massa tincidunt dui ut ornare lectus sit amet est placerat. Nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque. Quis hendrerit dolor magna eget. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et.</div>
            <div>Mattis rhoncus urna neque viverra justo nec ultrices dui sapien. Nec sagittis aliquam malesuada bibendum arcu vitae. Montes nascetur ridiculus mus mauris vitae ultricies leo. Magnis dis parturient montes nascetur ridiculus mus mauris vitae. Aliquam ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra. Et ultrices neque ornare aenean. Massa sapien faucibus et molestie ac feugiat sed lectus. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Neque convallis a cras semper auctor neque vitae tempus quam. Id nibh tortor id aliquet lectus proin. Tempus egestas sed sed risus pretium quam vulputate dignissim. Metus aliquam eleifend mi in nulla posuere sollicitudin. Quam pellentesque nec nam aliquam sem.</div>
        </div>
    </div>
</div>

<?php include("admin_footer.php") ?>
