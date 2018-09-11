<style>
.apiselementlink {
    height: calc(100vh - 4rem);
    overflow-y: auto;
    position: sticky;
    top: 8rem;
}
.api-cat li{
	font-size:11px;
	padding:0px 5px;
}
</style>
<div class="apiselementlink col-md-3">

<section class="panel">
	<header class="panel-heading">
		API's LIST
	</header>
	<div class="panel-body">
		<input type="text"  onkeypress="searchapi($(this).val())" class="form-control input-sm" placeholder="Keyword Search">
	</div>
	<div class="panel-body">
		<ul class="nav api-cat">
		</ul>
	</div>
</section>


</div>
<div class="api_file_meta col-md-9">
<pre style="font-family: Verdana;">    
Base URL (temp.)-: http://app.egyanshala.com/production_dams/index.php/

Base URL (client) -: http://app.egyanshala.com/index.php/

PLEASE SEND IN API HEADER To stop double session for user 
"user_id" i.e. active user id 
"device_tokken" device tokken if available 



################################  USER REGISTRATION  ################################

<h4>1) SEND OTP ON MOBILE</h4>

	Method -:      Post 
	Service url -: data_model/user/mobile_auth/send_otp 

	Input parameter -:
	##input_parm_start## 	
		mobile -> 9876543210  
	##input_parm_end##
	Response -:

	True case 
	##output_code_start## 
	{
	  "status": true,
	  "message": "OTP Sent.",
	  "data": {
	    "otp": 1234
	  },
	  "error": []
	}	
	##output_code_end## 

	False case 
	##output_code_start## 
	{
	  "status": false,
	  "message": "The mobile field is required.",
	  "data": [],
	  "error": {
	    "mobile": "The mobile field is required."
	  }
	}
	##output_code_end##
DIVDER-SEGMENT
<h4>2) VERIFY DAMS USER</h4> 

	Method -:      Post 
	Service url -: data_model/user/dams_user_verification/user_verification

	Input parameter -:	
	##input_parm_start## 
		user_tokken -> 637367  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "User verified.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "The user_tokken field is required.",
	  "data": [],
	  "error": {
	    "user_tokken": "The user_tokken field is required."
	  }
	}
	##output_code_end##

DIVDER-SEGMENT
<h4>3) REGISTER USER </h4>

	Method -:      Post 
	Service url -: data_model/user/registration/

	Input parameter -:	
	##input_parm_start## 
		name -> jhon 
		email -> jhon@gmail.com 
		mobile -> 637367  
		profile_picture -> "image url "
		is_social -> 0  // 0 for no , 1 for yes  
		device_type -> 0 // 0 for none , 1 for android , 2 for IOS  
		social_type -> 0 // 0 for none , 1 for facebook , 2 for gmail , 3 for linkedin  
		social_tokken -> 637367 
		password -> 637367 
		device_tokken -> 637367 
		dams_tokken -> 15425124
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Registration successful.",
	  "data": {
	    "id": "5",
	    "name": "vipul",
	    "profile_picture": "image url "
	    "email": "456454dd1256@gmail.comw",
	    "password": "84b519a3c5071223573c71f4a5a35b",
	    "mobile": "9988312003",
	    "gender": "male",
	    "is_social": "0",
	    "social_type": "0",
	    "social_tokken": "",
	    "device_type": "1",
	    "device_tokken": "54545",
	    "is_course_register":0 // 0 for no 1 for yes 
	    "creation_time": "1495452071"
	  },
	  "error": []
	}
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "The name field is required.",
	  "data": [],
	  "error": {
	    "name": "The name field is required.",
	    "email": "The email field is required.",
	    "mobile": "The mobile field is required.",
	    "is_social": "The is_social field is required.",
	    "device_type": "The device_type field can only have value 0 or 1 or 2",
	    "password": "The password field is required."
	  }
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>4) LOGIN USER </h4>

	Method -:      Post 
	Service url -: data_model/user/registration/login_authentication

	Input parameter -:	
	##input_parm_start## 
		email ->  456454dd1256@gmail.comw
		password -> 637367 
		is_social -> 0  // 0 for no , 1 for yes  
		device_type -> 0 // 0 for none , 1 for android , 2 for IOS  
		social_type -> 0 // 0 for none , 1 for facebook , 2 for gmail , 3 for linkedin  
		social_tokken -> 637367 
		device_tokken -> 637367 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "User authentication successful.",
	  "data": {
	    "id": "5",
	    "name": "vipul",
	    "email": "456454dd1256@gmail.comw",
	    "password": "202cb962ac59075b964b07152d234b70",
	    "mobile": "9988312003",
	    "gender": "male",
	    "is_social": "0",
	    "social_type": "0",
	    "social_tokken": "",
	    "device_type": "1",
	    "device_tokken": "54545",
	    "dams_tokken": "",
	    "is_course_register":0 // 0 for no 1 for yes 
	    "creation_time": "1495452071"
	  },
	  "error": []
	}	
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "User authentication failed.",
	  "data": [],
	  "error": []
	}
	##output_code_end##


DIVDER-SEGMENT

<h4>5) POST MCQ</h4> 

	Method -:      Post 
	Service url -: data_model/user/post_mcq/add_mcq

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		question -> What is your name ?  
		answer_one -> apple  //   
		answer_two -> mango  //   
		answer_three -> orange  //   
		answer_four -> malta  //   
		answer_five -> guava  //   
		right_answer -> answer_one // it can be answer_two,answer_three ,answer_four , answer_five  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post added.",
	  "data": [],
	  "error": []
	}	
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "Invalid input parameter.Please use post method.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>6) GET FAN WALL (MCQ,TEXT,VIDEO LINK)</h4>

	Method -:      Post 
	Service url -: data_model/fanwall/fan_wall/get_fan_wall_for_user
	
	Note -: for getting only expert post send "get_expert_post= 1" as query string  

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		last_post_id -> 1 //primary id of last post 
		tag_id -> 1 // primary id of tag
		search_text -> 'medical'
	##input_parm_end##
	Response -:

	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post found.",
	  "data": [
	    {
	      "id": "12",
	      "user_id": "9",
	      "post_type": "user_post_type_normal",
	      "is_shared": "0",
	      "parent_id": "0",
	      "likes": "1",
	      "comments": "1",
	      "share": "0",
	      "report_abuse": "0",
	      "creation_time": "1496658807165",
	      "is_liked": false,
	      "is_bookmarked": false,
	      "post_data": {
	        "id": "3",
	        "post_id": "12",
	        "text": "Hello team!!!!!!",
	        "post_text_type": "text",
	        "post_file": [
                    {
                        "id": "23",
                        "post_id": "12",
                        "file_type": "image",
                        "link": "https://s3-ap-south-1.amazonaws.com/dams-apps-production/fanwall_images/0060B70A-E594-4C33-82A2-F2D61053B610-332-00001CC6BD13403F.png",
                        "file_info": ""
                    }
	        ]
	      },
	      "post_owner_info": {
	        "id": "9",
	        "name": "pintu",
	        "profile_picture": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTziIQ3QZhnNEr4XL1Q6q4vU7XLYHsgZnMkAAx9MOfkVV774uo9",
	         "speciality": "Basic"
	      }
	    },
	    {
	      "id": "11",
	      "user_id": "2",
	      "post_type": "user_post_type_normal",
	      "is_shared": "1",
	      "parent_id": "3",
	      "likes": "1",
	      "comments": "0",
	      "share": "0",
	      "report_abuse": "0",
	      "creation_time": "1496658703953",
	      "is_liked": false,
	      "is_bookmarked": false,
	      "post_data": {
	        "id": "2",
	        "post_id": "3",
	        "text": "hello Pintu sir good morning... how are doing today",
	        "post_text_type": "text",
	        "post_file": []
	      },
	      "post_owner_info": {
	        "id": "2",
	        "name": "Sagar Khurana",
	        "profile_picture": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU3hXQPnaoLZbcxQ1z5AjSjYULCqpyd1DzussVD6W72MdBgeyd",
	         "speciality": "Basic"
	      },
	      "post_shared_of": {
	        "id": "2",
	        "name": "Sagar Khurana"
	      }
	    },
	    {
	      "id": "10",
	      "user_id": "2",
	      "post_type": "user_post_type_normal",
	      "is_shared": "1",
	      "parent_id": "1",
	      "likes": "1",
	      "comments": "0",
	      "share": "0",
	      "report_abuse": "0",
	      "creation_time": "1496657992671",
	      "is_liked": false,
	      "is_bookmarked": false,
	      "post_data": {
	        "id": "1",
	        "post_id": "1",
	        "text": "Hello Gud morning!!",
	        "post_text_type": "text",
	        "post_file": []
	      },
	      "post_owner_info": {
	        "id": "2",
	        "name": "Sagar Khurana",
	        "profile_picture": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU3hXQPnaoLZbcxQ1z5AjSjYULCqpyd1DzussVD6W72MdBgeyd",
	         "speciality": "Basic"
	      },
	      "post_shared_of": {
	        "id": "9",
	        "name": "pintu"
	      }
	    },
	    {
	      "id": "3",
	      "user_id": "2",
	      "post_type": "user_post_type_normal",
	      "is_shared": "0",
	      "parent_id": "0",
	      "likes": "1",
	      "comments": "0",
	      "share": "1",
	      "report_abuse": "0",
	      "creation_time": "1496656631646",
	      "is_liked": false,
	      "is_bookmarked": false,
	      "post_data": {
	        "id": "2",
	        "post_id": "3",
	        "text": "hello Pintu sir good morning... how are doing today",
	        "post_text_type": "text",
	        "post_file": []
	      },
	      "post_owner_info": {
	        "id": "2",
	        "name": "Sagar Khurana",
	        "profile_picture": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU3hXQPnaoLZbcxQ1z5AjSjYULCqpyd1DzussVD6W72MdBgeyd",
	         "speciality": "Basic"
	      }
	    },
		{
	      "id": "32",
	      "user_id": "9",
	      "post_type": "user_post_type_mcq",
	      "is_shared": "0",
	      "parent_id": "0",
	      "likes": "0",
	      "comments": "0",
	      "share": "0",
	      "report_abuse": "0",
	      "creation_time": "1496814090741",
	      "is_liked": false,
	      "is_bookmarked": false,
	      "post_data": {
	        "id": "13",
	        "post_id": "32",
	        "question": "Hello team!!!!!!",
	        "answer_one": "Rerewrewr",
	        "answer_two": "Rewrwerewrewr",
	        "answer_three": "Rewrewrew",
	        "answer_four": "Rewrewrew",
	        "answer_five": "Rewrtytrytrytryt",
	        "right_answer": "answer_three",
	        "status": "0",
	        "answer_given_by_user": "answer_three",
	        "post_file": []
	      },
	      "post_owner_info": {
	        "id": "9",
	        "name": "pintu",
	        "profile_picture": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTziIQ3QZhnNEr4XL1Q6q4vU7XLYHsgZnMkAAx9MOfkVV774uo9",
	         "speciality": "Basic"
	      }
	    }
	  ],
	  "error": []
	}
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "No post found.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>7) LIKE POST</h4>

	Method -:      Post 
	Service url -: data_model/user/post_like/like_post

	Input parameter -:
	##input_parm_start## 	
		user_id -> 1  // primary id of logged in user  
		post_id -> 1  // primary id of Post  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post liked.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "Post Already liked.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>8) DISLIKE POST </h4>

	Method -:      Post 
	Service url -: data_model/user/post_like/dislike_post

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		post_id -> 1  // primary id of Post  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post disliked.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

	False case
	##output_code_start##
	{
	  "status": false,
	  "message": "",
	  "data": [],
	  "error": []
	}	
	##output_code_end##
DIVDER-SEGMENT

<h4>9) ADD COMMENT </h4>

	Method -:      Post 
	Service url -: data_model/user/post_comment/add_comment

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		post_id -> 1  // primary id of Post 
		comment -> "send text here" 
		parent_id -> 1 // if comment is sub comment of another comment 
	##input_parm_end##
		Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment added.",
	  "data": [],
	  "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>10) EDIT COMMENT </h4>

	Method -:      Post 
	Service url -: data_model/user/post_comment/update_comment

	Input parameter -:	
	##input_parm_start## 
		id-> 1 // primary key of comment 
		user_id -> 1  // primary id of logged in user  
		post_id -> 1  // primary id of Post 
		comment -> "send text here" 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment updated.",
	  "data": [],
	  "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>11) DELETE COMMENT </h4>

	Method -:      Post 
	Service url -: data_model/user/post_comment/delete_comment

	Input parameter -:	
	##input_parm_start## 
		id-> 1 // primary key of comment 
		user_id -> 1  // primary id of logged in user  
		post_id -> 1  // primary id of Post 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment deleted.",
	  "data": [],
	  "error": []
	}	
	##output_code_end##

DIVDER-SEGMENT

