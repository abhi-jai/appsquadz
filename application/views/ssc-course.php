<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test Series</title>
    <?php $this->load->view('head_content') ?> 
   
    <script src="<?php echo base_url();?>web_assets1/js/webfontloader.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <style>
    .product-thumb a{
        display:flex;
        margin-right:auto;
        margin-left:auto;
    }
    </style>

</head>

<body id="">


    <!-- Header Standard -->


    <?php include 'module2/header_standard.php'; ?>

    <!-- ... end Header Standard  -->


    <!-- Your Account Personal Information -->

    <div class="container-fluid">
        <div class="row">
            <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">

                <div class="row" id="row">


                    <?php
	// pre($details);die;
                    $i=1;
	foreach($details as $data){ 
if(!empty($data['course_list'])){
?>
                        <?php
foreach($data['course_list'] as $data1)
{

?>

                            <!-- Product Item -->
                            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="shop-product-item">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url();?>index.php/SscCourse/details/<?php echo $data1['id']?>"><img src="<?php echo $data1['cover_image'];?>" alt="product"></a>
                                        <!-- <span class="onsale">Top</span> -->
                                    </div>
                                    <div class="product-content">
                                        <div class="block-title" style="min-height:70px;">

                                            <a href="<?php echo base_url();?>index.php/SscCourse/details/<?php echo $data1['id']?>" class="h5 title">
                                                <?php echo $data1['title'];?>
                                            </a>
                                            <a href="#" class="product-category text-center"></a>
                                        </div>

                                        <div class="block-price">

                                            <div class="product-price"><del>₹12000</del><span class="pri-right"><?php echo $data1['mrp'];?></span></div>
                                            <div class="validity-time">
                                                <p>Valid Till 12 Months</p>

                                            </div>

                                            <form class="comment-form inline-items" method="post" action="<?php echo base_url('index.php/Cart');?>">

                                            
                                               <?php if(!$this->session->userdata('username')){ ?>
                                                <button class="btn btn-sm btn-md-2 btn-primary popup" type="button" data-toggle="modal" data-target="#registration-login-form-popup">Buy Now</button>
                                                <?php   } else { ?>
                                   
                                                <button class="btn btn-sm btn-md-2 btn-primary"  id="<?php echo $i; ?>"  onclick="click_buy(this.id)" type="button">Buy Now</button>
                                                <?php } ?> 
                                        
                                            
                                          
                                            <button type="button" name="add_to_cart" class="btn btn-sm btn-md-2 btn-blue addToCart" id="<?php echo $i; ?>" onclick="cartData(this.id);">Add to Cart</button>
                                           
                                            

                                                <input type="hidden" name="hidden_img<?php echo $i;?>" value="<?php echo $data1['cover_image'] ?>" />
                                                <input type="hidden" name="hidden_name<?php echo $i;?>" value="<?php echo $data1['title'] ?>" />
                                                <input type="hidden" name="hidden_price<?php echo $i;?>" value="<?php echo $data1['mrp']; ?>" />
                                                <input type="hidden" name="hidden_id<?php echo $i;?>" value="<?php echo $data1['id']; ?>" />
                                                <input type="hidden" name="hidden_qty<?php echo $i;?>" value="1" />
                                                <!-- <button type="button" name="add_to_cart" ; class="btn btn-md-2 btn-blue addToCart" id="<?php echo $i; ?>" onclick="cartData(this.id);">Add to Cart</button> -->

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php $i++;
			} 
			?>
                            <!-- ... end Product Item -->

                            <?php 
			 }}
			?>

                </div>


                <!-- Pagination -

               ... end Pagination -->

            </div>

            <div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
                <div class="ui-block">



                    <!-- Your Profile  -->
                    <?php include 'module2/profile.php'; ?>

                    <!-- ... end Your Profile  -->


                </div>
            </div>
        </div>
    </div>


    <!--  -->

    <!-- ... end Your Account Personal Information -->
    <?php include 'module2/footer.php'; ?>
    <!-- JS Scripts -->
    <script type="text/javascript">
        function cartData(id) {

            var hidden_name = $("input[name=hidden_name" + id + "]").val();
            var hidden_img = $("input[name=hidden_img" + id + "]").val();
            var hidden_id = $("input[name=hidden_id" + id + "]").val();
            var hidden_qty = $("input[name=hidden_qty" + id + "]").val();
            var hidden_price = $("input[name=hidden_price" + id + "]").val();


            //var formData = new FormData(this);
            // alert(hidden_id);
            $.ajax({
                url: '<?php echo base_url();?>index.php/AddToCart',
                type: 'post',
                xhrFields: {
                    withCredentials: true
                },
                crossDomain: true,
                data: {
                    hidden_name: hidden_name,
                    hidden_img: hidden_img,
                    hidden_id: hidden_id,
                    hidden_qty: hidden_qty,
                    hidden_price: hidden_price
                },


                success: function(data) {

                    var username = getCookie("shopping_cart");
                    var d = JSON.parse(username);
                    var arr = Object.keys(d).map(function(key) {
                        return d[key];
                    });
                    //var arr1 = Object.keys(arr).map(function (key) { return arr[key]; });
                    // alert(arr.length);exit;

                    var a = [];
                    var sum = 0;
                    var total = [];
                    for (var i = 0; i < arr.length; i++) {

                        // var text = arr[i].item_name;
                        // var newchar = ' ';
                        // res = text.split('+').join(newchar);
                        // arr[i].item_name =res;
                        // console.log(res);exit();

                        sum = parseInt(arr[i].item_price) + sum;

                        a[i] = `<li class="cart-product-item ` + arr[i].item_id + `" >
                                        <div class="product-thumb">
                                            <img src="` + arr[i].item_img + `" alt="product">
                                        </div>
                                        <div class="product-content">
                                            <h6 class="title">
                                                ` + arr[i].item_name + `
                                            </h6>
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
                                            <div class="counter">
                                               ` + arr[i].item_quantity + `
                                            </div>
                                        </div>
                                        <div class="product-price">
                                           ` + arr[i].item_price + `
                                        </div>
                                        <div class="more">
                        <a href="javascript:void(0);" onclick="return del_cart(` + arr[i].item_id + `);">
                                                <svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg></a>
                                        </div>
                                    </li>
                                    </ul>`;


                    }

                    var bottom = `<div class="cart-subtotal" id="remove">Cart Subtotal:<span>` + sum + `</span></div>

                                <div class="cart-btn-wrap">
                                    <a href="<?php echo base_url();?>index.php/Cart/gotocart" class="btn btn-primary btn-sm">Go to Your Cart</a>
                                    <a href="<?php echo base_url();?>index.php/Checkout/check" class="btn btn-purple btn-sm">Go to Checkout</a>
                                </div>`;
                                $('#cart_list').html(a + bottom);  
					var count = ++data;
                    $('#numb').html(count);
                },
                error: function(err) {
                    alert("Error", +err);
                },
            });
        }
        // });
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }



        function theFunction(cat_id) {
            var req = $.ajax({
                url: '<?php echo base_url();?>index.php/SscCourse/category_data',
                method: 'POST',
                data: {
                    cat_id: cat_id
                },
                success: function(data) {
                    $('#row').html(data);
                    }
                },
                error: function(err) {
                    alert("error");

                }
            });
        }


        function allCategoryFunction(status) {
            var req = $.ajax({
                    url: '<?php echo base_url();?>index.php/SscCourse/index',
                    method: 'POST',
                    data: {
                        status: status
                    },
                    success: function(data) {

                        $('#row').html(data);
                    },
                
                error: function(err) {
                    alert("error");

                }
            });
        }

        function del_cart(id) {
            var req = $.ajax({
                url: '<?php echo base_url();?>index.php/AddToCart/move/',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    var username = getCookie("shopping_cart");
                    var d = JSON.parse(username);
                    var arr = Object.keys(d).map(function(key) {
                        return d[key];
                    });

                    if (arr.length == 0) {
                        $('#remove').html('');

                    }
                    $('#' + id).remove();
                    $('.' + id).remove();


                },
                error: function(err) {
                    alert("error");
                    // console.log("error",err);
                }
            });
        }

function click_buy(id){
    cartData(id);
  
   function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}
sleep(1000).then(() => {
    location.href='<?php site_url(); ?>Cart/gotocart';  
});
    
}
    </script>


    <script src="<?php echo base_url();?>web_assets1/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.appear.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.matchHeight.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/svgxuse.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/imagesloaded.pkgd.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/Headroom.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/velocity.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/ScrollMagic.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.waypoints.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.countTo.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/material.min.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/smooth-scroll.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/selectize.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/swiper.jquery.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/moment.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/simplecalendar.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/fullcalendar.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/isotope.pkgd.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/ajax-pagination.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/Chart.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/chartjs-plugin-deferred.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/circle-progress.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/loader.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/run-chart.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/jquery.gifplayer.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/mediaelement-and-player.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/mediaelement-playlist-plugin.min.js"></script>
    <script src="<?php echo base_url();?>web_assets1/js/base-init.js"></script>
    <script defer src="<?php echo base_url();?>web_assets1/fonts/fontawesome-all.js"></script>
    <script src="<?php echo base_url();?>web_assets1/Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
