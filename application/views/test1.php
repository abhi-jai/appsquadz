<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Main Font -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="<?php echo base_url(); ?>web_assets/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });

    </script>
    <script type="text/javascript">
        function color(name, num) {
            $('#' + name).css("background-color", "#38a9ff");
            if (num == 4) {
                $.ajax({
                    url: '<?php echo site_url();?>result',
                    type: 'POST',
                    data: {},
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        var obj = jQuery.parseJSON(data);
                        $("#id").html('<td>Ajay Srivastava</td><td>' + obj.data.marks + '</td><td>' + obj.data.user_rank + '</td><td>' + obj.data.time_spent + '</td> <td>' + obj.data.result + '</td>');
                    },
                    error: function(err) {
                        console.log(err);

                    }
                });
                modal.style.display = "block";
            }

            span.onclick = function() {

                modal.style.display = "none";
                window.close();

            }

        }


    </script>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/css/submit_popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/css/fonts.min.css">
</head>

<body oncontextmenu="return false;">
    


    <!-- Header-BP -->
    <header class="header bg-blue" id="site-header">
        <div class="page-title test-title">
            <h6>Make My Exam</h6>
        </div>
        <div class="header-content-wrapper"> </div>
    </header>

    <!-- ... end Header-BP -->

    <!-- Responsive Header-BP -->

    <header class="header header-responsive bg-blue" id="site-header-responsive">
        <a href="" class="logo">
            <div class="img-wrap">
                <img src="<?php echo base_url(); ?>web_assets/img/logo-colored-small.png" alt="Olympus">
            </div>
            <div class="title-block">
                <h6 class="logo-title">olympus</h6>
                <div class="sub-title">SOCIAL NETWORK</div>
            </div>
        </a>

    </header>

    <!-- ... end Responsive Header-BP -->
    <div class="header-spacer"></div>
    <div class="tab-content" id="instruct">
       
             <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
<!--======================================INSTRUCTION===================================================-->
            <div class="question-box content" id="">

                <label>
                    <h2>Instructions</h2>
                </label>
                <br>
                <br>
                <label><strong>1.</strong> You must only use paper handed out at the examination venue.</label>
                <br>
                <label><strong>2.</strong> Your paper must be written with a black or blue ballpoint pen.</label>
                <br>
                <label><strong>3.</strong> At digital examinations, you write your answer directly in the program.</label>
                <br>
                <label><strong>4.</strong> You may work on your exam paper until the time allotted for the examination expires.</label>
                <br>
                <label><strong>5.</strong> At digital examinations, you write your answer directly in the program.</label>
                <br>
                <label><strong>6.</strong> You may work on your exam paper until the time allotted for the examination expires.</label>
                <br>
                <br>
                <button type="button" class="btn btn-primary" id="start" onclick="startTest_Timer();">Start Test</button>
            </div>

<!--===================================END INSTRUCTION===================================================-->
        </div>



    </div>
    <!-- ... start test tabs -->

    <form style="display: none;" id="form">
        <div class="container-fluid" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false">
            <div class="row">
                <div class="col col-xl-10 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="ui-block-title">
                        <div class="h6 title">
                            <?php echo $detail['basic_info']['test_series_name'] ?>
                        </div>
                        <ul class="list-inline marks">
                            <li><span><span>Maximum mark:</span>
                                    <?php echo $detail['basic_info']['total_marks'] ?></span></li>
                            <li><span><span>Negative mark:</span>
                                    <?php echo $detail['basic_info']['negative_marking'] ?></span></li>
                        </ul>
                    </div>
                    <div class="ui-block">
                        <!-- News Feed Form  -->
                        <div class="news-feed-form gate-exam">
                            <!-- Nav tabs -->
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item que-nu"> <a class="nav-link inline-items"><span>Question</span> </a> </li>
                                        <!-- <li class="nav-item"> <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true"><span>Physics</span> </a> </li>
            <li class="nav-item"> <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false"><span>Chemistary</span> </a> </li>
            <li class="nav-item"> <a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false"> <span>Bioloagy</span> </a> </li>
            <li class="nav-item"> <a class="nav-link inline-items" data-toggle="tab" href="#matematics" role="tab" aria-expanded="false"> <span>Mathematic</span> </a> </li>
          -->
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <div class="view-full-btn">
                                        <!-- <a href="javascript:void(0)" class="btn btn-bg-secondary" onclick="toggleFullScreen()">view full screen</a> -->
                                        <!-- <a href="<?php echo site_url();?>calculator" onclick="window.open(this.href,'_blank','left=20,top=20,width=350,height=320,toolbar=1,resizable=0');return false;"><span class="calculator-icon"><i class="fas fa-calculator"> </i></span></a> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Tab panes -->
                            <?php