<h4>12) GET POST COMMENT LIST </h4> 

	Method -:      Post 
	Service url -: data_model/user/post_comment/get_post_comment

	Input parameter -:	
	##input_parm_start## 
		post_id -> 1  // primary id of Post 
		last_comment_id ->30  // primary id of comment 
		parent_id -> 1 // if get comment of a comment  
	##input_parm_end##
		Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment details.",
	  "data": [
	    {
	      "id": "1",
	      "post_id": "1",
	      "user_id": "2",
	      "comment": "Bhai text to sahi se likho",
	      "time": "1496391315",
	      "name": "Priyanka Shukla",
	      "profile_picture": "http://www.mba.hec.edu/var/hec_mba/storage/images/student-life/student-profiles/adriaan-tan/325289-1-eng-GB/Adriaan-TAN_profile_image-HEC-Paris-MBA.jpg"
	    }
	  ],
	  "error": []
	}
	##output_code_end##	
	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "No comment found.",
	  "data": [],
	  "error": []
	}		
	##output_code_end##
DIVDER-SEGMENT

<h4>13) SHARE POST </h4> 

	Method -:      Post 
	Service url -: data_model/user/post_share/share_post

	Input parameter -:	
	##input_parm_start## 
		post_id -> 1  // primary id of Post 
		user_id -> 1  // primary id of logged in user
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post Shared.",
	  "data": [],
	  "error": []
	}	
	##output_code_end##


DIVDER-SEGMENT

<h4>14) ADD NORMAL POST (text/video_link)</h4>

	Method -:      Post 
	Service url -: data_model/user/post_text/add_post

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user
		text -> "hello good morning " // string 
		post_type -> "text" //  or "video" with video link 
		video_link -> "https://www.youtube.com/watch?v=eRb3AeDwgkQ"
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post added.",
	  "data": [],
	  "error": []
	}	
	##output_code_end##
DIVDER-SEGMENT

<h4>15) PEOPLE YOU MAY KNOW</h4>

	Method -:      Post 
	Service url -: data_model/fanwall/people_you_may_know/get_list

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "People found",
	  "data": [
	    {
	      "id": "1",
	      "name": "pintu",
	      "profile_picture": "http://www.mba.hec.edu/var/hec_mba/storage/images/student-life/student-profiles/adriaan-tan/325289-1-eng-GB/Adriaan-TAN_profile_image-HEC-Paris-MBA.jpg"
	    }
	  ],
	  "error": []
	}
	##output_code_end##
	False case
	##output_code_start##
	{
	  "status": false,
	  "message": "People not found",
	  "data": [],
	  "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>16) ADD TO BOOKMARKS </h4>

	Method -:      Post 
	Service url -: data_model/user/post_bookmarks/add_to_bookmarks

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user
		post_id -> 1  // primary id of logged in user
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post added to bookmarks",
	  "data": [],
	  "error": []
	}	
	##output_code_end##
	False case
	##output_code_start##
	{
	  "status": false,
	  "message": "Post already added to bookmarks",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>17) REMOVE FROM BOOKMARKS </h4>

	Method -:      Post 
	Service url -: data_model/user/post_bookmarks/remove_from_bookmarks

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user
		post_id -> 1  // primary id of logged in user
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post removed from bookmarks.",
	  "data": [],
	  "error": []
	}	
	##output_code_end##


DIVDER-SEGMENT

<h4>18) SEND OTP FOR FORGET PASSWORD</h4>

	Method -:      Post 
	Service url -: data_model/user/Mobile_auth/send_otp_for_change_password

	Input parameter -:	
	##input_parm_start## 
		mobile -> 9876543210
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "OTP Sent.",
	  "data": {
	    "otp": 1234
	  },
	  "error": []
	}
	##output_code_end##
	False case
	##output_code_start##
	{
	  "status": false,
	  "message": "This mobile number is not valid or registred with social login.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>19) UPDATE PASSWORD WITH MOBILE OTP</h4>

	Method -:      Post 
	Service url -: data_model/user/registration/update_password_via_otp

	Input parameter -:	
	##input_parm_start## 
		password -> P)QWE#$  
		mobile -> 9876543210
		otp -> 1234  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Password updated",
	  "data": [],
	  "error": []
	}	
	##output_code_end##
	False case
	##output_code_start##
	{
	  "status": false,
	  "message": "Invalid otp.",
	  "data": [],
	  "error": []
	}
	##output_code_end##


DIVDER-SEGMENT

<h4>20) SUBMIT ANSWER TO POST TYPE MCQ </h4>

	Method -:      Post 
	Service url -: data_model/user/post_mcq/answer_post_mcq

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  
		mcq_id -> 1
		answer -> "answer_one"  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Answer saved successfully.",
		"data": [],
		"error": []
	}	
	##output_code_end##
	False case
	##output_code_start##
	{
		"status": false,
		"message": "You already submit your answer",
		"data": [],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>21) REPORT ABUSE A POST</h4>

	Method -:      Post 
	Service url -: data_model/user/Post_report_abuse/report

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  
		post_id -> 1
		reason_id -> 1 // primary key of reason 
		comment -> "send text here "
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Post Reported.",
		"data": [],
		"error": []
	}	
	##output_code_end##
	False case
	##output_code_start##
	{
		"status": false,
		"message": "This post is already reported",
		"data": [],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>22) GET SINGLE POST FOR USER ID </h4>

	Method -:      Post 
	Service url -: data_model/fanwall/fan_wall/get_single_post_data_for_user

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  
		post_id -> 1
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Post",
		"data": { postDATA here........  
		},
		"error": []
	}
	##output_code_end##
	False case
	##output_code_start##
	{
		"status": false,
		"message": "",
		"data": [],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>23) SUBMIT USER QUERY </h4>

	Method -:      Post 
	Service url -: data_model/user/user_queries/submit_query

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  
		category -> "General"
		title -> "text"
		description -> "text"
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Query submitted.",
		"data": [],
		"error": []
	}
	##output_code_end##

	False case
	##output_code_start##
	{
		"status": false,
		"message": "Invalid input parameter.Please use post method.",
		"data": [],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>24) GET RANDOM BANNER IMAGE </h4>

	Method -:      GET 
	Service url -: data_model/fanwall/Fan_wall_banner/get_fan_wall_banner
##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Banner",
	    "data": {
	        "id": "1",
	        "image_link": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/banner_images/1456470fugenx.png",
	        "web_link": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/banner_images/1456470fugenx.png",
	        "creation_time": ""
	    },
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>25) GET BOOKMARKS LIST WITH PAGINATION </h4>

	Method -:      POST 
	Service url -: data_model/fanwall/fan_wall/get_fan_wall_for_user?bookmark_request=yes
	
	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		last_post_id -> 1 //primary id of last post 
	##input_parm_end##
	Response -:
	True case 
	##output_code_start##
	{
	    "status": true,
	    "message": "POST FOUND",
	    "data": {
	    	post data like fan wall .........
	    },
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>26) GET ACTIVE USER DATA</h4>

	Method -:      GET
	Service url -: data_model/user/Registration/get_active_user/$ID
	
	Input parameter -:	
	##input_parm_start## 
		Pass primary id of user In place of $ID in url 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "",
	    "data": {
	        "id": "13",
	        "name": "Boom Boom",
	        "profile_picture": "https://scontent.xx.fbcdn.net/v/t1.0-1/16996215_154525478393803_3357186818964915649_n.jpg?oh=383075ce6620cdc3216d8a3264b50d40&oe=59E50918",
	        "email": "boomapp2017@gmail.com",
	        "password": "d41d8cd98f00b204e9800998ecf8427e",
	        "mobile": "1111222233",
	        "gender": "male",
	        "is_social": "1",
	        "social_type": "1",
	        "social_tokken": "217745808738436",
	        "device_type": "1",
	        "device_tokken": "984f1609baf9038d",
	        "dams_tokken": "",
	        "is_course_register": "1",
	        "creation_time": "1497448668061",
	        "followers_count": "0",
	        "following_count": "0",
	        "otp": "",
	        "user_registration_info": {
	            "id": "13",
	            "user_id": "17",
	            "master_id": "1",
	            "master_id_level_one": "2",
	            "master_id_level_two": "2",
	            "optional_text": "",
	            "interested_course": "2"
	        }
	    },
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>27) FOLLOW USER </h4>

	Method -:      POST 
	Service url -: data_model/user/user_follow/follow_user
	
	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of user who is get follower 
		follower_id -> 2 //primary id of user who want to follow
	##input_parm_end##
	Response -:
	True case 
	##output_code_start##		
		{
		    "status": true,
		    "message": "User Followed",
		    "data": {
		    },
		    "error": []
		}
	##output_code_end##

DIVDER-SEGMENT

<h4>28) UNFOLLOW USER </h4>

	Method -:      POST 
	Service url -: data_model/user/user_follow/unfollow_user
	
	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of user who was followed  
		follower_id -> 2 //primary id of user who was follow
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "User Unfollowed",
		"data": {
		},
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>29) GET USER INFORMATION ON FOLLOWING PAGE </h4>		


	Method -:      GET
	Service url -: data_model/user/Registration/get_active_user/$ID
	

	Input parameter -:	
	##input_parm_start## 
		pass primary key of user id whom information you want in place of  $ID in service url  
		is_watcher : primary id of user who want see another user  
	##input_parm_end##
	Response -:
	True case
	##output_code_start##
	{
	    "status": true,
	    "message": "",
	    "data": {
	        "id": "13",
	        "name": "Boom Boom",
	        "profile_picture": "https://scontent.xx.fbcdn.net/v/t1.0-1/16996215_154525478393803_3357186818964915649_n.jpg?oh=383075ce6620cdc3216d8a3264b50d40&oe=59E50918",
	        "email": "boomapp2017@gmail.com",
	        "password": "d41d8cd98f00b204e9800998ecf8427e",
	        "mobile": "1111222233",
	        "gender": "male",
	        "is_social": "1",
	        "social_type": "1",
	        "social_tokken": "217745808738436",
	        "device_type": "1",
	        "device_tokken": "984f1609baf9038d",
	        "dams_tokken": "",
	        "is_course_register": "1",
	        "creation_time": "1497448668061",
	        "followers_count": "0",
	        "following_count": "0",
	        "otp": "",
	        "user_registration_info": {
	            "id": "13",
	            "user_id": "17",
	            "master_id": "1",
	            "master_id_level_one": "2",
	            "master_id_level_two": "2",
	            "optional_text": "",
	            "interested_course": "2"
	        }
	        "is_following": false
	    },
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>30) GET ALL POST WITH PAGINATION OF OTHER USER W.R.T active USER</h4>

	Method -:      POST 
	Service url -: /data_model/fanwall/fan_wall/get_fan_wall_for_user?is_watcher=$ID

	NOTE -: send active user id in place of $ID 

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of user whom post you want to see   
		last_post_id -> 1 //primary id of last post 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "POST FOUND",
	    "data": {
	    	post data like fan wall .........
	    },
	    "error": []
	}
	##output_code_end##


DIVDER-SEGMENT

<h4>31) GET List of a user following W.R.T active USER</h4>

	Method -:      POST 
	Service url -: data_model/user/user_follow/following_list?is_watcher=$ID

	NOTE -: send active user id in place of $ID 

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of user whom followeing you want to see   
		last_follow_id -> "" // send blank for latest 
	##input_parm_end##	
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "POST FOUND",
	    "data": [
				{
		            "id": "1",
		            "user_id": "48",
		            "follower_id": "56",
		            "creation_time": "1498147760770",
		            "action": "0",
		            "viewable_user": {
		                "id": "48",
		                "name": "DR. HARSHA B",
		                "profile_picture": ""
		            },
		            "watcher_following": true
		        },......
	    ]
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>32) GET List of a user followers W.R.T active USER</h4>

	Method -:      POST 
	Service url -: data_model/user/user_follow/followers_list?is_watcher=$ID

	NOTE -: send active user id in place of $ID 

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of user whom follower you want to see   
		last_follow_id -> "" // send blank for latest
	##input_parm_end##		
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Followers List.",
	    "data": [
				{
		            "id": "1",
		            "user_id": "48",
		            "follower_id": "56",
		            "creation_time": "1498147760770",
		            "action": "0",
		            "viewable_user": {
		                "id": "48",
		                "name": "DR. HARSHA B",
		                "profile_picture": ""
		            },
		            "watcher_following": true
		        },......
	    ]
	    "error": []
	}
	##output_code_end##

<h4>33) EDIT SIMPLE POST TYPE TEXT </h4>

	Method -:      POST 
	Service url -: data_model/user/post_text/edit_post

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of user  
		post_id -> 1
		post_type -> "text"
		text -> "hi how are you "
		file -> SEND HERE JSON OF FILES COLECTION 
		post_tag-> 1 // primary id of post tag 
		delete_meta -> 1,2,3 // primary key of file meta 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Post updated.",
	    "data": [],
	    "error": []
	}
	##output_code_end##
	False case
	##output_code_start##
	{
	    "status": true,
	    "message": "Post updated.",
	    "data": [],
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>34) EDIT POST MCQ </h4>

	Method -:      Post 
	Service url -: data_model/user/post_mcq/edit_mcq

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		post_id -> 1  // primary key of post id 
		question -> What is your name ?  
		answer_one -> apple  //   
		answer_two -> mango  //   
		answer_three -> orange  //   
		answer_four -> malta  //   
		answer_five -> guava  //   
		right_answer -> answer_one // it can be answer_two,answer_three ,answer_four , answer_five  
		file -> SEND HERE JSON OF FILES COLECTION 
		post_tag-> 1 // primary id of post tag 
		delete_meta -> 1,2,3 // primary key of file meta 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Post updated.",
	  "data": [],
	  "error": []
	}	
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "Invalid input parameter.Please use post method.",
	  "data": [],
	  "error": []
	}
	##output_code_end##


