<?php include("config/function.php"); ?>
<?php include("include/main_header.php"); ?>
<?php
if(!empty($_COOKIE['language_modal_english']) && $_COOKIE['language_modal_english']=='English')
{
	header('location:'._siteuri().'en');
}
if(!empty($_COOKIE['language_modal_italian']) && $_COOKIE['language_modal_italian']=='Italian')
{
	header('location:'._siteuri().'it');
}

?>
<!--============LANGAUGE POP_UP BOX ON SITE==============-->
<?php 
if(empty($_COOKIE['language_modal_english']) || empty($_COOKIE['language_modal_italian']))
{
?>
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> 
	<h2 class="lang">Choose Language</h2>
	<!--<div id="lorem">
	  <p class="custompoptxt">Nunc molestie leo vitae est rhoncus mattis. Sed eget tellus eu est aliquet molestie. Aliquam nec felis rhoncus, suscipit sapien eget, elementum felis. Vivamus lorem nulla, ornare vel dapibus sit amet, suscipit eu purus. Sed dui libero, faucibus vel nibh vitae, cursus consequat augue. Nulla facilisi. Aenean facilisis elit nec eros facilisis suscipit.</p>
	  
	  <p class="custompoptxt">Nunc molestie leo vitae est rhoncus mattis. Sed eget tellus eu est aliquet molestie. Aliquam nec felis rhoncus, suscipit sapien eget, elementum felis. Vivamus lorem nulla, ornare vel dapibus sit amet, suscipit eu purus. Sed dui libero, faucibus vel nibh vitae, cursus consequat augue. Nulla facilisi. Aenean facilisis elit nec eros facilisis suscipit.</p>
	</div>-->
	
	
	<div id="popupfoot"> 
		<h4 class="headingcustompoptxt">Select your preferred language</h4>
		<a href="<?php echo _siteuri().'en'?>" class="en-language" ><img src="images/us_256.png" class="img-responsive btn-3" style="display:inline; width:128px;"></a>
        <!-- onclick="SetCookie('language_modal_english','English','1');"-->
		<a href="<?php echo _siteuri().'it'?>" class="it-language" ><img src="images/it_256.png" class="img-responsive btn-3" style="display:inline; width:128px;"></a>
        <!-- onclick="SetCookie('language_modal_italian','Italian','1');"-->
	</div>
	<div class="pop-bottom">
	  <small class="popustyle"><?php echo _copyright(); ?></small>
	</div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;overflow:hidden;" id="mask"></div>
</div>
<?php } ?>
<?php
//if (isset($_REQUEST['offset'])) { 
//$_SESSION['offset']=$_REQUEST['offset'];
//}else{	
//echo "<script language='javascript'>\n"; 
//echo "var d = new Date();\n"; 
//echo "location.href=\"${_SERVER['SCRIPT_NAME']}?offset=\" + d.getTimezoneOffset();\n"; 
//echo "</script>\n"; 
//exit(); 
//}	
?>
</div>
<script>
function SetCookie(c_name,value,expiredays)
{
	var exdate=new Date()
	exdate.setDate(exdate.getDate()+expiredays)
	document.cookie=c_name+ "=" +escape(value)+
	((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}
</script>
<?php include("include/main_footer.php"); ?>