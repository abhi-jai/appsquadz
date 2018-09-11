
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
       
        <!-- Main Font -->
        <script src="<?php echo base_url(); ?>web_assets1/js/webfontloader.min.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Roboto:300,400,500,700:latin']
                }
            });
            
        </script>
        <!----------------post for registeration------->
        <script>
        $(document).ready(function(){
                $("#regData").click(function (){
                var first_name = $("#first_name").val(); 
                var last_name = $("#last_name").val(); 
                var emailid = $("#emailid").val(); 
                var mobile = $("#mobile").val(); 
                var pwd = $("#pwd").val();
                var cpwd = $("#cpwd").val();
                if(pwd != cpwd){
                        $("#formErr").html("Password Mismatch!");
                }else{
                        $.ajax({
                                type: 'POST',
                                url: '<?php echo site_url('Login_register/register'); ?>',
                                data: {first_name: first_name, last_name: last_name, emailid: emailid, mobile: mobile, pwd: pwd},
                                success: function(data){
                                        if(data == "success"){
                                                location.href="<?= site_url('HomeMain/') ?>";
                                        }else{
                                                $("#formErr").html(data);
                                        }                        
                                }
                        });
                }                
                });
                $("#loginData").click(function (){
                    var username = $("#username").val();
                    var password = $("#password").val();
                    $.ajax({
                            type: 'POST',
                            url: '<?php echo site_url('Login_register/login'); ?>',
                            data: {username: username, password: password},
                            success: function(data){
                                    if(data == "success"){
                                            location.href="<?= site_url('HomeMain/') ?>";
                                    }else{
                                        $("#formLoginErr").html(data);
                                    }
                                }
                    });    
                });
                $("#damsLog").click(function (){
                    var username = $("#username").val();
                    var password = $("#password").val();
                    $.ajax({
                            type: 'POST',
                            url: '<?php echo site_url('Login_register/damslogin'); ?>',
                            data: {username: username, password: password},
                            success: function(data){
                                    if(data == "success"){
                                            location.href="<?= site_url('HomeMain/') ?>";
                                    }else{
                                        $("#formLoginErr").html(data);
                                    }
                                }
                    });    
                }); 
        });
</script>

            
        <style>
           
            .pre_text{              
                -webkit-box-sizing:border-box;
                -moz-box-sizing:border-box;
                white-space: pre-wrap;  
                white-space: -moz-pre-wrap; 
                white-space: -pre-wrap; 
                white-space: -o-pre-wrap; 
                word-wrap: break-word; 
                width:100%; overflow-x:auto;
                font-family: Roboto,-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif;
                font-size: .812rem;
                font-weight: 400;
                line-height: 1.5;
                color: #888da8;
            }
            .expert-img .experts-users {width: 93px;
                border-radius: 100px;
                height: 93px;
            }
            .experts-users {
                 line-height: 93px;
                 color: #fff;
                 background-color: #38a9ff;
                 font-size: 47px;
            }
            /* css for loader */
            div#wave {
                position: fixed;
                margin-top: 200px;
                text-align: center;
                width: 100%;
                height: 50px;
                margin-left: auto;
                margin-right: auto;
                z-index:100;
                }
                div#wave .dot {
                display: inline-block;
                width: 12px;
                height: 12px;
                border-radius: 50%;
                margin-right: 3px;
                background: #033d5ff8;
                animation: wave 1.3s linear infinite;
                }
                div#wave .dot:nth-child(2) {
                animation-delay: -1.1s;
                }
                div#wave .dot:nth-child(3) {
                animation-delay: -0.9s;
                }

                @keyframes wave {
                0%, 60%, 100% {
                transform: initial;
                }
                30% {
                transform: translateY(-15px);
                }
                }
        </style>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/css/bootstrap-grid.css">

        <!-- Main Styles CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/css/robin.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/css/main.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/css/fonts.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <style>
            .material-icons.md-18 { font-size: 18px; }
            .material-icons.md-24 { font-size: 24px; } /* Default */
            .material-icons.md-36 { font-size: 36px; }
            .material-icons.md-48 { font-size: 48px; }
        </style>
        
        <?php 
                                      
                                      function remote_file_exists( $source, $extra_mile = 0 ) { 
     
                                        # EXTRA MILE = 0 
                                        ////////////////////////////////// Does it exist? 
                                        # EXTRA MILE = 1 
                                        ////////////////////////////////// Is it an image? 
                                             
                                            if ( $extra_mile === 1 ) { 
                                                    $img = @getimagesize($source); 
                                                     
                                                    if ( !$img ) return 0; 
                                                    else 
                                                    { 
                                                            switch ($img[2]) 
                                                            { 
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
                                            } 
                                            else 
                                            { 
                                                if (@FClose(@FOpen($source, 'r')))  
                                                            return 1; 
                                                 else 
                                                            return 0; 
                                            } 
                                    }  
                                      ?>