$detail = $detail['question_bank'];

?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
<!--======================questions in loop======================================================-->
                                    <?php

$count = count($detail);
$que_id = array();

$data = array();
for ($i = 0; $i < $count; $i++) {
  static $num = 0;
    if ($i == 0) {
        $style = 'block';
    } else {
        $style = 'none';
    }
    ?>
                                    <div class="question-box content" id="content-<?php echo $i + 1; ?>" style="display: <?php echo $style; ?>;">
                                        <p style="height:20px; width:70%; margin-bottom:30px">Q
                                            <?php echo $i + 1; ?>:
                                            <?php echo $detail[$i]['question']; ?>
                                        </p>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="1" onclick="color(this.name,<?php echo $i?>)">
                                                A.
                                                <?php echo $detail[$i]['option_1']; ?> </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="2" onclick="color(this.name,<?php echo $i ?>)">
                                                B.
                                                <?php echo $detail[$i]['option_2']; ?> </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="3" onclick="color(this.name,<?php echo $i ?>)">
                                                C.
                                                <?php echo $detail[$i]['option_3']; ?> </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="4" onclick="color(this.name,<?php echo $i ?>)">
                                                D.
                                                <?php echo $detail[$i]['option_4']; ?> </label>
                                        </div>
                                    </div>

                                    <?php
    
$num++;
 $que_id[$i]=$detail[$i]['id'];
$data[]=$que_id[$i]; 
}

?>
<!--============================================end questions in loop======================================-->
                                </div>


                            </div>
                        </div>
                        <!-- ... end News Feed Form  -->
                    </div>
                </div>
                <aside class="col col-xl-2 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="ui-block">

                        <!-- W-Activity-Feed -->

                        <ul class="widget w-activity-feed notification-list">
                            <li>
<!--============================================check image status======================================-->                               
                                <div class="author-thumb">
                                    <?php if(remote_file_exists($this->session->pro_img, 1)) { ?>
                                    <img src="<?= $this->session->pro_img ?>" alt="author">
                                    <?php } else { ?>
                                    <i class="fa fa-user-circle" alt="author" style="font-size:37px"></i>
                                    <?php } ?>
<!--=========================================End check image status======================================-->   
                                </div>

                                <div class="notification-event">
                                    <span class="h6 notification-friend">
                                        <?= $this->session->name ?></span>

                                    <span class="notification-date"><time class="entry-date updated bold" datetime="2004-07-24T18:18">Time Left: <span id="time">30:00 </span></time></span>
                                        <input type="hidden" id="time_val"/>
                                </div>

                            </li>
                        </ul>

                        <!-- .. end W-Activity-Feed -->
                    </div>
                    <div class="ui-block">
                        <div class="ui-block-title">
                            <h6 class="title">Question Palette</h6>
                        </div>

                        <!-- W-Activity-Feed -->

                        <div class="question-status">
                            <ul>
<!-- ==========================question sequence number===================================================  -->
                                <?php

      $count = count($detail);
      for ($i = 0; $i < $count; $i++) { ?>
                                <li>
                                    <a href="#q<?php echo $i+1; ?>" id='optionsRadios<?php echo $i+1; ?>' class="common attempt" val1="<?php echo $i+1;?>" onclick="click_count(<?php echo $i+1; ?>)">Q
                                        <?php echo $i+1; ?>
                                    </a>
                                </li>
                                <?php } ?>