DIVDER-SEGMENT

<h4>35) GET POST TAGS</h4> 

	Method -:      GET 
	Service url -: data_model/user/post_meta_tags/get_list_tags/$ID

	NOTE -: send active user id in place of $ID 

	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Tags list",
	    "data": [
		        {
		            "id": "1",
		            "text": "General Medicine",
		            "status": "0"
		        },
		        {
		            "id": "2",
		            "text": "Paediatrics",
		            "status": "0"
		        },
		 			....
		    ],
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>36) GET NOTIFICATION </h4>

	Method -:      POST 
	Service url -: data_model/notification_genrator/activity_logger/get_user_activity

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		last_activity_id -> '' //empty for latest or send last activity primary id  
	
	* IN THE FOLLOWING CASE YOU WILL GET user_id IN PLACE OF post_id key 
	##input_parm_end##	
	Response -:
	True case 
	##output_code_start##	
	{
	    "status": true,
	    "message": "Tags list",
	    "data": [
		        {
		            "id": "17",
		            "action_performed_by": {
		                "id": "5",
		                "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/5_1499784050475_image.jpg",
		                "name": "Sagar Khurana"
		            },
		            "view_state": 0 // 0 for not viwed , 1 for viewed 
		            "creation_time": "1499860416591",
		            "activity_type": "post_comment",
		            "post_id": "80"
		        },
		        {
		            "id": "10",
		            "action_performed_by": {
		                "id": "5",
		                "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/5_1499784050475_image.jpg",
		                "name": "Sagar Khurana"
		            },
		            "view_state": 0 // 0 for not viwed , 1 for viewed 
		            "creation_time": "1499858138555",
		            "activity_type": "post_comment",
		            "post_id": "80"
		        },
		        {
		            "id": "9",
		            "action_performed_by": {
		                "id": "5",
		                "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/5_1499784050475_image.jpg",
		                "name": "Sagar Khurana"
		            },
		            "view_state": 0 // 0 for not viwed , 1 for viewed 
		            "creation_time": "1499857635265",
		            "activity_type": "post_comment",
		            "post_id": "75"
		        }
		 			....
		    ],
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>37) GET NOTIFICATION</h4> 

	Method -:      POST 
	Service url -: data_model/notification_genrator/activity_logger/make_activity_viewed

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		id -> '' //primary key of notification i.e. id 
	##input_parm_end##	
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "",
	    "data": [],
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>38) GET NOTIFICATION COUNT</h4>

	Method -:      POST 
	Service url -: data_model/notification_genrator/activity_logger/all_notification_counter

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
	##input_parm_end##	
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Counter",
	    "data": {
	        "counter": 17
	    },
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT
<h4>39) REGISTER/lOGIN USER WITH DAMS TOKKEN </h4>

	Method -:      Post 
	Service url -: data_model/user/registration/dams_auth

	Input parameter -:	
	##input_parm_start## 
		dams_username -> DL35625 
		dams_password -> $#dams@987! 
		is_social -> 0  // 0 for no , 1 for yes  
		device_type -> 1 // 0 for none , 1 for android , 2 for IOS  
		device_tokken -> fvAXGuQInbo:APA91bGU0B573QqjclwOSMq6AHoWq1t0wliGC2MkXIP1RMseL9gucIu0u5rEzJIJ1-aEo2J7_8_SsEkB9PzuIbrlTZrzq53hFW2IWPwu8P1rsqN7yI5G_kWKAFbJIM9lgclhbKw6h98I 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "User authentication successful.",
	    "data": {
	        "id": "40",
	        "name": "PRIYA GARG",
	        "profile_picture": "",
	        "email": "mohammaad.saddam@gmail.com",
	        "password": "",
	        "mobile": "9813659239",
	        "gender": "male",
	        "is_social": "0",
	        "social_type": "0",
	        "social_tokken": "",
	        "device_type": "1",
	        "device_tokken": "fvAXGuQInbo:APA91bGU0B573QqjclwOSMq6AHoWq1t0wliGC2MkXIP1RMseL9gucIu0u5rEzJIJ1-aEo2J7_8_SsEkB9PzuIbrlTZrzq53hFW2IWPwu8P1rsqN7yI5G_kWKAFbJIM9lgclhbKw6h98I",
	        "dams_tokken": "35625",
	        "is_course_register": "0",
	        "creation_time": "1502454046264",
	        "followers_count": "0",
	        "following_count": "0",
	        "post_count": "0",
	        "otp": "",
	        "status": "0",
	        "user_registration_info": null
	    },
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT
<h4>40) UPDATE DEVICE INFO (via device)</h4>

	Method -:      Post 
	Service url -: data_model/user/registration/update_device_info

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of active user id  
		device_type -> 1 // 0 for none , 1 for android , 2 for IOS  
		device_tokken -> fvAXGuQInbo:APA91bGU0B573QqjclwOSMq6AHoWq1t0wliGC2MkXIP1RMseL9gucIu0u5rEzJIJ1-aEo2J7_8_SsEkB9PzuIbrlTZrzq53hFW2IWPwu8P1rsqN7yI5G_kWKAFbJIM9lgclhbKw6h98I 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Device info updated.",
	    "data": [],
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT
<h4>41) UPDATE DAMS ROLL NUMBER (via device)</h4>

	Method -:      Post 
	Service url -: data_model/user/registration/update_dams_id_user

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of active user id  
		dams_username -> DL35625 
		dams_password -> $#dams@987! 
	##input_parm_end##
	Response -:
	True case 
	##output_code_start##	
	{
	    "status": true,
	    "message": "Dams roll number updated successfully.",
	    "data": {
	        "id": "1",
	        "name": "Vipul sharma",
	        "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/1_1499413768242_image.jpg",
	        "email": "vipulkumar0014@gmail.com",
	        "password": "25d55ad283aa400af464c76d713c07ad",
	        "mobile": "9821260830",
	        "gender": "male",
	        "is_social": "0",
	        "social_type": "0",
	        "social_tokken": "",
	        "device_type": "1",
	        "device_tokken": "eDG2eXbkN8U:APA91bHdLsdT_w5Bg5jNPt64wZpMong-PQ9RGdYUZd5mic_aN61LkwUGWUx3xXVsBiayYRXCLVcOwEZKEtaUBaORZvK24_7Br0Oi_Fslbd1OF1MLkRfocWo-rTbRHLkgiDZTswYxlmOG",
	        "dams_tokken": "35625",
	        "is_course_register": "1",
	        "creation_time": "1499413734490",
	        "followers_count": "5",
	        "following_count": "3",
	        "post_count": "12",
	        "otp": "",
	        "status": "0",
	        "is_live_agent": "0",
	        "user_registration_info": {
	            "id": "1",
	            "user_id": "1",
	            "master_id": "1",
	            "master_id_level_one": "2",
	            "master_id_level_two": "2",
	            "optional_text": "",
	            "interested_course": "1",
	            "master_id_name": "Medical",
	            "master_id_level_one_name": "Undergraduate student (MBBS)",
	            "master_id_level_two_name": "Basic",
	            "interested_course_text": "NEET PG"
	        }
	    },
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT
<h4>42) DELETE POST </h4>

	Method -:      Post 
	Service url -: data_model/user/Post_delete/delete_post

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of active user id  i.e. post owner 
		post_id -> 1 // primary key of post 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Post deleted.",
	    "data": [],
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>43) SET ALL NOTIFICATION AS READ </h4>

	Method -:      Post 
	Service url -: data_model/notification_genrator/Activity_logger/set_all_read

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of active user id 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "All notification set as read.",
	    "data": [],
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>44) GET ALL USER-POST-LIKED LIST WITH PAGINATION  </h4> 

	Method -:      Post 
	Service url -: data_model/user/post_like/get_post_like_users?is_watcher=$ID

	NOTE -: send primary key of user who is watching this in place of $ID

	Input parameter -:	
	##input_parm_start## 
		post_id -> 1 // primary key of post
		last_id -> 20 // primary key of liked array which is "id" 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##	
	{
	    "status": true,
	    "message": "User List.",
	    "data": [
	        {
	            "id": "4",
	            "post_id": "6",
	            "user_id": "4",
	            "creation_time": "1498645519846",
	            "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/4_1505918790744_image.jpg",
	            "name": "Dr Devendra singh",
	            "is_follow": "1"
	        },
	        {
	            "id": "5",
	            "post_id": "6",
	            "user_id": "3",
	            "creation_time": "1498645959182",
	            "profile_picture": "",
	            "name": "Sagar",
	            "is_follow": "0"
	        },
	        {
	            "id": "44",
	            "post_id": "6",
	            "user_id": "15",
	            "creation_time": "1500044566772",
	            "profile_picture": "",
	            "name": "Binni",
	            "is_follow": "0"
	        }
	    ],
	    "error": []
	}
	##output_code_end##
	
DIVDER-SEGMENT

<h4>45) GET SINGLE COMMENT DATA </h4>
	Method -:      Post 
	Service url -: data_model/user/post_comment/get_single_comment_data

	Input parameter -:	
	##input_parm_start## 
		comment_id -> 1 // primary key of post
	##input_parm_end##	 
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Comment details.",
	    "data": {
	        "id": "3059",
	        "post_id": "1342",
	        "user_id": "1671",
	        "comment": "great",
	        "time": "1506326211892",
	        "name": "Sagar Khurana",
	        "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/1671_1505909985319_image.jpg",
	        "tagged_people": [
	            {
	                "id": "4",
	                "name": "Dr Devendra singh",
	                "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/4_1505918790744_image.jpg"
	            },
	            {
	                "id": "13841",
	                "name": "Himadri Pandey",
	                "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/13841_1505456501473_image.jpg"
	            }
	        ]
	    },
	    "error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>46) SEND OTP FOR CHANGE MOBILE </h4>
	Method -:      Post 
	Service url -: data_model/user/mobile_auth/send_otp_for_mobile_change

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of post
		mobile -> 9988776655 
	##input_parm_end##	
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "OTP Sent.",
		"data": {
			"otp": 6744
		},
		"error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>47) UPDATE MOBILE AFTER CHECKING OTP</h4>
	Method -:      Post 
	Service url -: data_model/user/User_mobile_change/update_mobile_number

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of post
		mobile -> 9988776655 
	##input_parm_end##	
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Mobile number updated successfully..",
		"data": [],
		"error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>48) REPORT ABUSE A POST RESONS LIST </h4>

	Method -:      Post 
	Service url -: data_model/user/Post_report_abuse/get_all_report_reasons

	Input parameter -:	 
		
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Report Reasons",
		"data": {
			"report_reasons": [
				{
					"id": "1",
					"reason": "Report Reason 1"
				},
				{
					"id": "2",
					"reason": "Report Reason 2"
				}
			]
		},
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>49) MASTER HIT </h4>

	Method -:      Post 
	Service url -: data_model/fanwall/master_hit/content

	Input parameter -:	
	##input_parm_start## 
	user_id :1 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
    "status": true,
    "message": "Master hit content",
    "data": {
        "people_you_may_know_list": [
            {
                "id": "13901",
                "name": "Shashank Shekhar Singh",
                "profile_picture": "https://scontent.xx.fbcdn.net/v/t31.0-1/c0.0.720.720/p720x720/20229502_1396081700427876_8266667316481530923_o.jpg?oh=4c1a2db5bcbb649d7053c3b5a0022617&oe=5AC27417"
            },
            ...........
        ],
        "expert_list": [
			{
                "id": "13901",
                "name": "Shashank Shekhar Singh",
                "profile_picture": "https://scontent.xx.fbcdn.net/v/t31.0-1/c0.0.720.720/p720x720/20229502_1396081700427876_8266667316481530923_o.jpg?oh=4c1a2db5bcbb649d7053c3b5a0022617&oe=5AC27417"
            },
            ...........
		],
        "banner_list": [
            {
                "id": "2",
                "banner_title": "Emedicoz",
                "image_link": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/banner_images/52124976.png",
                "web_link": "http://emedicoz.com/",
                "text": "This is for testing the text on the advertisement section. please test this on local server. This is for testing the text on the advertisement section. please test this on local server.This is for testing the text on the advertisement section. please test this on local server.",
                "from_date": "1506454740000",
                "to_date": "1517340900000",
                "creation_time": ""
            },
            .............
        ]
    },
    "error": []
}
	##output_code_end##
DIVDER-SEGMENT

