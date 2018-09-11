<!DOCTYPE html>
<html lang="en">
<head>
<title>Test</title>
<?php $this->load->view('head_content') ?>  


</head>
<body class="">

      <?php include 'module2/header_standard.php'; ?>

<!-- ... end Header Standard  -->
<section>
  <div class="container">
    <div class="row">
      <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12 bg-white">
        <form action="#" method="post" class="cart-main">

          
          <!-- Shop Table Cart -->
          
          <table class="shop_table cart">
            <thead>
            <tr>
              <th class="product-thumbnail">Test Series</th>
             
              <th class="product-remove">Action</th>
            </tr>
            </thead>
            <tbody>
<div id="delete_cart">
            <?php 
            if($this->input->cookie('shopping_cart'))
            {     

            $cookie_data = stripslashes($this->input->cookie('shopping_cart'));
              $cart_data = json_decode($cookie_data, true);
                  
              foreach($cart_data as $keys => $values)
              { 
                 $test_id =  $values['item_id'];
            ?>
      
            <tr class="cart_item" id="<?php echo $values["item_id"]; ?>">
          
              <td class="product-thumbnail">
            <div class="cart-product__item">
                  <a href="<?php echo base_url();?>web_assets1/img/product-small1.png" class="product-thumb js-zoom-image">
                    <img src="<?php echo $values["item_img"];  ?>" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                  </a>
                  <div class="cart-product-content">
<!--                    <a href="#" class="product-category">Banking</a>-->
                    <a href="#" class="h6 cart-product-title"><?php echo $values["item_name"]; ?></a>
                    
                  </div>
                </div>
              </td>
          
             
              <td class="">
                <?php  $user_id=$this->session->id; ?>
                <a href="<?php echo site_url();?>My_test/index/<?php echo $test_id ?>/<?php echo $user_id ?>" onclick="window.open(this.href,'_blank','width=1400,height=700,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0','fullscreen,scrollbars');return false;"); return false; >
                    Start Test 
                </a>
              </td>
            </tr>
<?php } } ?>
            <!-- /////////////////////// -->
          
</div>
<!-- ================================Generate Token=======================================   -->
       
       
<!-- ================================End of googlenerate Token=======================================  -->
          
            </tbody>
          </table>
          
          <!-- ... end Shop Table Cart -->
        </form>

        
      </div>
    </div>
  </div>
</section>



<!-- ... end Window-popup Choose from my Photo -->

<a class="back-to-top" href="#"> <img src="<?php echo base_url(); ?>web_assets/svg-icons/back-to-top.svg" alt="arrow" class="back-icon"> </a>

<!-- JS Scripts -->
<script src="<?php echo base_url(); ?>web_assets/js/jquery-3.2.1.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.matchHeight.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/svgxuse.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/Headroom.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/velocity.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/ScrollMagic.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.waypoints.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.countTo.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/bootstrap-select.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/smooth-scroll.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/selectize.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/swiper.jquery.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/moment.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/simplecalendar.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/fullcalendar.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/ajax-pagination.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/Chart.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/circle-progress.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/loader.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/run-chart.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.gifplayer.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/mediaelement-and-player.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/mediaelement-playlist-plugin.min.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/base-init.js"></script>
<script defer src="<?php echo base_url(); ?>web_assets/fonts/fontawesome-all.js"></script>
<script src="<?php echo base_url(); ?>web_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>