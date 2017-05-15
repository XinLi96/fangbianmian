<header class="nav navbar-fixed-top">
    <div class="wrapper container">
        <div class="logo"></div>
        <ul class="nav navbar-nav navbar-right list">
            <li><a href="user/index">首页</a></li>
            <li  class="interview">
                <a href="search_teacher/index" class="board">面试版</a>
                <ul class="down-menu">
                    <?php if ($this->session->userdata('status') == '0' && $this->session->userdata('state') == '1') {?>
                        <li><a href="">成为导师</a></li>
                    <?php }?>
                </ul>
            </li>
            <li><a href="t_recom/index">内推版</a></li>
            <li><a href="">关于我们</a></li>
            <?php if ($this->session->userdata('status') == '') {?>
                <li><a href="user/login" id="use"><span class="glyphicon glyphicon-user" id="user"></span>&nbsp登录/注册</a></li>
            <?php } ?>

            <?php if (  ($this->session->userdata('status') == '0' || $this->session->userdata('status') == '1' ) && $this->session->userdata('state') == '1' ) {?>
                <li class="dropdown">
                    <a id="dropdownMenu1" href="user/center">
                        <img src="assets/img/index/person.jpg" alt="">
                    </a>
                    <ul class="down-menu">
                        <li><a href="rec_order/index">我的内推</a></li>
                        <li><a href="t_iv_order/index/5">我的面试</a></li>
                        <li><a href="t_work/index">我的简历</a></li>
                        <?php if ($this->session->userdata('status') == '0') {?>
                            <li><a href="t_interviewer/getInterview_by_userId">我的收藏</a></li>
                        <?php } ?>
                        <li><a href="">消息中心</a></li>
                        <li><a href="">账号设置</a></li>
                        <li><a href="user/login_out">退出</a></li>
                    </ul>
                </li>
            <?php } ?>

            <?php if ($this->session->userdata('status') == '1' && $this->session->userdata('state') == '2' ) {?>
                <li class="dropdown">
                    <a id="dropdownMenu1">
                        <img src="assets/img/index/person.jpg" alt="">
                    </a>
                    <ul class="down-menu">
                        <li><a href="t_work/index">我的简历</a></li>
                        <li><a href="">消息中心</a></li>
                        <li><a href="">账号设置</a></li>
                        <li><a href="user/login_out">退出</a></li>
                    </ul>
                </li>
            <?php } ?>


        </ul>
    </div>
</header>