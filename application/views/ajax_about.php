<?php //pre($posts['data']) ?>
<?php //pre($this->session->userdata)?>
<div class="row" >
    <div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Professional and Interests</h6>

            </div>
            <div class="ui-block-content">
                <?php if(!empty($posts['data']['user_registration_info'])){ ?>
                <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- W-Personal-Info -->
                        <ul class="widget w-personal-info item-block">
                            <li>
                                <span class="title"><?php if($posts['data']['is_expert']==1){echo 'Profession:';}else{echo 'Stream';} ?></span>
                                <span class="text"><?=$posts['data']['user_registration_info']['master_id_name']?></span>
                            </li>
                            <li>
                                <span class="title">Department:</span>
                                <span class="text"><?=$posts['data']['user_registration_info']['master_id_level_one_name']?></span>
                            </li>
                            <li>
                                <span class="title">Specialization:</span>
                                <span class="text"><?=$posts['data']['user_registration_info']['master_id_level_two_name']?></span>
                            </li>
                            <li>
                                <span class="title">Interested Courses:</span><br/>
                                
                                <?php $intrest= explode(',', $posts['data']['user_registration_info']['interested_course_text']);
                                //pre($intrest);?>
                                <?php 
                                if($posts['data']['user_registration_info']['interested_course_text']!=''){
                                foreach($intrest as $int){?>
                                <span class="" style="border: 1px solid;
	margin: 1px;
	padding:1px 2px 1px 2px;
	background-repeat: no-repeat;
	background-position: 10px center;
	border-radius: 3px;
        border-color: #000"><?=$int?></span>
                                <?php }}?>
                            </li>
                            
                        </ul>

                        <!-- ... end W-Personal-Info -->
                    </div>
<!--                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                         W-Personal-Info 

                        <ul class="widget w-personal-info item-block">
                            <li>
                                <span class="title">Favourite Music Bands / Artists:</span>
                                <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
                            </li>
                            <li>
                                <span class="title">Favourite Books:</span>
                                <span class="text">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</span>
                            </li>
                            <li>
                                <span class="title">Favourite Writers:</span>
                                <span class="text">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth. </span>
                            </li>
                            <li>
                                <span class="title">Other Interests:</span>
                                <span class="text">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.</span>
                            </li>
                        </ul>

                         ... end W-Personal-Info 
                    </div>-->
                </div>
                <?php }else{?>
                <center><h4>Nothing to show!!</h4></center>
                <?php }?>
            </div>
        </div>
        
    </div>

    <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Personal Info</h6>

            </div>
            <div class="ui-block-content">
                <!-- W-Personal-Info -->
                <ul class="widget w-personal-info">
                    <li>
                        <span class="title">Name:</span>
                        <span class="text"><?=$posts['data']['name']?></span>
                    </li>
                    
                    <li>
                        <span class="title">Email:</span>
                        <a href="mailto:<?=$posts['data']['email']?>" class="text"><?=$posts['data']['email']?></a>
                    </li>
                    <?php if(isset($this->session->userdata['id'])){
                        if($this->session->userdata['id']==$posts['data']['id']){
                    ?>
                    <li>
                        <span class="title">Mobile:</span>
                        <a href="tel:<?=$posts['data']['c_code'].$posts['data']['mobile']?>" class="text"><?='('.$posts['data']['c_code'].') '.$posts['data']['mobile']?></a>
                    </li>
                    <?php }} ?>
                    <li>
                        <span class="title">Followers:</span>
                        <span class="text"><?=$posts['data']['followers_count']?></span>
                    </li>
                    <li>
                        <span class="title">Following:</span>
                        <span class="text"><?=$posts['data']['following_count']?></span>
                    </li>                                       
                </ul>
                <!-- ... end W-Personal-Info -->
            </div>
        </div>
    </div>
</div>