<h4>49) ONCLICK ADVERTISMENT ACTION  </h4>

	Method -:      Post 
	Service url -: data_model/fanwall/Fan_wall_banner/update_banner_hit_count

	Input parameter -:	
	##input_parm_start## 
	banner_id :1 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{    
		"status": true,   
		"message": "Banner hit count",
		"data": {
				"banner_hit_count": 2   
				 },
		"error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>50) SET POST AS PINNED</h4>  

	Method -:      Post 
	Service url -: data_model/user/post_pinning/pin_a_post

	Input parameter -:	
	##input_parm_start## 
	user_id :1 
	post_id : 1
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{    
		"status": true,   
		"message": "Post pinned successfully.",
		"data": [],
		"error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>51) REMOVE POST AS PINNED  </h4>

	Method -:      Post 
	Service url -: data_model/user/Post_pinning/pin_a_post_remove

	Input parameter -:	
	##input_parm_start## 
	user_id :1 
	post_id : 1
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{    
		"status": true,   
		"message": "Post removed from pinned successfully.",
		"data": [],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>52) GET USER NOTIFICATION SETTING</h4>

	Method -:      Post 
	Service url -: data_model/user/registration/user_notification_settings

	Input parameter -:
	##input_parm_start## 
	user_id :1 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "User notification settings.",
		"data": {
			"id": "1",
			"user_id": "1",
			"post_like_notification": "1",
			"comment_on_post_notification": "1",
			"tag_notification": "1",
			"follow_notification": "1",
			"other_notification": "1"
		},
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>53) EDIT USER NOTIFICATION SETTING</h4>

	Method -:      Post 
	Service url -: data_model/user/registration/edit_user_notification

	Input parameter -:	
	##input_parm_start## 
	user_id :1 
	option : key name which you want to edit 
	option_value : 0 for off and 1 for on 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "User notification updated.",
		"data": [],
		"error": []
	}
	##output_code_end##

	DIVDER-SEGMENT

<h4>54) MAKE USER EXPERT</h4>

	Method -:      Post 
	Service url -: data_model/user/user_expert_control/make_user_expert

	Input parameter -:	
	##input_parm_start## 
	user_id :1 // primary id of active user  
	user_for :  2 //  primary id of user whom you want to make expert  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Expert role assigned to user.",
		"data": [],
		"error": []
	}
	##output_code_end##

	DIVDER-SEGMENT

<h4>55) REMOVE USER EXPERT ROLE</h4>

	Method -:      Post 
	Service url -: data_model/user/user_expert_control/remove_user_expert

	Input parameter -:	
	##input_parm_start## 
	user_id :1 // primary id of active user  
	user_for :  2 //  primary id of user whom you want to make expert  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Expert role removed from user.",
		"data": [],
		"error": []
	}
	##output_code_end##

	DIVDER-SEGMENT

	<h4>56) GET USER REFERCODE & REWARD POINT</h4>

	Method -:      Post 
	Service url -: data_model/user/user_reward/get_user_rewards

	Input parameter -:	
	##input_parm_start## 
	user_id :1 // primary id of active user  

	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "User info.",
		"data": {
			"id": "1",
			"reward_points": "0",
			"refer_code": "cJinsO9"
		},
		"error": []
	}
	##output_code_end##
	False case  
	##output_code_start##
	{
		"status": false,
		"message": "User information not found.",
		"data": [],
		"error": []
	}
	##output_code_end##
	DIVDER-SEGMENT	

	
	<h4>57) GET REWARD TRANSACTION</h4>

	Method -:      Post 
	Service url -: data_model/user/user_reward/get_reward_transaction

	Input parameter -:	
	##input_parm_start## 
	user_id :1 // primary id of active user  
	last_id : 25 // send blank for first time else send pk of block 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Reward transaction info.",
		"data": [
			{
				"id": "20",
				"user_id": "1671",
				"area": "USER_FOLLOW",
				"reward": "5.00",
				"creation_time": "1517999385538"
			},
			{
				"id": "19",
				"user_id": "1671",
				"area": "USER_FOLLOW",
				"reward": "5.00",
				"creation_time": "1517998473103"
			},
				..................
		],
		"error": []
	}
	##output_code_end##

	DIVDER-SEGMENT	
################################  CATEGORY HANDLING ################################

1) GET BASIC COURSE LIST ( AT ZERO LEVEL)

	Method -:      GET 
	Service url -: data_model/user/User_category_handling/get_category_basic

	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "List fetched.",
	  "data": [
	    {
	      "id": "1",
	      "text": "Medical",
	      "visibilty": "0"
	    },
	    {
	      "id": "2",
	      "text": "Dental",
	      "visibilty": "0"
	    },
	    {
	      "id": "3",
	      "text": "Other",
	      "visibilty": "0"
	    }
	  ],
	  "error": []
	}
	##output_code_end##
	DIVDER-SEGMENT

<h4>2) GET BASIC COURSE LIST  ( AT FIRST LEVEL)</h4>

	Method -:      GET 
	Service url -: data_model/user/User_category_handling/get_category_basic_level_one/$ID
	
	NOTE-: In url pass parent id in place of $ID e.g data_model/user/User_category_handling/get_category_basic_level_one/2

	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "List fetched.",
	  "data": [
	    {
	      "id": "1",
	      "parent_id": "2",
	      "text": "Undergraduate / BDS",
	      "visibilty": "0"
	    }
	  ],
	  "error": []
	}
	##output_code_end##
	DIVDER-SEGMENT

<h4>3) GET SPECIALIZATION  ( AT SECOND LEVEL)</h4>

	Method -:      GET 
	Service url -: data_model/user/User_category_handling/get_category_basic_level_two/$ID
	
	NOTE-: In url pass parent id in place of $ID e.g data_model/user/User_category_handling/get_category_basic_level_two/1

	Response -:
	True case 
	##output_code_start##
	{
	  "status": true,
	  "message": "List fetched.",
	  "data": [
	    {
	      "id": "1",
	      "parent_id": "2",
	      "text": "Undergraduate / BDS",
	      "visibilty": "0"
	    }
	  ],
	  "error": []
	}
	##output_code_end##
	DIVDER-SEGMENT

<h4>4) GET COURSE INTERSTED IN </h4>

	Method -:      GET 
	Service url -: data_model/user/User_category_handling/get_intersted_courses/$ID
	
	NOTE-: In url pass parent id in place of $ID e.g data_model/user/User_category_handling/get_intersted_courses/1

	Response -:
	##output_code_start##
	{
	  "status": true,
	  "message": "List fetched.",
	  "data": [
    	{
      "Graduate": [
	    {
	      "id": "1",
	      "parent_id": "1",
	      "text": "NEET PG"
	    },
	    {
	      "id": "2",
	      "parent_id": "1",
	      "text": "AIIMS PG "
	    },
	    {
	      "id": "3",
	      "parent_id": "1",
	      "text": "PGI Chandigarh"
	    },
	    {
	      "id": "4",
	      "parent_id": "1",
	      "text": "JIMPER PG"
	    },
	    {
	      "id": "5",
	      "parent_id": "1",
	      "text": "NIMHANS"
	    }
	  ]
    },
    {
      "Post Graduate": [
        {
          "id": "6",
          "parent_id": "2",
          "text": "NEET PG"
        },
        {
          "id": "7",
          "parent_id": "2",
          "text": "DNB PD"
        },
        {
          "id": "8",
          "parent_id": "2",
          "text": "CET FNB"
        },
        {
          "id": "9",
          "parent_id": "2",
          "text": "Fellowship outside India"
        }
      ]
    },
    .....
  ],
  "error": []
}
	##output_code_end##

5) SAVE DATA/UPDATE  OF USER COURSE REGISTRATION 

	Method -:      POST
	Service url -: data_model/user/registration/stream_registration

	Input parameter -:
	##input_parm_start## 	
		user_id -> 1 // primary key of logged in user   
		master_id -> 1
		master_id_level_one -> 1
		master_id_level_two -> 1 
		optional_text -> "home science"
		interested_course -> 1,2,3,4,5 // comma seprated id of courses 	
		profile_picture -> picture url 
		name -> name of user 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Record saved.",
	  "data": [],
	  "error": []
	}
	##output_code_end##
	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "User already regiter.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

	DIVDER-SEGMENT

<h4>6 ) MASTER HIT FOR CATEGORIES </h4>

	Method -:      POST
	Service url -: data_model/user/registration/get_all_category_db

	Response -:
	True case  
	##output_code_start##
	{
    "status": true,
    "message": "DB.",
    "data": {
        "main_category": [
            {
                "id": "1",
                "text": "Medical",
                "visibilty": "0"
            },
            {
                "id": "2",
                "text": "Dental",
                "visibilty": "0"
            }
        ],
        "main_sub_category": [
            {
                "id": "1",
                "parent_id": "2",
                "text": "Undergraduate / BDS",
                "visibilty": "0"
            },
            .....
        ],
        "specialization": [
            {
                "id": "1",
                "parent_id": "1",
                "text": "Dental public health",
                "visibilty": "0"
            },
            {
                "id": "2",
                "parent_id": "2",
                "text": "Basic Science",
                "visibilty": "0"
            },
 			....
        ],
        "intersted_course": [
            {
                "id": "1",
                "text": "Others",
                "parent_id": "1"
            },
   			 ....
        ]
    },
    "error": []
}
	##output_code_end##

	
	DIVDER-SEGMENT
############################### PUSH NOTIFICATION ###############################

<h4>1) Notification while post like </h4>
	code  -> 101 
	data  -> post_id: 1

<h4>2) Notification while new comment </h4>

	code -> 201 
	data -> post_id:2  

<h4>3) Notification while shareing post</h4>
	code -> 301 
	data -> post_id:2  

<h4>4) Notification someone is live</h4>
	code -> 401 

<h4>5) Notification while someone got tagged on post </h4>
	code -> 501 	  
	data -> post_id:2  

<h4>6) Notification while someone got tagged on comment </h4>
	code -> 601 	  
	data -> comment_id:2  	

<h4>7) Notification while someone someone started following you </h4> 
	code -> 701 	  
	data -> user_id:2  

<h4>8) open conditional message </h4>
	code -> 90001 	  
	data -> message_target:"open",link:"" 

	code -> 90001 	  
	data -> message_target:"url",link:"google.com" 

###############################  Files upload in post section ########################

Send json string in 'file' key with add post api and mcq api 

[
    {
        "file_type": "image",
        "link": "link_of_inmage",
        "file_info":"check this out "
    },
    {
        "file_type": "image",
        "link": "link_of_file",
        "file_info":"check this out "
    },
    {
        "file_type": "pdf",
        "link": "link_of_file",
        "file_info":"check this out "
    },
    {
        "file_type": "video",
        "link": "link_of_file",
        "file_info":"check this out "
    }
]

################################## LIVE STREAMING ################################

	Method -:      POST
	Service url -: data_model/fanwall/live_stream/top_video_stream

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of logged in user   
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Streaming is available",
	    "data": {
	        "id": "1",
	        "name": "Vipul sharma",
	        "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/1_1499413768242_image.jpg",
	        "hls": "http://dwl0ojped2eu.cloudfront.net/hls-live/livepkgr/_definst_/liveevent/livestream.m3u8"
	    },
	    "error": []
	}
	##output_code_end##
	False case 
	##output_code_start##
	{
	    "status": false,
	    "message": "The user_id field is required.",
	    "data": [],
	    "error": {
	        "user_id": "The user_id field is required."
	    }
	}

	##output_code_end##

################################################

 #####   ####    ####    #####   #####   #####
#       #    #  #    #  #       #       #
#       #    #  #####    ####    ####    ####  
#       #    #  # #          #  #            #
 #####	 ####   #   #   #####    #####  #####

################################################

IN HEADER SEND THESE INFORMATION in respective keys 

user_id = "1";
device_type =  "1"; for androiod 2 for ios 
device_id = "ewwefwef"; 
device_tokken = "dsfwefwefwef4we5f4we5f"; 
session_id = "asdasdqwedasdqwedwqed"; 
setup_version = "1.2.3"; 
device_info = "OS:1,other user agent information "; 