<!-- =======================End question sequence number=================================================  -->                                
                            </ul>
                        </div>
                        <hr>
                        <div class="gides">
                            <h6>Legends:</h6>
                            <ul class="list-inline">
                                <li>
                                    <h6><span> <span class="statistics-point answerd"></span> Answerd </span></h6>
                                </li>
                                <li>
                                    <h6><span> <span class="statistics-point not-answerd"></span>Non Answerd </span></h6>
                                </li>
                                <li>
                                    <h6><span> <span class="statistics-point marked"></span>Review </span></h6>
                                </li>
                                <li>
                                    <h6><span> <span class="statistics-point not-visited"></span> Not Visited </span></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="action">
<!--                            <button class="btn btn-border-think c-grey btn-transparent custom-color">View QP</button>-->
<!--                            <button class="btn btn-border-think c-grey btn-transparent custom-color" style="float: right;">Instructions</button>-->
                            <br>
                            <a class="btn btn-blue full-width " id="submit2" href="javascript:void(0);">Submit</a>

                        </div>

                        <!-- .. end W-Activity-Feed -->
                    </div>
                </aside>


                <div class="fixed-bottom for-submit-test">
                    <div class="post-additional-info inline-items">
                        <a href="#" class="btn btn-smoke btn-sm btn-light-bg review1 counting" clear2="1" current="<?php echo count($detail); ?>" current_val="1">Mark For Review</a>
                        <a href="#" class="btn btn-smoke btn-sm btn-light-bg clear " clear1="1" style="cursor:pointer" onclick="erase_radio()" current_val="1">Clear</a>

                        <div class="comments-shared counting"> <a href="javascript:void(0);" class="btn btn-blue btn-md-2 save " name="save" total="<?php echo count($detail); ?>" current_val="1">Save &amp; Next</a> </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <!-- ... end start test tabs -->



    
<!--================================== Result Popup Modal =======================================-->

    <div id="myModal" class="modal" style="z-index:99;">

        <!-- Modal content -->
        <div class="modal-content">
<!--            <span class="close">&times;</span>-->

            <div style="text-align: center;"><h3>Test Summary</h3></div>
            <table border="1" style="text-align:center;cellpadding:10px;padding:10px;font-size:20px;width:100%;">
                <tr style="background:grey;color:white" ;>
                    <b>
                        <th>Title</th>
                        <th>Correct Answer</th>
                        <th>Marks</th>
                        <th>Time Spent</th>
                        <th>User Rank</th>
                    </b>
                </tr>
                <tr id="id">

                </tr>


            </table>
            <div style="text-align: center; margin-top:10px; "><h5><a id="show_res"  href="<?php echo site_url();?>Result/index/<?=$this->uri->segment(3);?>/">View Result</a></h5></div>
        </div>

    </div>
<!--==================================End Result Popup Modal =======================================-->
   
   
<!--========================disable key==========================================================   -->
    <script>
        document.onkeydown = function(e) {
            return false;
        }
        
//--========================End disable key=========================================================-->       
        
        
        
        
// ======================click on question number======================================================
        function click_count(id) {
            $('.content').hide();
            document.getElementById('content-' + id).style.display = "block";

        }
