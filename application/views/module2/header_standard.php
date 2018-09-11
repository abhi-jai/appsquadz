<!-- ===================loader html -->
<div id="wave" style="display: none;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<!-- ====== end of loader -->


<div class="header--standard our-header" id="header--standard">
    <div class="container-fluid">
        <div class="header--standard-wrap">

            <a href="<?php echo site_url(); ?>HomeMain" class="logo">
                <div class="img-wrap">
                    <img src="<?php echo base_url(); ?>web_assets/img/logo-colored-small.png" alt="Olympus">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">Make My Exam</h6>
                    <div class="sub-title">Knowledge Treasure</div>
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
            </a>

            <div class="nav nav-pills nav1 header-menu">
                <div class="mCustomScrollbar">
                    <ul>
                        <li class="nav-item">
                            <a href="<?php echo site_url(); ?>HomeMain" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex="1">Courses</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#Dental">Dental</a>
                                <a class="dropdown-item" href="#Medical">Medical</a>
                                <a class="dropdown-item" href="#Others">Others</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url(); ?>SscCourse" class="ssc-course">Test Series</a>
                            <!--                    <a href="javascript:void(0);" onclick="return allCategoryFunction(2);" class="ssc-course">Test Series</a>-->
                        </li>
                        <li class="nav-item">
                            <a href="#Epub" class="ssc-course">Epub</a>
                        </li>
                        <li class="nav-item">
                            <a href="#videos" class="ssc-course">Video Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="#OnlineCourse" class="ssc-course">Online Courses</a>
                        </li>
                        <!-- ////////////////// cart detail on right top///////////////////////////////-->
                        <li class="shoping-cart more" >
                            <a href="#" class="nav-link">
                                <svg class="olymp-shopping-bag-icon"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-shopping-bag-icon"></use></svg>
                                <?php
                                $num = 0;
                                if ($this->input->cookie('shopping_cart')) {


                                    $cookie_data = stripslashes($this->input->cookie('shopping_cart'));
                                    $cart_data = json_decode($cookie_data, true);
                                    foreach ($cart_data as $keys => $values) {
                                        $num = $num + 1;
                                    }
                                }
                                ?>

                                <span class="count-product label-avatar bg-blue" id="numb"><?php echo $num; ?></span>
                            </a>

                            <div class="more-dropdown shop-popup-cart" style="width: 350px; max-height: 500px; overflow-y: scroll;">
                                <ul id="cart_list">
                                    <?php
                                    if ($this->input->cookie('shopping_cart')) {

                                        $cookie_data = stripslashes($this->input->cookie('shopping_cart'));
                                        $cart_data = json_decode($cookie_data, true);
                                        foreach ($cart_data as $keys => $values) {
                                            ?>
                                            <li class="cart-product-item <?php echo $values["item_id"]; ?>">
                                                <div class="product-thumb">
                                                    <img src="<?php echo $values["item_img"]; ?>" alt="product">
                                                </div>
                                                <div class="product-content">
                                                    <h6 class="title"><?php echo $values["item_name"]; ?></h6>
                                                    <ul class="rait-stars">
                                                        <li>
                                                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                        </li>

                                                        <li>
                                                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star star-icon" aria-hidden="true"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="counter"><?php echo $values["item_quantity"]; ?></div>
                                                </div>
                                                <div class="product-price"><?php echo $values["item_price"]; ?></div>
                                                <div class="more">
                                                    <a href="javascript:void(0)" onclick="return del_cart(<?php echo $values["item_id"]; ?>);"> <svg class="olymp-little-delete"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete" ></use></svg> </a>
                                                </div>
                                            </li>
                                        <?php } ?>

                                        <?php
                                        $sum = 0;
                                        if ($this->input->cookie('shopping_cart')) {
                                            $cookie_data = stripslashes($this->input->cookie('shopping_cart'));
                                            $cart_data = json_decode($cookie_data, true);
                                            foreach ($cart_data as $keys => $values) {
                                                $sum = $values['item_price'] + $sum;
                                            }
                                        }
                                        ?>
                                        <div class="cart-subtotal">Cart Subtotal:<span><?php echo $sum; ?>


                                            </span></div>
                                        <div class="cart-btn-wrap">
                                            <a href="<?php echo base_url(); ?>index.php/Cart/gotocart" class="btn btn-primary btn-sm">Go to Your Cart</a>
                                            <a href="<?php echo base_url(); ?>index.php/Checkout/check" class="btn btn-purple btn-sm">Go to Checkout</a>
                                        </div>
                                    <?php
                                    } else {
                                        ?>
                                        <div class="cart-subtotal">Cart Subtotal:<span><?php echo 0; ?>

                                            </span></div>
                                        <div class="cart-btn-wrap">

                                        </div>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>

                        <!-- ////////////////// End cart detail on right top////////////////-->




                        <li class="close-responsive-menu js-close-responsive-menu">
                            <svg class="olymp-close-icon"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                        </li>
                        <!--
                        <li class="">
                                                        <a href="#" class="btn btn-primary btn-sm sign-in-btn">Sign In</a>
                                                </li>-->
                    </ul>
                </div>
            </div>
            <!-- ======================Sign IN header============================================= -->
            <?php
            if (!$this->session->userdata('username')) {
                ?>

                <div class="control-block"> 
                    <a  class="btn btn-primary  btn-sm sign-in-btn" data-toggle="modal" data-target="#registration-login-form-popup" style="color:white;">Sign In <div class="ripple-container"></div></a>
                </div>
            <?php } else { ?>

                <div class="control-block">

                    <div class="author-page author vcard inline-items more">
                        <div class="author-thumb">
                            <?php if (remote_file_exists($this->session->pro_img, 1)) { ?>
                                <img alt="author" src="<?= $this->session->pro_img ?>" class="avatar" style="max-width:50px">
                            <?php } else { ?>
                                <i class="fa fa-user-circle" alt="author" style="font-size:40px"></i>
                                <!-- <img alt="author" src="<?= base_url('web_assets1/img/avatar1.jpg') ?>" class="avatar" style="max-width:50px"> -->
                            <?php } ?>

                            <span class="icon-status online"></span>
                            <div class="more-dropdown more-with-triangle">
                                <div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark" data-ps-id="889d86e7-4617-3e86-7036-34809a3f21b1">
                                    <div class="ui-block-title ui-block-title-small">
                                        <h6 class="title">Your Account</h6>
                                    </div>

                                    <ul class="account-settings">
                                        <li>
                                            <a href="<?php echo site_url('Profile/index/'); ?><?= $this->session->id ?>">

                                                <svg class="olymp-menu-icon"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

    <!--										<span>Profile Settings</span>-->
                                                <span>My Profile </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url(); ?>Coursedetail">
                                                <svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAV PAGE"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>

                                                <span>My Test series</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= site_url('Logout') ?>">
                                                <svg class="olymp-logout-icon"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <a href="javascript:void(0);" class="author-name fn">
                            <div class="author-title">
                                <?= $this->session->name ?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?php echo base_url(); ?>web_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                            </div>
    <!--					<span class="author-subtitle">SPACE COWBOY</span>-->
                        </a>
                    </div>
                </div>
            <?php } ?>
            <!-- ====================== End of Sign IN header============================================= -->
        </div>
    </div>
</div>