<h4>1)  Get information on landing page </h4>

	Method -:      POST
	Service url -: data_model/courses/course/get_landing_page_data

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of logged in user   
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Data found.",
	    "data": [
	        {
	            "category_info": {
	                "id": "1",
	                "name": "usmle",
	                "position": "0",
	                "app_view_type": "1",
	                "parent_fk": "1"
	            },
	            "course_list": [
	                {
	                    "id": "1",
	                    "title": "Radiology",
	                    "course_category_fk": "1",
	                    "description": "lorem ispum description ",
	                    "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                    "tags": "radio,medical,health",
	                    "mrp": "1000",
	                    "publish": "1",
	                    "state": "0",
	                    "for_dams": "900",
	                    "non_dams": "950",
	                    "learner": "2040",
	                    "rating": "3"
	                },
	                {
	                    "id": "2",
	                    "title": "sdsdsd",
	                    "course_category_fk": "1",
	                    "description": "lorem ispum description ",
	                    "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                    "tags": "",
	                    "mrp": "200",
	                    "publish": "1",
	                    "state": "0",
	                    "for_dams": "150",
	                    "non_dams": "170",
	                    "learner": "2040",
	                    "rating": "3"
	                },
	                {
	                    "id": "3",
	                    "title": "asdasd",
	                    "course_category_fk": "1",
	                    "description": "lorem ispum description ",
	                    "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                    "tags": "",
	                    "mrp": "3000",
	                    "publish": "1",
	                    "state": "0",
	                    "for_dams": "2500",
	                    "non_dams": "2700",
	                    "learner": "2040",
	                    "rating": "3"
	                }
	            ]
	        },
	        {
	            "category_info": {
	                "id": "2",
	                "name": "Canadian Courses",
	                "position": "0",
	                "app_view_type": "2",
	                "parent_fk": "1"
	            },
	            "course_list": []
	        },
	        {
	            "category_info": {
	                "id": "3",
	                "name": "Australian Courses",
	                "position": "0",
	                "app_view_type": "1",
	                "parent_fk": "1"
	            },
	            "course_list": []
	        }
	    ],
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>2) GET SINGLE COURSE DATA </h4>

	Method -:      POST
	Service url -: data_model/courses/course/get_single_course_info_raw

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of logged in user 
		course_id -> 1 // primary key of course  
	##input_parm_end##
	Response -:
	##output_code_start##
	{
    "status": true,
    "message": "Course information.",
    "data": {
			"id": "1",
			"title": "Essential Radiology",
			"course_main_fk": "1",
			"course_category_fk": "1",
			"subject_id": "6",
			"description": "This comprehensive introduction to the essentials of radiology is designed to enable readers to excel at ordering the appropriate examination and reliably interpreting basic imaging findings. Organized around the major organ systems, it situates imaging within the larger context of the patient's clinical presentation, the pathophysiology of the disease or injury, the analysis and differential diagnosis of imaging findings, and the integration of each into patient management. Special features include:\r\nConcise reviews of key anatomic and physiologic principles\r\nFull integration of pathophysiology and imaging findings\r\nMore than 600 exquisite illustrations demonstrating important concepts\r\nMini-atlas of essential cross-sectional anatomy of the brain, chest, and abdomen\r\nEssential Radiology is an invaluable reference for learning how to make full use of radiology's extraordinary promise in diagnosing disease and enhancing patient care. Instructors will find this an ideal book for course adoption.",
			"cover_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/567760Essential%20Radiology.jpg",
			"cover_video": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/5839289SampleVideo_1280x720_1mb.mp4",
			"tags": "Radio",
			"mrp": "5000",
			"publish": "1",
			"is_new": "1",
			"state": "0",
			"for_dams": "0",
			"non_dams": "0",
			"instructor_id": "21",
			"instructor_share": "10",
			"rating": "2.2",
			"review_count": "22",
			"learner": "0",
			"reviews": [
				{
					"id": "36",
					"user_id": "50",
					"name": "chandan jha",
					"profile_picture": "",
					"text": "hi how are you",
					"rating": "5",
					"creation_time": "1510314715083"
				},
				{
					"id": "35",
					"user_id": "49",
					"name": "Gurjinder Singh",
					"profile_picture": "",
					"text": "hi how are you",
					"rating": "5",
					"creation_time": "1510308740104"
				}
			],
			"instructor_data": {
				"id": "21",
				"name": "Sumer Sethi",
				"email": "sumerdoc@gmail.com",
				"profile_pic": "https://s3-ap-south-1.amazonaws.com/dams-apps-production/profile_images/6DA9370C-583C-4740-BE2D-DAFED19CF641-3977-000003CA1314416C.png",
				"about": "",
				"students": "3530",
				"courses": "13",
				"rating": "5"
			},
			"curriculam": {
				"title": "Basics of X-ray physics",
				"file_meta": [
					{
						"file": "video",
						"link": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/5944908SampleVideo_1280x720_1mb.mp4",
						"title": "Test Video",
						"description": ""
					},
					{
						"file": "doc",
						"link": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/1661378db_export_dispensery_2017-08-31.csv",
						"title": "Test DOC",
						"description": ""
					},
					{
						"file": "test",
						"link":"8",
						"title": "Test series 16",
						"description": "sefaqfdsefcaqw"
					}
				]
			},
			"is_purchased": "0",
			"related_course": [
				{
					"id": "2",
					"title": "Anatomy and physiology ",
					"cover_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/7629935Anatomy%20and%20Physiology.jpg",
					"mrp": "200",
					"is_new": "0",
					"for_dams": "150",
					"non_dams": "170",
					"rating": "2.5",
					"review_count": "2",
					"learner": "0"
				},
				{
					"id": "3",
					"title": "Radiologic technology ",
					"cover_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/3095949Radiologic%20technology.jpg",
					"mrp": "3000",
					"is_new": "0",
					"for_dams": "2500",
					"non_dams": "2700",
					"rating": "4",
					"review_count": "0",
					"learner": "0"
				}
			]
		},
		"error": []
	}
	##output_code_end##
	False case 
	##output_code_start##
	{
	    "status": false,
	    "message": "The user_id field is required.",
	    "data": [],
	    "error": {
	        "user_id": "The user_id field is required."
	    }
	}
	##output_code_end##
DIVDER-SEGMENT*************

<h4>3)  GET ONE CATEGORY COURSES</h4>

	Method -:      POST
	Service url -: data_model/courses/course/get_all_category_data

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1 // primary key of logged in user   
		cat_id  ->  1 // primary key of category id 
	##input_parm_end##	
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Course information.",
	    "data": {
	        "course_list": [
	            {
	                "id": "1",
	                "title": "Radiology",
	                "course_category_fk": "1",
	                "description": "lorem ispum description ",
	                "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                "tags": "radio,medical,health",
	                "mrp": "1000",
	                "publish": "1",
	                "state": "0",
	                "for_dams": "900",
	                "non_dams": "950",
	                "learner": "2095",
	                "rating": "5"
	            },
	            {
	                "id": "2",
	                "title": "sdsdsd",
	                "course_category_fk": "1",
	                "description": "lorem ispum description ",
	                "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                "tags": "",
	                "mrp": "200",
	                "publish": "1",
	                "state": "0",
	                "for_dams": "150",
	                "non_dams": "170",
	                "learner": "2095",
	                "rating": "5"
	            },
	            {
	                "id": "3",
	                "title": "asdasd",
	                "course_category_fk": "1",
	                "description": "lorem ispum description ",
	                "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                "tags": "",
	                "mrp": "3000",
	                "publish": "1",
	                "state": "0",
	                "for_dams": "2500",
	                "non_dams": "2700",
	                "learner": "2095",
	                "rating": "5"
	            }
	        ]
	    },
	    "error": []
	}
	##output_code_end##
	False case 
	##output_code_start##
	{
	    "status": false,
	    "message": "The user_id field is required.",
	    "data": [],
	    "error": {
	        "user_id": "The user_id field is required."
	    }
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>4)  GET INSTRUCTOR PROFILE </h4>

	Method -:      POST
	Service url -: data_model/courses/Instructor/get_instructor_profile

	Input parameter -:	
	##input_parm_start## 
		instructor_id -> 1 // primary key of instructor   
		user_id ->35 //primary key of user
	##input_parm_end##	
	Response -:
	True case 
	##output_code_start##
	{
		"status": true,
		"message": "Instructor information.",
		"data": {
			"id": "21",
			"name": "Sumer Sethi",
			"email": "sumerdoc@gmail.com",
			"profile_pic": "https://s3-ap-south-1.amazonaws.com/dams-apps-production/profile_images/6DA9370C-583C-4740-BE2D-DAFED19CF641-3977-000003CA1314416C.png",
			"students": "1382",
			"about": "",
			"courses": "34",
			"rating": "4.0",
			"review": "2",
			"reviews": [
				{
					"id": "7",
					"user_id": "35",
					"name": "Himanshu",
					"profile_picture": "",
					"text": "this is my rating",
					"rating": "4.0",
					"creation_time": "1511434087767"
				},
				{
					"id": "6",
					"user_id": "36",
					"name": "vivek Tyagi",
					"profile_picture": "",
					"text": "this is my rating",
					"rating": "4.0",
					"creation_time": "1511434082640"
				}
			],
			"course_list": [
				{
					"id": "1",
					"title": "Essential Radiology",
					"course_main_fk": "1",
					"course_category_fk": "1",
					"subject_id": "6",
					"description": "This comprehensive introduction to the essentials of radiology is designed to enable readers to excel at ordering the appropriate examination and reliably interpreting basic imaging findings. Organized around the major organ systems, it situates imaging within the larger context of the patient's clinical presentation, the pathophysiology of the disease or injury, the analysis and differential diagnosis of imaging findings, and the integration of each into patient management. Special features include:\r\nConcise reviews of key anatomic and physiologic principles\r\nFull integration of pathophysiology and imaging findings\r\nMore than 600 exquisite illustrations demonstrating important concepts\r\nMini-atlas of essential cross-sectional anatomy of the brain, chest, and abdomen\r\nEssential Radiology is an invaluable reference for learning how to make full use of radiology's extraordinary promise in diagnosing disease and enhancing patient care. Instructors will find this an ideal book for course adoption.",
					"cover_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/567760Essential%20Radiology.jpg",
					"cover_video": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/5839289SampleVideo_1280x720_1mb.mp4",
					"tags": "Radio",
					"mrp": "5000",
					"publish": "1",
					"is_new": "1",
					"state": "0",
					"for_dams": "0",
					"non_dams": "0",
					"instructor_id": "21",
					"instructor_share": "10",
					"course_rating_count": "2.2",
					"course_review_count": "22",
					"course_learner": "0",
					"learner": "3712",
					"rating": "4"
				}
			],
			"user_given_review": {
				"id": "7",
				"user_id": "35",
				"name": "Himanshu",
				"profile_picture": "",
				"text": "this is my rating",
				"rating": "4.0",
				"creation_time": "1511434087767"
			}
		},
		"error": []
	} 
	##output_code_end##
	
	False case 
	##output_code_start##
	{
	    "status": false,
	    "message": "The instructor_id field is required.",
	    "data": [],
	    "error": {
	        "user_id": "The instructor_id field is required."
	    }
	}	
	##output_code_end##

DIVDER-SEGMENT*************

<h4>5)  APPLY COUPON CODE </h4>

	Method -:      POST
	Service url -: data_model/courses/course/apply_coupon_code

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id-> 1 // course id    
	coupon_code-> ABC123
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Coupon code is valid .",
		"data": {
			"id": "2",
			"coupon_type": "2",
			"coupon_value": "10"
		},
		"error": []
	}		
	##output_code_end##
DIVDER-SEGMENT*************

<h4 class="text-danger">6)  GET REVIEWS OF COURSE -: this api is deprecated </h4>

	Method -:      POST
	Service url -: data_model/courses/course/get_all_reviews_of_course

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id-> 1 // course id    
	last_id-> //last id of review element for pagination 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Course information.",
	    "data": [
	        {
	            "id": "1",
	            "name": "Vipul Sharma",
	            "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/1_1498643188582_image.jpg",
	            "text": "It was nice to be here.",
	            "creation_time": "1498634128235",
	            "rating": "4.1"
	        },
	        {
	            "id": "2",
	            "name": "Ansul Sharma",
	            "profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/4_1505918790744_image.jpg",
	            "text": "It was nice to be here.",
	            "creation_time": "1498634128235",
	            "rating": "4.2"
	        }
	    ],
	    "error": []
	}
	##output_code_end##	

DIVDER-SEGMENT*************

