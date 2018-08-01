<?php
/*Saving the values of checkboxes in the database*/
add_action("init", "ced_ss_includes_add_icons");
function ced_ss_includes_add_icons()
{
	if(isset($_POST['save']))
	{
		$ced_ss_includes_enablegoogle = isset($_POST['google_checkbox'])?$_POST['google_checkbox']:"";
		$ced_ss_includes_enableinsta = isset($_POST['instagram_checkbox'])?$_POST['instagram_checkbox']:"";
		$ced_ss_includes_enabletwitter = isset($_POST['twitter_checkbox'])?$_POST['twitter_checkbox']:"";
		update_option("checkgoogle",$ced_ss_includes_enablegoogle);
		update_option("checkinsta",$ced_ss_includes_enableinsta);
		update_option("checktwitter",$ced_ss_includes_enabletwitter);
	}
	/*Adding icons of social media*/	
	$ced_ss_includes_icon_insta= "<i class='fa fa-instagram' style='font-size:54px'></i>";
	$ced_ss_includes_icon_google= "<i class='fa fa-google' style='font-size:54px'></i>";
	$ced_ss_includes_icon_twitter="<i class='fa fa-twitter' style='font-size:54px'></i>";
	/*Saving the images in the databases*/
	update_option("instagram", $ced_ss_includes_icon_insta);
	update_option("google", $ced_ss_includes_icon_google);
	update_option("twitter", $ced_ss_includes_icon_twitter);
}
?>
