<!DOCTYPE html>
<html>
<head>
  <title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body >
 
<?php
    
 $answer=array();
$count = count($detail);
for ($i = 0; $i < $count; $i++) {

    ?>
            <div class="question-box content" id="content-<?php echo $i + 1; ?>" >
              <p>Q<?php echo $i + 1; ?>: <?php echo $detail[$i]['question']; ?></p>

                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_1']; ?>" <?php 
                    if(($detail[$i]['answer']== 1 && $detail[$i]['user_answer'] == 1) || ($detail[$i]['answer']!= 1 && $detail[$i]['user_answer'] == 1))
                       {echo "checked";} ?>  >
                    A.
                    <?php echo $detail[$i]['option_1']; ?> </label>
                 
                 <span id="" style="font-size: 20px;margin-left:20px; "><?php if($detail[$i]['user_answer']== 1 && $detail[$i]['answer']== 1 ){ echo "<span style='color:#40ff00'>Correct</span>"; }else if($detail[$i]['user_answer']== 1 && $detail[$i]['answer']!= 1 ){echo "<span style='color:#ff0000'>InCorrect</span>";}
                   else if(($detail[$i]['user_answer']!= 1 && $detail[$i]['answer']== 1 )  )
                    { echo "<span style='color:#40ff00'>Correct Answer</span>"; }
                 ?></span>
               </div>
              
                <div class="radio">
                  <label> 
                    <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_2']; ?>" <?php 
                    if(($detail[$i]['answer']== 2 && $detail[$i]['user_answer'] == 2)|| ($detail[$i]['answer']!= 2 && $detail[$i]['user_answer'] == 2)){ echo "checked";} ?>>
                    B.
                     <?php echo $detail[$i]['option_2']; ?>
                   </label>
                  <span id="" style="font-size: 20px;margin-left:20px;" ><?php if($detail[$i]['user_answer']== 2 && $detail[$i]['answer']== 2 ){ echo "<span style='color:#40ff00'>Correct</span>"; }else if($detail[$i]['user_answer']== 2 && $detail[$i]['answer']!= 2 ){echo "<span style='color:#ff0000'>InCorrect</span>";}
                  else if(($detail[$i]['user_answer']!= 2 && $detail[$i]['answer']== 2 )  )
                    { echo "<span style='color:#40ff00'>Correct Answer</span>"; }
                  ?>
                    
                  </span> 
                </div>
                
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_3']; ?>" <?php 
                    if(($detail[$i]['answer']== 3 && $detail[$i]['user_answer'] == 3)|| ($detail[$i]['answer']!= 3 && $detail[$i]['user_answer'] == 3)){ echo "checked";} ?>>
                    C.
                     <?php echo $detail[$i]['option_3']; ?> 
                   </label>
                <span id="" style="font-size: 20px;margin-left:20px; "><?php if($detail[$i]['user_answer']== 3 && $detail[$i]['answer']== 3 ){ echo "<span style='color:#40ff00'><span style='color:green'>Correct</span></span>"; }else if($detail[$i]['user_answer']== 3 && $detail[$i]['answer']== 3 ){echo "<span style='color:#ff0000'>Incorrect</span>";}
                 else if(($detail[$i]['user_answer']!= 3 && $detail[$i]['answer']== 3 )  )
                    { echo "<span style='color:#40ff00'>Correct Answer</span>"; }
                ?>
                  
                </span>
              </div>
                <div class="radio">
                  <label>      
                    <input type="radio" name="optionsRadios<?php echo $i + 1; ?>"  value="<?php echo $detail[$i]['option_4']; ?>" <?php 
                    if(($detail[$i]['answer']== 4 && $detail[$i]['user_answer'] == 4)|| ($detail[$i]['answer']!= 4 && $detail[$i]['user_answer'] == 4)){ echo "checked";} ?>>
                    D.
                     <?php echo $detail[$i]['option_4']; ?> 
                  </label>
                <span id="" style="font-size: 20px;margin-left:20px; "><?php if($detail[$i]['user_answer']== 4 && $detail[$i]['answer']== 4 ){ echo "<span style='color:#40ff00'>Correct</span>"; }else if($detail[$i]['user_answer']== 4 && $detail[$i]['answer']!= 4 ){echo "<span style='color:#ff0000'>InCorrect</span>";}
                   else if(($detail[$i]['user_answer']!= 4 && $detail[$i]['answer']== 4 )  )
                    { echo "<span style='color:#40ff00'>Correct Answer</span>"; }
                ?>
                  
                </span>
              </div>
            </div>

              <?php
             

            }

            ?>
    </div>

<div id='status'></div>
<script type="text/javascript">
    $("input[type=radio]").attr('disabled', true);
</script>
</body>

</html>