<h4>7)  GET MY COURSE LIST</h4> 

	Method -:      POST
	Service url -: data_model/courses/my_courses/get_list_of_my_courses

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Course information.",
	    "data": {
	        "course_list": [
	            {
	                "id": "1",
	                "title": "Radiology",
	                "course_category_fk": "1",
	                "description": "lorem ispum description ",
	                "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                "tags": "radio,medical,health",
	                "mrp": "1000",
	                "publish": "1",
	                "state": "0",
	                "for_dams": "900",
	                "non_dams": "950",
	                "learner": "4420",
	                "rating": "4"
	            },
	            {
	                "id": "2",
	                "title": "sdsdsd",
	                "course_category_fk": "1",
	                "description": "lorem ispum description ",
	                "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                "tags": "radio,medical,health",
	                "mrp": "200",
	                "publish": "1",
	                "state": "0",
	                "for_dams": "150",
	                "non_dams": "170",
	                "learner": "4420",
	                "rating": "4"
	            },
	            {
	                "id": "3",
	                "title": "asdasd",
	                "course_category_fk": "1",
	                "description": "lorem ispum description ",
	                "cover_image": "http://is2.mzstatic.com/image/thumb/Purple118/v4/27/3e/aa/273eaa64-33ae-83cc-191d-9d56bde4c606/source/512x512bb.jpg",
	                "tags": "radio,medical,health",
	                "mrp": "3000",
	                "publish": "1",
	                "state": "0",
	                "for_dams": "2500",
	                "non_dams": "2700",
	                "learner": "4420",
	                "rating": "4"
	            }
	        ]
	    },
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>8)  GET MY COURSE FILE LIST</h4>

	Method -:      POST
	Service url -: data_model/courses/Course/get_all_file_info

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id-> 1 // primary key of course
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Course file description.",
	    "data": [
	        {
	            "title": "lesson one ",
	            "file_meta": [
	                {
	                    "file_type": "video",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "pdf",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "ppt",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "epub",
	                    "link": "google.com"
	                }
	            ]
	        },
	        {
	            "title": "lesson two ",
	            "file_meta": [
	                {
	                    "file_type": "video",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "pdf",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "ppt",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "epub",
	                    "link": "google.com"
	                }
	            ]
	        },
	        {
	            "title": "lesson three ",
	            "file_meta": [
	                {
	                    "file_type": "video",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "pdf",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "ppt",
	                    "link": "google.com"
	                },
	                {
	                    "file_type": "epub",
	                    "link": "google.com"
	                }
	            ]
	        }
	    ],
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>9)  GET FAQ OF COURSE</h4>

	Method -:      POST
	Service url -: data_model/courses/Course/get_faq

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id-> 1 // primary key of course
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	    "status": true,
	    "message": "Faq list.",
	    "data": [
	        {
	            "id": "1",
	            "course_id": "1",
	            "question": "what is radiology ",
	            "description": "the radiology is about this and that\r\n"
	        },
	        {
	            "id": "3",
	            "course_id": "1",
	            "question": "How can I find an imaging center in my area that can perform this procedure?",
	            "description": "You might try searching in the database of ACR-accredited facilities."
	        },
	        {
	            "id": "4",
	            "course_id": "1",
	            "question": "Is it possible to have a procedure performed without a referring physician and if so, where can I find an imaging center that provides this service? Is it possible to have a procedure performed without a referring physician and if so, where can I find an imaging center that provides this service? ",
	            "description": "There are imaging centers that will perform certain proceduresâ€”such as whole-body imaging, coronary calcium scoring, and virtual colonoscopyâ€”without a referring physician. Note that such elective screening may not be covered by insurance or Medicare and in some states, such as Texas, all radiologic procedures must be ordered by a licensed referring physician, podiatrist, or chiropractor. RadiologyInfo.org does not provide referrals; however, a state or local chapter of the American College of Radiology (ACR) may be able to assist you in finding an imaging facilityâ€”see ACR Chapter Websites. You can search for ACR-accredited imaging facilities in the ACR-accredited facilities database."
	        },
	        {
	            "id": "5",
	            "course_id": "1",
	            "question": "I've searched your site but can't find information about a particular procedure.",
	            "description": "RadiologyInfo.org currently describes many of the most common radiology procedures but it does not describe all procedures. New procedures will be added and current procedures will be updated as we continue to develop the site. Also, many procedures have more than one name, so you might try checking our \"Article Index A to Z\" page.\r\n\r\nIf you have a question about a procedure that is not included on the site, we recommend that you ask your physician or health services provider."
	        },
	        {
	            "id": "6",
	            "course_id": "1",
	            "question": "How much does the exam cost?",
	            "description": "The MOC examination is covered in a candidateâ€™s annual MOC fee. The annual fee varies depending on a candidateâ€™s certification year, ranging from $288 for certification in 2004 or earlier to $340 for certification in 2015."
	        },
	        {
	            "id": "7",
	            "course_id": "1",
	            "question": "What is the exam format?",
	            "description": "The exam consists of four modules, each with approximately 60 multiple choice questions."
	        },
	        {
	            "id": "8",
	            "course_id": "1",
	            "question": "What does the exam cover?",
	            "description": "Each candidate will be tested on non-interpretive skills, which may include patient safety, contrast reactions, radiation safety and statistics, as well as clinical skills. Clinical content areas are determined by each diplomateâ€™s self-selected practice profile."
	        },
	        {
	            "id": "9",
	            "course_id": "1",
	            "question": "Where can I take the exam?",
	            "description": "The radiology MOC exam is given at two testing sites, one in Chicago, IL and one in Tucson, AZ. These exam centers were built specifically to accommodate the advanced, image-rich test material."
	        },
	        {
	            "id": "10",
	            "course_id": "1",
	            "question": "How long does the exam take?",
	            "description": "The exam takes approximately five hours. Each candidate will be given a pre-assigned arrival time. Candidates are advised to plan to travel to their exam city several hours or even the day before their assigned arrival time to allow for unforeseen travel delays."
	        },
	        {
	            "id": "11",
	            "course_id": "1",
	            "question": "Are my travel and lodging expenses covered as part of the examination?",
	            "description": "No. You are responsible for arranging your own travel and lodging for your exam. We suggest making lodging arrangements in advance as areas like Chicago fill up quickly."
	        },
	        {
	            "id": "12",
	            "course_id": "1",
	            "question": "When will I get my results?",
	            "description": "Exam results will be posted through the online portal approximately three weeks after your exam date."
	        }
	    ],
	    "error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>10)  GET COMPLETE INFO OF TEST SERIES</h4>

	Method -:      POST
	Service url -: data_model/courses/test_series/get_test_series_with_id

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	test_series_id-> 1 // primary key of testseries
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Test series.",
		"data": {
			"basic_info": {
				"id": "4",
				"test_series_name": "Test series 1",
				"subject": "5",
				"difficulty_level": "2",
				"test_price": "1",
				"test_type": "1",
				"description": "Test series 1 description",
				"session": "2017",
				"total_questions": "20",
				"consider_time": "1",
				"time_in_mins": "20",
				"negative_marking": "1",
				"total_marks": "60",
				"marks_per_question": "3",
				"shuffle": "1",
				"answer_shuffle": "0",
				"mandatory_check": "0",
				"allow_user_move": "0",
				"time_boundation": "0",
				"show_question_time": "0",
				"pass_message": "",
				"general_message": "",
				"fail_message": "",
				"pass_percentage": "",
				"allow_duplicate_rank": "0",
				"skip_rank": "0",
				"start_date": "",
				"end_date": "",
				"start_time": "",
				"end_time": "",
				"publish": "0",
				"reward_points": "0"
			},
			"question_bank": [
				{
					"id": "5",
					"question": "What are the differences between Get and post methods in form submitting.\ngive the case where we can use get and we can use post methods?",
					"subject_id": "0",
					"topic_id": "0",
					"description": "differences between Get and post methods in form submitting.\ngive the case where we can use get and we can use post methods\nAttribute.",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "The HTML 2.0 specification says, in section Form\nSubmission (and the HTML 4.0 specification repeats this with minor\nstylistic changes):",
					"option_2": "â€“>If the processing of a form is idempotent\n(i.e. it has no lasting observable effect on the state of the\nworld), then the form method should be GET. Many database searches\nhave no visible side-effects and make ideal applications of query\nForms.",
					"option_3": "â€“>If the service associated with the processing of a form has side\neffects (for example, modification of a database or subscription to\na service), the method should be POST.",
					"option_4": "â€“>If the processing of a form is idempotent\n(i.e. it has no lasting observable effect on the state of the\nworld), then the form method should be GET. Many database searches\nhave no visible side-effects and make ideal applications of query\nForms.",
					"option_5": "The HTML 2.0 specification says, in section Form\nSubmission (and the HTML 4.0 specification repeats this with minor\nstylistic changes):",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "6",
					"question": "Who is the father of PHP and explain the changes in PHP versions?",
					"subject_id": "0",
					"topic_id": "0",
					"description": "father of PHP and explain the changes in PHP versions",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Zend engine 1",
					"option_2": "Zend engine 2",
					"option_3": "Zend engine 3",
					"option_4": "Zend engine 4",
					"option_5": "Zend engine 5",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "7",
					"question": "How can we submit a form without a submit button? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": "submit a form without a submit button",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Form Submit",
					"option_2": "javascript submit function",
					"option_3": "ajax",
					"option_4": "",
					"option_5": "",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "8",
					"question": " In how many ways we can retrieve the data in the result set of\nMySQL using PHP? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": " ways we can retrieve the data in the result set of\nMySQL using PHP",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "mysql_fetch_row",
					"option_2": "mysql_fetch_array",
					"option_3": "mysql_fetch_object",
					"option_4": "mysql_fetch_assoc",
					"option_5": "All Above",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "9",
					"question": "Who is the father of PHP and explain the changes in PHP versions?",
					"subject_id": "0",
					"topic_id": "0",
					"description": "father of PHP and explain the changes in PHP versions",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Zend engine 1",
					"option_2": "Zend engine 2",
					"option_3": "Zend engine 3",
					"option_4": "Zend engine 4",
					"option_5": "Zend engine 5",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "10",
					"question": "How can we submit a form without a submit button? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": "submit a form without a submit button",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Form Submit",
					"option_2": "javascript submit function",
					"option_3": "ajax",
					"option_4": "",
					"option_5": "",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "11",
					"question": "How can we submit a form without a submit button? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": "submit a form without a submit button",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Form Submit",
					"option_2": "javascript submit function",
					"option_3": "ajax",
					"option_4": "",
					"option_5": "",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "12",
					"question": " In how many ways we can retrieve the data in the result set of\nMySQL using PHP? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": " ways we can retrieve the data in the result set of\nMySQL using PHP",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "mysql_fetch_row",
					"option_2": "mysql_fetch_array",
					"option_3": "mysql_fetch_object",
					"option_4": "mysql_fetch_assoc",
					"option_5": "All Above",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "13",
					"question": "Who is the father of PHP and explain the changes in PHP versions?",
					"subject_id": "0",
					"topic_id": "0",
					"description": "father of PHP and explain the changes in PHP versions",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Zend engine 1",
					"option_2": "Zend engine 2",
					"option_3": "Zend engine 3",
					"option_4": "Zend engine 4",
					"option_5": "Zend engine 5",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "14",
					"question": "How can we submit a form without a submit button? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": "submit a form without a submit button",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Form Submit",
					"option_2": "javascript submit function",
					"option_3": "ajax",
					"option_4": "",
					"option_5": "",
					"answer": "1",
					"status": "1",
					"subject_name": null
				},
				{
					"id": "15",
					"question": "How can we submit a form without a submit button? ",
					"subject_id": "0",
					"topic_id": "0",
					"description": "submit a form without a submit button",
					"question_type": "1",
					"negative_marks": "2",
					"marks": "3",
					"difficulty_level": "1",
					"duration": "3",
					"option_1": "Form Submit",
					"option_2": "javascript submit function",
					"option_3": "ajax",
					"option_4": "",
					"option_5": "",
					"answer": "1",
					"status": "1",
					"subject_name": null
				}
			]
		},
		"error": []
	}
##output_code_end##

DIVDER-SEGMENT*************

<h4>11)  GIVE REVIEW TO INSTRUCTOR </h4>

	Method -:      POST
	Service url -: data_model/courses/course_instructor_reviews/add_review_to_instructor

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	instructor_id -> 1 // primary key of Instructor
	rating -> 1 // 2,3,4,5
	text -> "this is my review"
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Review added.",
		"data": [],
		"error": []
	}
	##output_code_end##
DIVDER-SEGMENT*************

<h4>12)  EDIT REVIEW TO INSTRUCTOR </h4>

	Method -:      POST
	Service url -: data_model/courses/course_instructor_reviews/edit_review_to_instructor

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	instructor_id -> 1 // primary key of Instructor
	rating -> 1 // 2,3,4,5
	text -> "this is my review"
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Review Edited.",
		"data": [],
		"error": []
	}	##output_code_end##
DIVDER-SEGMENT*************

<h4>12) DELETE REVIEW TO INSTRUCTOR </h4>

	Method -:      POST
	Service url -: data_model/courses/course_instructor_reviews/delete_review_from_instructor

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	instructor_id -> 1 // primary key of Instructor
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Review deleted.",
		"data": [],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>13)  GET INSTRUCTOR REVIEW LIST</h4>

	Method -:      POST
	Service url -: data_model/courses/course_instructor_reviews/get_list_of_reviews

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	instructor_id -> 1 // primary key of Instructor
	last_review_id -> 1 // or 0 zero for initial 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Reviews Found.",
		"data": [
			{
				"id": "2",
				"instructor_id": "21",
				"user_id": "36",
				"rating": "5",
				"text": "this is my rating",
				"creation_time": "1509436984251",
				"name": "vivek Tyagi",
				"profile_picture": ""
			},
			{
				"id": "1",
				"instructor_id": "21",
				"user_id": "34",
				"rating": "5",
				"text": "this is my rating",
				"creation_time": "1509436823240",
				"name": "Rohit",
				"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/34_1502194887408_image.jpg"
			}
		],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>14)  GIVE REVIEW TO COURSE </h4>

	Method -:      POST
	Service url -: data_model/courses/Course_rating_reviews/add_review_to_course

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	rating -> 1 // 2,3,4,5
	text -> "this is my review"
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Review added.",
		"data": [],
		"error": []
	}	
##output_code_end##
DIVDER-SEGMENT*************

<h4>15)  EDIT REVIEW TO COURSE </h4>

	Method -:      POST
	Service url -: data_model/courses/Course_rating_reviews/edit_review_to_course

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	rating -> 1 // 2,3,4,5
	text -> "this is my review"
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Review edited.",
		"data": [],
		"error": []
	}
##output_code_end##

DIVDER-SEGMENT*************

<h4>16)  DELETE REVIEW TO COURSE </h4>

	Method -:      POST
	Service url -: data_model/courses/Course_rating_reviews/delete_review_from_course

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Review deleted.",
		"data": [],
		"error": []
	}
##output_code_end##
DIVDER-SEGMENT*************

