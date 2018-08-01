<?php
/*fetching values of the enabled checkboxes*/
$ced_ss_admin_enablegoogle=get_option("checkgoogle", false);
$ced_ss_admin_enableinsta=get_option("checkinsta", false);
$ced_ss_admin_enabletwitter=get_option("checktwitter", false);
$ced_ss_admin_checked2 = "";
$ced_ss_admin_checked3 = "";
$ced_ss_admin_checked4 = "";
if($ced_ss_admin_enablegoogle == "on")
{
	$ced_ss_admin_checked_google = "checked";
}
if($ced_ss_admin_enableinsta == "on")
{
	$ced_ss_admin_checked_insta = "checked";
}
if($ced_ss_admin_enabletwitter == "on")
{
	$ced_ss_admin_checked_twitter = "checked";
}
?>
<h1>General Settings</h1>
<!--checkbox display form-->
<form method='post'>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="blogname">Share on google</label>
			</th>
			<td>
				<input class="regular-text" type='checkbox' <?php echo $ced_ss_admin_checked_google;?> name='google_checkbox'>Enable
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="blogname">Share on instagram</label>
			</th>
			<td>
				<input class="regular-text" type='checkbox' <?php echo $ced_ss_admin_checked_insta;?> name='instagram_checkbox'>Enable
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="blogname">Share on twitter</label>
			</th>
			<td>
				<input class="regular-text" type='checkbox' <?php echo $ced_ss_admin_checked_twitter;?> name='twitter_checkbox'>Enable
			</td>
		</tr>
	</table>
	<p class="submit"><input name="save" id="submit" class="button button-primary" value="Save Changes" type="submit"></p>		
</form>
<!--checkbox display form ends-->