// ======================End click on question number==================================================
        
        
        
        
// =============================Toggle Screen==============================================================
        $(document).ready(function() {
            $('#start').click(function(e) {

                $('#form').css({
                    "display": "block"
                });
                $('#instruct').css({
                    "display": "none"
                });

                if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                    (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                    if (document.documentElement.requestFullScreen) {
                        document.documentElement.requestFullScreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullScreen) {
                        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                    if (e.requestFullscreen) {
                        e.requestFullscreen();
                    } else if (e.mozRequestFullScreen) {
                        e.mozRequestFullScreen();
                    } else if (e.webkitRequestFullscreen) {
                        e.webkitRequestFullscreen();
                    } else if (e.msRequestFullscreen) {
                        e.msRequestFullscreen();
                    } else {
                        if (document.cancelFullScreen) {
                            //document.cancelFullScreen();  
                        } else if (document.mozCancelFullScreen) {
                            document.mozCancelFullScreen();
                        } else if (document.webkitCancelFullScreen) {
                            // document.webkitCancelFullScreen();  
                        }
                    }
                }
            });
        });
// ===========================End Toggle Screen==============================================================        
        
        
        
//===================================submit test========================================================
        $('#submit2').click(function() {
            var modal = document.getElementById('myModal');
            var btn = document.getElementById("submit2");
            //  var btn1 = document.getElementsByClassName("sbt4");
//            var span = document.getElementsByClassName("close")[0];

            var total = <?=$count;?>;
            var radioValue;
            var radio_val = [];
            var dump = [];
            for (let i = 0; i < total; i++) {
                radioValue = $("input[name='optionsRadios" + i + "']:checked").val();
                if (radioValue == undefined) {
                    radio_val[i] = '';
                } else {
                    radio_val[i] = radioValue;
                }
            }
            for (let i = 0; i < total; i++) {
                dump[i] = radio_val[i + 1];

            }

            var data = <?php echo json_encode($data); ?>;

            var dump_val = [];
            for (let k  = 0; k < total; k++) {
                if (dump[k] == undefined) {
                    dump[k] = '';
                }
                dump_val[k] = {
                    "question_id": data[k],
                    "answer": dump[k]
                };

            }
               var res_id= $("#show_res").attr('href');
               ////////////////
              var t = $("#time_val").val();
                ///////////////////
        
            $.ajax({
                url: '<?php echo site_url();?>My_test/on_test_submit',
                type: 'POST',
                dataType: "json",
                data: {
                    user_id: <?=$this->uri->segment(3);?>,
               
                    test_series_id: 4,
                    time_spent: parseInt(t),//spent
                    question_dump: dump_val
                },
                success: function(data) {
                    // alert("success"+data);
//                    $("#id").html(data);

                     $("#id").html(data.result);
                    $("#show_res").attr('href',res_id + data.u_id);
                },
                error: function(err) {
                    console.log(err);
                    // alert("error"+err);
                }

            });
            modal.style.display = "block";
        });
/////===================================submit test===================================================
    </script>

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
    <script src="<?php echo base_url(); ?>web_assets/js/test1.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/js/run-chart.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/js/jquery.gifplayer.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/js/mediaelement-and-player.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/js/mediaelement-playlist-plugin.min.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/js/base-init.js"></script>
    <script defer src="<?php echo base_url(); ?>web_assets/fonts/fontawesome-all.js"></script>
    <script src="<?php echo base_url(); ?>web_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>
<!--    //=========================================Timer=======================================================-->
        <script>
            function startTest_Timer() {
            var duration = 60 * 30,
                display = document.querySelector('#time');
            var timer = duration,
                minutes, seconds;
                var s = 0;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;
                s++;
                $("#time_val").val(s);

                if (--timer < 0) {
                    // timer = duration;
                    //            submit_test();
                }
            }, 1000);
        }
        //    window.onload = function () {
        //    var thiry = 60 * 30,
        //    display = document.querySelector('#time');
        //    startTest_Timer(thiry, display);
        //};
        </script>
<!-- //=========================================Timer=======================================================-->
</body>

</html>

<!--================================= function for check remote url=============================== -->
<?php
function remote_file_exists($source, $extra_mile = 0) {

  if ($extra_mile === 1) {
      $img = @getimagesize($source);

      if (!$img)
          return 0;
      else {
          switch ($img[2]) {
              case 0:
                  return 0;
                  break;
              case 1:
                  return $source;
                  break;
              case 2:
                  return $source;
                  break;
              case 3:
                  return $source;
                  break;
              case 6:
                  return $source;
                  break;
              default:
                  return 0;
                  break;
          }
      }
  } else {
      if (@FClose(@FOpen($source, 'r')))
          return 1;
      else
          return 0;
  }
}
?>
<!--==============================End function for check remote url=============================== -->