<h4>17)  GET COURSE REVIEW LIST</h4>

	Method -:      POST
	Service url -: data_model/courses/Course_rating_reviews/get_list_of_reviews

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	last_review_id -> 1 // or 0 zero for initial 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Reviews Found.",
		"data": [
			{
				"id": "16",
				"course_fk_id": "1",
				"user_id": "34",
				"rating": "1",
				"text": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
				"creation_time": "1509431597768",
				"name": "Rohit",
				"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/34_1502194887408_image.jpg"
			},
			{
				"id": "15",
				"course_fk_id": "1",
				"user_id": "33",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431594484",
				"name": "chandrakant",
				"profile_picture": ""
			},
			{
				"id": "14",
				"course_fk_id": "1",
				"user_id": "32",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431591070",
				"name": "Vinod Kumar",
				"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/32_1501672305732_image.jpg"
			},
			{
				"id": "13",
				"course_fk_id": "1",
				"user_id": "31",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431587866",
				"name": "amit",
				"profile_picture": ""
			},
			{
				"id": "12",
				"course_fk_id": "1",
				"user_id": "30",
				"rating": "1",	{
		"status": true,
		"message": "Test series result basic information.",
		"data": {
			"id": "10",
			"test_series_id": "4",
			"user_id": "19",
			"result": "0",
			"question_dump": "[{\"question_id\":\"1\",\"answer\":\"1\",\"is_correct\":\"1\"},{\"question_id\":\"3\",\"answer\":\"2\",\"is_correct\":\"0\"},{\"question_id\":\"4\",\"answer\":\"3\",\"is_correct\":\"0\"}]",
			"time_spent": "",
			"correct_count": "1",
			"incorrect_count": "2",
			"non_attempt": "0",
			"marks": "100",
			"test_series_marks": "0",
			"total_test_series_time": "0",
			"reward_points": "0",
			"creation_time": "1510125822682",
			"test_series_name": "Test series 1",
			"total_user_attempt": "46",
			"user_rank": "1",
			"top_ten_list": [
				{
					"user_id": "4",
					"creation_time": "1510393051070",
					"name": "Dr Devendra Singh",
					"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/4_1505918790744_image.jpg"
				},
				{
					"user_id": "19",
					"creation_time": "1510125822682",
					"name": "Sunita Sharma",
					"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/19_1503421725555_image.jpg"
				}
			]
		},
		"error": []
	}
				"text": "hi how are you",
				"creation_time": "1509431584580",
				"name": "satya prakash",
				"profile_picture": ""
			},
			{
				"id": "11",
				"course_fk_id": "1",
				"user_id": "29",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431577949",
				"name": "Naveen Singh Rawat",
				"profile_picture": ""
			},
			{
				"id": "10",
				"course_fk_id": "1",
				"user_id": "28",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431574743",
				"name": "kalbe abbas",
				"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/28_1501665678022_image.jpg"
			},
			{
				"id": "9",
				"course_fk_id": "1",
				"user_id": "27",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431571636",
				"name": "Rohit Bhardwaj",
				"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/27_1501666473663_image.jpg"
			},
			{
				"id": "8",
				"course_fk_id": "1",
				"user_id": "26",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431568152",
				"name": "himani gola",
				"profile_picture": ""
			},
			{
				"id": "7",
				"course_fk_id": "1",
				"user_id": "25",
				"rating": "1",
				"text": "hi how are you",
				"creation_time": "1509431564259",
				"name": "alok",
				"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/25_1501664593896_image.jpg"
			}
		],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>18)  INITIALIZE PAYMENT </h4>

	Method -:      POST
	Service url -: data_model/courses/Course/initialize_course_transaction

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Payment initialized.",
		"data": {
			"pre_transaction_id": "7bdada558c24e59975a3d79304b1f30e"
		},
		"error": []
	}	##output_code_end##


DIVDER-SEGMENT*************

<h4>19)  COMPLETE PAYMENT </h4>

	Method -:      POST
	Service url -: data_model/courses/Course/complete_course_transaction

	Input parameter -:
##input_parm_start## 	
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	pre_transaction_id -> 7bdada558c24e59975a3d79304b1f30e
	post_transaction_id -> 7bdada558c24e59975a3d79304b1f30e // get it from payment gateway
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Payment complete.",
		"data": [],
		"error": []
	}	##output_code_end##


DIVDER-SEGMENT*************

<h4>20)  COMPLETE TEST SERIES </h4>

	Method -:      POST
	Service url -: data_model/courses/Test_series/save_test

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	test_series_id -> 4 // primary key of course
	time_spent -> 600 // send in seconds 
	question_dump -> send json here as described below 

	e.g. of json [{"question_id":"1","answer":"1"},{"question_id":"2","answer":"4"}] 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Test series result basic information.",
		"data": {
			"id": "10",
			"test_series_id": "4",
			"user_id": "19",
			"result": "0",
			"question_dump": "[{\"question_id\":\"1\",\"answer\":\"1\",\"is_correct\":\"1\"},{\"question_id\":\"3\",\"answer\":\"2\",\"is_correct\":\"0\"},{\"question_id\":\"4\",\"answer\":\"3\",\"is_correct\":\"0\"}]",
			"time_spent": "",
			"correct_count": "1",
			"incorrect_count": "2",
			"non_attempt": "0",
			"marks": "100",
			"test_series_marks": "0",
			"total_test_series_time": "0",
			"reward_points": "0",
			"creation_time": "1510125822682",
			"test_series_name": "Test series 1",
			"total_user_attempt": "46",
			"user_rank": "1",
			"top_ten_list": [
				{
					"user_id": "4",
					"creation_time": "1510393051070",
					"name": "Dr Devendra Singh",
					"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/4_1505918790744_image.jpg"
				},
				{
					"user_id": "19",
					"creation_time": "1510125822682",
					"name": "Sunita Sharma",
					"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/19_1503421725555_image.jpg"
				}
			]
		},
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>21)  GET SOLUTION OF TEST SERIES RESULT</h4> 

	Method -:      POST
	Service url -: data_model/courses/Test_series/get_test_series_result

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	test_segment_id -> 1 // primary key of result
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Test series answer found successfully.",
		"data": [
			{
				"id": "1",
				"question": "<p>\r\n\tQuestion abcd qwerty&nbsp; asdf qwerty asdf zxcvb ?</p>\r\n",
				"description": "",
				"question_type": "0",
				"option_1": "<p>\r\n\t10</p>\r\n",
				"option_2": "<p>\r\n\t20</p>\r\n",
				"option_3": "<p>\r\n\t30</p>\r\n",
				"option_4": "<p>\r\n\t40</p>\r\n",
				"option_5": "<p>\r\n\t50</p>\r\n",
				"answer": "1",
				"is_correct": "1",
				"user_answer": "1"
			},
			{
				"id": "3",
				"question": "Question 2",
				"description": "Question 2 description",
				"question_type": "2",
				"option_1": "Option 1",
				"option_2": " Option 2",
				"option_3": " Option 3",
				"option_4": "Option 4",
				"option_5": "Option 5",
				"answer": "1",
				"is_correct": "0",
				"user_answer": "2"
			},
			{
				"id": "4",
				"question": "Question 2",
				"description": "Question 2 description",
				"question_type": "2",
				"option_1": "Option 1",
				"option_2": " Option 2",
				"option_3": " Option 3",
				"option_4": "Option 4",
				"option_5": "Option 5",
				"answer": "1",
				"is_correct": "0",
				"user_answer": "3"
			}
		],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>22)  GET LIST OF ALL TEST SERIES GIVEN BY USER</h4>  

	Method -:      POST
	Service url -: data_model/courses/Test_series/get_user_given_test_series

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Test series list.",
		"data": [
			{
				"id": "10",
				"test_series_name": "Test series 1",
				"result": "0",
				"reward_points": "0",
				"creation_time": "1510125822682"
			},
			{
				"id": "11",
				"test_series_name": "Test series 1",
				"result": "0",
				"reward_points": "0",
				"creation_time": "1510132085632"
			}
		],
		"error": []
	}
	##output_code_end##	

DIVDER-SEGMENT*************

<h4>23)  GET RESULT INFORMATION OF TEST SERIES (for each series attempt)</h4>  

	Method -:      POST
	Service url -: data_model/courses/Test_series/get_test_series_basic_result

	Input parameter -:	
	##input_parm_start## 
	user_id-> 19 // primary key of user
	test_segment_id ->10 // primary key of result 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Test series result basic information.",
		"data": {
			"id": "10",
			"test_series_id": "4",
			"user_id": "19",
			"result": "0",
			"question_dump": "[{\"question_id\":\"1\",\"answer\":\"1\",\"is_correct\":\"1\"},{\"question_id\":\"3\",\"answer\":\"2\",\"is_correct\":\"0\"},{\"question_id\":\"4\",\"answer\":\"3\",\"is_correct\":\"0\"}]",
			"time_spent": "",
			"correct_count": "1",
			"incorrect_count": "2",
			"non_attempt": "0",
			"marks": "100",
			"test_series_marks": "0",
			"total_test_series_time": "0",
			"reward_points": "0",
			"creation_time": "1510125822682",
			"test_series_name": "Test series 1",
			"total_user_attempt": "46",
			"user_rank": "1",
			"top_ten_list": [
				{
					"user_id": "4",
					"creation_time": "1510393051070",
					"name": "Dr Devendra Singh",
					"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/4_1505918790744_image.jpg"
				},
				{
					"user_id": "19",
					"creation_time": "1510125822682",
					"name": "Sunita Sharma",
					"profile_picture": "https://s3.ap-south-1.amazonaws.com/dams-apps-production/profile_images/19_1503421725555_image.jpg"
				}
			]
		},
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT*************

<h4>24) MAKE FREE COURSE TRANSACTION</h4>

	Method -:      POST
	Service url -: data_model/courses/Course/free_course_transaction

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	course_id -> 1 // primary key of course
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Added to my course.",
		"data": [],
		"error": []
	}		
	##output_code_end##

DIVDER-SEGMENT*************


<h4>25) SEARCH COURSE </h4>

	Method -:      POST
	Service url -: data_model/courses/Course/search_course

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	search_content -> "RADIO" // CONTENT YOU WANT TO SEARCH
	last_course_id -> 2 // LAST COURSE ID OR BLANK FOR PAGINATION  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Course found.",
		"data": [
			{
				"id": "53",
				"title": "Radiological anatomy modules ",
				"course_main_fk": "1",
				"course_category_fk": "1",
				"subject_id": "13",
				"description": "RADIOLOGICAL ANATOMY MODULES ",
				"cover_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/2901834Radiology%20anatomy.JPG",
				"desc_header_image": "",
				"cover_video": "",
				"tags": "RADIOLOGICAL ANATOMY MODULES ",
				"mrp": "5",
				"publish": "1",
				"is_new": "0",
				"state": "0",
				"for_dams": "1",
				"non_dams": "1",
				"instructor_id": "21",
				"instructor_share": "0",
				"rating": "3.8",
				"review_count": "3",
				"learner": "8"
			},
			{
				"id": "1",
				"title": "Radio-path integrated series",
				"course_main_fk": "1",
				"course_category_fk": "1",
				"subject_id": "13",
				"description": "#DAMS #MedEd #RadioPath #IntegratedMedicine #GIST #NEETPG #USMLE",
				"cover_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/5221235test.png",
				"desc_header_image": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/7419323appfirm2.png",
				"cover_video": "https://dams-apps-production.s3.ap-south-1.amazonaws.com/course_file_meta/7591797%23DAMS%20%23MedEd%20%23RadioPath%20%23IntegratedMedicine%20%23GIST%20%23NEETPG%20%23USMLE.mp4",
				"tags": "#DAMS #MedEd #RadioPath #IntegratedMedicine #GIST #NEETPG #USMLE",
				"mrp": "5",
				"publish": "1",
				"is_new": "1",
				"state": "0",
				"for_dams": "1",
				"non_dams": "1",
				"instructor_id": "21",
				"instructor_share": "10",
				"rating": "4.5",
				"review_count": "4",
				"learner": "10"
			}
		],
		"error": []
	}		
	##output_code_end##

DIVDER-SEGMENT*************

###########################################

#       # # #####   #####  #####   #####
 #     #  # #    # #      #     # # 
  #   #   # #    #  ####  #     #  ####
   # #    # #    # #      #     #      #
    #     # #####   #####  #####  #####
 
###########################################	


DIVDER-SEGMENT*************

<h4>1)  GET SINGLE VIDEO DETAILS </h4>

	Method -:      POST
	Service url -: data_model/video/Video_channel/get_single_video_data

	Input parameter -:	
	##input_parm_start## 
	user_id-> 1 // primary key of user
	video_id -> 1 // primary key of Video segment
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Video found.",
		"data": {
			"id": "1",
			"video_title": "#Radiology-Why do best medical graduates choose Radiology?",
			"video_type": "1",
			"url": "https://www.youtube.com/watch?v=Uek1gfyEgLQ",
			"author_name": "damsdelhi",
			"thumbnail_url": "https://i.ytimg.com/vi/Uek1gfyEgLQ/hqdefault.jpg",
			"video_desc": "The acquisition of medical images is usually carried out by the radiographer, often known as a Radiologic Technologist. Depending on location, the Diagnostic Radiologist, or Reporting Radiographer, then interprets or reads the images and produces a report of their findings and impression or diagnosis. This report is then transmitted to the Clinician who requested the imaging. The report can initially be made as a wet-read which is a rapid preliminary response to a clinical question, which will generally followed later by a final report.[1] Medical images are stored digitally in the picture archiving and communication system (PACS) where they can be viewed by all members of the healthcare team within the same health system and compared later on with future imaging exams.",
			"screen_tag": "#Radiology,#dams",
			"featured": "1",
			"is_new": "1",
			"allow_comments": "1",
			"creation_time": "1509524120922"
		},
		"error": []
	}
	##output_code_end##

