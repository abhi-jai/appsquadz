<div class="your-profile">
	<div class="ui-block-title ui-block-title-small">
		<h6 class="title">Select Exam</h6>
	</div>

	<div class="ui-block-title">
<!--		<a href="<//?php echo base_url();?>index.php/SscCourse/" class="h6 title">All Courses</a>-->
<a href="javascript:void(0);" onclick="return allCategoryFunction(1);" class="h6 title">All Courses</a>
	</div>
	
	<?php foreach($details as $data) {
		if(!empty($data['category_info']))
		{?>

	<div class="ui-block-title">
		
		<a href="javascript:void(0);"  class="h6 title" onclick="return theFunction('<?php echo $data['category_info']['id'];?>');"><?php echo $data['category_info']['name'];?></a>
		
	</div>
	<?php } } ?>
</div>
	