<?php 
function handle($result)
{
	  $connection = @fsockopen("www.google.co.in", 80); //to check network error
            if (!$connection) {
             
                return 1;
            } else if ($result === false) //check both no result or 0
            {
             
                return 2;
            }
            return 3;
}
?>