2)  GET VIDEO LIST FOR SINGLE CAT. 

	Method -:      POST
	Service url -: data_model/video/Video_channel/get_videos_for_tag_list

	Input parameter -:	
	##input_parm_start## 
	user_id -> 1 // primary key of user
	sub_cat -> 1 // primary key of segment send 0 to get all result 
	sort_by -> "time" // you can send here "views" , "likes"
	last_video_id -> "" // send blank for latest result else primary key of last video id 
	page_segment -> 0 // in case of sort by views and likes send page count start from zero to next like 0 or 1 ,2  , 3
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Video found.",
		"data": [
			{
				"id": "7",
				"video_title": "#IDoR2017 #Emergency #Radiology #SumerSethi",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=WX4dYfCJXtQ",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/WX4dYfCJXtQ/hqdefault.jpg",
				"video_desc": "#IDoR2017 #Emergency #Radiology #SumerSethi",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#IDoR2017 #Emergency #Radiology #SumerSethi",
				"start_date": "2017-11-09 12:00",
				"end_date": "2017-11-30 12:00",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "0",
				"allow_comments": "1",
				"is_new": "1",
				"comments": "2",
				"views": "0",
				"likes": "0",
				"creation_time": "1510219992640",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "8",
				"video_title": "Brucellosis DAMS Unplugged Integrated Medicine Learning",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=vkakyAW7-sE",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/vkakyAW7-sE/hqdefault.jpg",
				"video_desc": "Brucellosis DAMS Unplugged Integrated Medicine Learning",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Brucellosis #Radiology",
				"start_date": "2017-11-01 09:45",
				"end_date": "2017-12-31 22:50",
				"initial_view": "Brucellosis - Radiology",
				"screen_tag": "Brucellosis",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "1",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510220053148",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "9",
				"video_title": "#Toxoplasmosis #DAMS #Unplugged #Integrated Medicine Learning",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=_k1cCtFmXD4",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/_k1cCtFmXD4/hqdefault.jpg",
				"video_desc": "#Toxoplasmosis #DAMS #Unplugged #Integrated Medicine Learning",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Toxoplasmosis #DAMS #Unplugged #Integrated Medicine Learning",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "#Toxoplasmosis",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "2",
				"likes": "1",
				"creation_time": "1510212254898",
				"is_like": "1",
				"is_viewed": "1"
			},
			{
				"id": "10",
				"video_title": "DAMS Corporate Video 2017",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=LzbNPKu_Eyk",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/LzbNPKu_Eyk/hqdefault.jpg",
				"video_desc": "DAMS Corporate Video 2017",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Radiology #Dams",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Dans ",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212361367",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "11",
				"video_title": "How to Study Smart By Dr. Sumer Sethi",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=1EYMz4UvFX4",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/1EYMz4UvFX4/hqdefault.jpg",
				"video_desc": "How to Study Smart By Dr. Sumer Sethi",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#radiology",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212497301",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "12",
				"video_title": "#Unplugged #Hematology #MedEd #DAMS",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=haaAFgCD0b4",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/haaAFgCD0b4/hqdefault.jpg",
				"video_desc": "#Unplugged #Hematology #MedEd #DAMS",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Unplugged #radiology",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "RAdiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212636906",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "13",
				"video_title": "Value of Revision by Dr Sumer Sethi",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=UwW_qJxFBBg",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/UwW_qJxFBBg/hqdefault.jpg",
				"video_desc": "Value of Revision by Dr Sumer Sethi",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Radiology #Dams",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212703339",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "14",
				"video_title": "#DAMS #Unplugged #Nephrotic syndrome children",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=3BxGUWWrRag",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/3BxGUWWrRag/hqdefault.jpg",
				"video_desc": "#DAMS #Unplugged #Nephrotic syndrome children",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#DAMS #Unplugged #Radiology",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212789224",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "15",
				"video_title": "#DAMS #Unplugged #Nephrotic syndrome children",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=3BxGUWWrRag",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/3BxGUWWrRag/hqdefault.jpg",
				"video_desc": "#DAMS #Unplugged #Nephrotic syndrome children",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#DAMS #Unplugged #",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiologoy",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212892165",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "16",
				"video_title": "#Unplugged #Integrated Medicine #NEETPG #Usmle #MedEd #GynePath",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=D-J0uDEcn7U",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/D-J0uDEcn7U/hqdefault.jpg",
				"video_desc": "#Unplugged #Integrated Medicine #NEETPG #Usmle #MedEd #GynePath",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Unplugged #Integrated Medicine #NEETPG #Usmle #MedEd #GynePath",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510212950372",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "17",
				"video_title": "#DAMS #Unplugged #Pyknodyostosis by Dr.Sumer Sethi",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=k3sLRz0sM3Q",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/k3sLRz0sM3Q/hqdefault.jpg",
				"video_desc": "#DAMS #Unplugged #Pyknodyostosis by Dr.Sumer Sethi",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#DAMS #Unplugged #Pyknodyostosis by Dr.Sumer Sethi",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510213020803",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "18",
				"video_title": "#DAMS #Unplugged #Pyknodyostosis by Dr.Sumer Sethi",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=k3sLRz0sM3Q",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/k3sLRz0sM3Q/hqdefault.jpg",
				"video_desc": "#DAMS #Unplugged #Pyknodyostosis by Dr.Sumer Sethi",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#DAMS #Unplugged #Pyknodyostosis by Dr.Sumer Sethi",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510213086686",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "19",
				"video_title": "Let's Kill Procrastination By Dr.Sumer Sethi",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=iMruqUTmoio",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/iMruqUTmoio/hqdefault.jpg",
				"video_desc": "Let's Kill Procrastination By Dr.Sumer Sethi",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Radiology #Dams",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510213167499",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "20",
				"video_title": "Dr Lokesh Agarwal",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=KEAFKs_hFLI",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/KEAFKs_hFLI/hqdefault.jpg",
				"video_desc": "Dr Lokesh Agarwal",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Radiology #Dams",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "1",
				"allow_comments": "1",
				"is_new": "0",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510213261179",
				"is_like": "0",
				"is_viewed": "0"
			},
			{
				"id": "21",
				"video_title": "Dr  Varidh Katiyar Rank :-AIIMS - 3 & PGI - 20",
				"video_type": "1",
				"URL": "https://www.youtube.com/watch?v=ABo3n_df2H8",
				"author_name": "damsdelhi",
				"thumbnail_url": "https://i.ytimg.com/vi/ABo3n_df2H8/hqdefault.jpg",
				"video_desc": "Dr  Varidh Katiyar Rank :-AIIMS - 3 & PGI - 20",
				"main_cat": "1",
				"sub_cat": "9",
				"tags": "#Radiology #dams",
				"start_date": "2017-11-01 06:30",
				"end_date": "2018-01-31 14:30",
				"initial_view": "Radiology",
				"screen_tag": "Radiology",
				"featured": "0",
				"allow_comments": "1",
				"is_new": "1",
				"comments": "0",
				"views": "0",
				"likes": "0",
				"creation_time": "1510219854881",
				"is_like": "0",
				"is_viewed": "0"
			}
		],
		"error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>3) ADD COMMENT </h4>

	Method -:      Post 
	Service url -: data_model/video/video_comment/add_comment

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		video_id -> 1  // primary id of Video 
		comment -> "send text here" 
		parent_id -> 1 // if get comment of a comment  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment added.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>4) EDIT COMMENT </h4>

	Method -:      Post 
	Service url -:  data_model/video/video_comment/update_comment

	Input parameter -:	
	##input_parm_start## 
		id-> 1 // primary key of comment 
		user_id -> 1  // primary id of logged in user  
		video_id -> 1  // primary id of Video  
		comment -> "send text here" 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment updated.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>5) DELETE COMMENT</h4> 

	Method -:      Post 
	Service url -: data_model/video/video_comment/delete_comment

	Input parameter -:	
	##input_parm_start## 
		id-> 1 // primary key of comment 
		user_id -> 1  // primary id of logged in user  
		video_id -> 1  // primary id of video 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Comment deleted.",
	  "data": [],
	  "error": []
	}	##output_code_end##

DIVDER-SEGMENT

<h4>6) GET VIDEO COMMENT LIST</h4>  

	Method -:      Post 
	Service url -: data_model/video/video_comment/get_video_comment

	Input parameter -:	
	##input_parm_start## 
		video_id -> 1  // primary id of Post 
		last_comment_id ->0  // primary id of comment 
		parent_id -> 1 // if get comment of a comment 
	##input_parm_end##		
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "Comment details.",
		"data": [
			{
				"id": "4",
				"video_id": "7",
				"user_id": "7",
				"comment": "hello users tagging implimentation",
				"time": "1510224000409",
				"name": "Tejpal Singh",
				"profile_picture": "https://s3-ap-south-1.amazonaws.com/dams-apps-production/fanwall_images/EA6C5D7A-FA46-465A-ACCB-EEE82819D191-9440-00000A52663F67D1.png"
			},
			{
				"id": "3",
				"video_id": "7",
				"user_id": "7",
				"comment": "hello users tagging implimentation",
				"time": "1510223999795",
				"name": "Tejpal Singh",
				"profile_picture": "https://s3-ap-south-1.amazonaws.com/dams-apps-production/fanwall_images/EA6C5D7A-FA46-465A-ACCB-EEE82819D191-9440-00000A52663F67D1.png"
			}
		],
		"error": []
	}
	##output_code_end##
		False case 
		##output_code_start##
	{
	  "status": false,
	  "message": "No comment found.",
	  "data": [],
	  "error": []
	}
	##output_code_end##		

DIVDER-SEGMENT
<h4>7) UPDATE VIEW TO VIDEO</h4>  

	Method -:      Post 
	Service url -: data_model/video/Video_channel/add_video_counter

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		video_id -> 1  // primary id of video 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
		"status": true,
		"message": "View updated",
		"data": [],
		"error": []
	}
	##output_code_end##
DIVDER-SEGMENT

<h4>8) LIKE VIDEO </h4>

	Method -:      Post 
	Service url -: data_model/video/Video_like/like_video

	Input parameter -:
##input_parm_start## 	
		user_id -> 1  // primary id of logged in user  
		video_id -> 1  // primary id of Video 
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Video liked.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "Video Already liked.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

DIVDER-SEGMENT

<h4>9) DISLIKE VIDEO </h4>

	Method -:      Post 
	Service url -: data_model/video/Video_like/dislike_video

	Input parameter -:	
	##input_parm_start## 
		user_id -> 1  // primary id of logged in user  
		video_id -> 1  // primary id of Video  
	##input_parm_end##
	Response -:
	True case  
	##output_code_start##
	{
	  "status": true,
	  "message": "Video disliked.",
	  "data": [],
	  "error": []
	}
	##output_code_end##

	False case 
	##output_code_start##
	{
	  "status": false,
	  "message": "",
	  "data": [],
	  "error": []
	}
	##output_code_end##	

DIVDER-SEGMENT
</pre>
</div>
<?php
$custum_js = <<<EOD
				<script type="text/javascript" language="javascript" > 
				$('#container').addClass('sidebar-closed');
				function searchapi(str){
					console.log(str);
					$('.api-cat li').hide();
				  var txt = str;
				  $('.api-cat li').each(function(){
					 if($(this).text().toUpperCase().indexOf(str.toUpperCase()) != -1){
						 $(this).show();
					 }
				  });
				}
				$('#main-content').css('margin-left',"0px");
					$(document).ready(function(){
						var text = $('.api_file_meta').html();
						text = text.replace(/Method -:/g, '<span class="btn btn-info btn-xs bold">METHOD -: </span>'); 

						text = text.replace(/Service url -:/g, '<span class="btn btn-success btn-xs bold">SERVICE URL -: </span>'); 	
						text = text.replace(/Input parameter -:/g, '<span class="bold">INPUT PARAMETER -:</span>'); 
						text = text.replace(/True case/g, '<span class="btn btn-success btn-xs bold">True case</span>'); 
						text = text.replace(/False case/g, '<span class="btn btn-danger btn-xs bold">False case </span>'); 		
						text = text.replace(/DIVDER-SEGMENT/g, '<span style=" border: 1px solid;" class="col-md-12"></span>');	
						text = text.replace(/Response -:/g, '<span class="bold">RESPONSE -: </span>');			
						text = text.replace(/##output_code_start##/g, '<figure class="highlight" style="background: #2e2f33 none repeat scroll 0 0;color: white;"> ');
						text = text.replace(/##output_code_end##/g, '</figure>');
						text = text.replace(/##input_parm_start##/g, '<figure class="highlight" style="background:#929499;color: white;"> ');
						text = text.replace(/##input_parm_end##/g, '</figure>');
						$('.api_file_meta').html(text);
						$('.api_file_meta h4').css('padding-top','65px');

						$( ".api_file_meta h4" ).each(function( index ) {
							$( this ).attr('id','api'+index);
							$( ".api-cat" ).append('<li><a href="#api'+index+'"><i class=" fa fa-angle-right"></i> '+$( this ).html()+'</a></li>')
						  });
					});
				    
               </script>              
EOD;
echo modules::run('auth_panel/template/add_custum_js',$custum_js );
