<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="Keywords" content="Massively multiplayer online games, mmo, rpg online games, games, game, free online games, Webzen, new slogan, next generation, MVCore, Mu Online, Mu, Game, Online, Server, Play, For, Free, Season, s2, s3, s4, s5, s6, s7, s8, s9, blade master, grand master, hight elf, dimension master, duel master, lord emperor, fist master, massive portal promotion, Jump Start with fully-Geared High leveled characters, Skip the low, Jump to hight,Top-notch, high level avatars">
		<meta name="description" content="MuOnline Private Server Website" />
		<title><?php echo $mvcore['title'];?></title> <!-- Can edit from AdminCP -->
		<link rel="shortcut icon" href="system/engine_images/favi.png" /> <!-- MVCore ICO -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script> <!-- JS-->
		<?php include('system/theme_inc/inc.item_viewer.php'); ?> <!-- Item View JS -->
		<?php include('system/engine_css/mvcore_style.php'); ?> <!-- Engine CSS -->

		<link rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/bootstrap.min.css">
		<link rel="shortcut icon" href="/themes/<?php echo $mvcore['theme_dir'];?>/images/favicon.ico"/>
		<link rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/css-reset.css" type="text/css"/>
		<link rel="stylesheet" href=/themes/<?php echo $mvcore['theme_dir'];?>/css/orbit.css" type="text/css"/>
		<link rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/style8e9a.css?v13" type="text/css"/>
        <script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
		<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jquery-ui.min.js"></script>	
	</head>
<body> 



<div id="exception"></div>
<div class="wrapper">
<header class="header">
<div class="ServerClock">
		<tr>
			<td>
				<table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" style="padding-left:50px;">
					<tr align="left">
						<td style="background: url('/themes/<?php echo $mvcore['theme_dir'];?>/img/sv1.png') no-repeat left top; width:158px; height:71px;font-size:11px;">
							<div style="margin-top:-25px;margin-left:70px;"><font color="white">GameServer</font><br><b><?php echo $fn_serverStatus_GS; ?></b></div>
						</td>
					</tr>
				</table>
			</td>
		</tr>

</div>

<ul class="menu-top">
			
					<?php if($mvcore['News']=='on') { ?><li><a href="-id-News.html"><?php echo''.theme_link_news.''; ?></a></li><?php } ?>
					<?php if($mvcore['Register']=='on' && $_SESSION['user_login'] != 'ok') { ?><li><a href="-id-Register.html"><?php echo''.theme_link_register.''; ?></a></li><?php } ?>
					<?php if($mvcore['Downloads']=='on') { ?><li><a href="-id-Downloads.html"><?php echo''.theme_link_downloads.''; ?></a></li><?php } ?>
					<?php if($mvcore['Rankings']=='on') { ?><li><a href="-id-Rankings.html"><?php echo''.theme_link_rankings.''; ?></a></li><?php } ?>
					<?php if($mvcore['Statistics']=='on') { ?><li><a href="-id-Statistics.html"><?php echo''.theme_link_statistics.''; ?></a></li><?php } ?>
					<?php if($mvcore['Banned_Players']=='on') { ?><li><a href="-id-Banned_Players.html"><?php echo''.theme_link_bannedp.''; ?></a></li><?php } ?>
					<?php if($mvcore['Gallery']=='on') { ?><li><a href="-id-Gallery.html"><?php echo''.theme_link_gallery.''; ?></a></li><?php } ?>
					<?php if($mvcore['Market']=='on') { ?><li><a href="-id-Market.html"><?php echo''.theme_link_market.''; ?></a></li><?php } ?>
<!--					<?php if($mvcore['Webshop']=='on') { ?><li><a href="-id-Webshop.html"><?php echo''.theme_link_webshop.''; ?></a></li><?php } ?> -->
<!--					<?php if($mvcore['Forum']=='on') { ?><li><a target="blank" href="<?php echo $mvcore['forurl']; ?>"><?php echo''.theme_link_forum.''; ?></a></li><?php } ?>-->
				</ul>
</header>

<div class="container">
	<main class="content">
	
<div class="slider">
<div id="featured"> 
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" >
<tr><td valign="top"><?php include('system/theme_inc/inc.slider.php'); ?> <!-- Slider Image Output --></td></tr>
</table>
</div> 
</div>
            
          

            
<br>

<div class="news-block">
<div class="news-title block-title">
<h3>Tin tức</h3>
<div class="news-tab">
<button data-tab="global" class="btn-block active">Tin mới</button>
</div>
</div>
<div class="news active" id="global">
<?php include('system/engine_pages.php'); ?>      
</div>
</div>
        
</main>
<aside class="sidebar">
	<div class="sign-up-block">
		<a href="index.php?page_id=register"><span>Đăng ký</span>Miễn phí</a>
    </div><!-- sign-up-block -->
	
	<div class="social-blocks">
		<div class="social-block social-f">
			<a href="<?=$config_template->Facebook;?>">Facebook</a>
        </div>
        <div class="social-block social-y">
          <a target="_blank" href="<?=$config_template->YouTube;?>">Youtube</a>
        </div>
	</div>
	
	<div class="server-block">
	
<div style="background: url('/themes/<?php echo $mvcore['theme_dir'];?>/img/module-title.png') repeat-y center top; background-size: 100%;height:42px;margin-top:0px;line-height:42px;font-size:14px;text-align:center;color:#FFF;text-transform: uppercase;">Thông tin máy chủ</div>
<?php include('modules/inc.statistic.php'); ?> <!-- Statistics -->
	</div>
<div class="login-block">
<div class="block-p login-panel">


									
								<tr>
									<td valign="top">
										<div style="background: url('/themes/<?php echo $mvcore['theme_dir'];?>/img/module-title.png') repeat-y center top; background-size: 110%;height:42px;margin-top:0px;line-height:42px;font-size:14px;text-align:center;color:#FFF;text-transform: uppercase;">USER <?php if($_SESSION['user_login'] == 'ok') { echo'<u>'.$_SESSION['username'].'</u>'; } else { echo'LOGIN';} ?></div>
			
												<?php if($_SESSION['user_login'] != 'ok') { ?>
												<form action="" method="POST">
												
													<?php
													if($mvcore['multi_dbs_supp'] == 'on' && $mvcore['multi_dbs_app_t_sw'] == 'swsbl') {
															echo '<tr align="center"><td><select name="database_load" class="mvcore-select-main" style="color:#000;width:230px !important;">';
															$cmulti_dbs = explode(',',$mvcore['multi_dbs_names']);
															$cmulti_dbs_titl = explode(',',$mvcore['multi_dbs_titlen']);
															for($i=0;$i < count($cmulti_dbs);++$i) {
																if($_SESSION['database_load']==$cmulti_dbs[$i]){ $opdsvgf[$i] = 'selected'; }else{ $opdsvgf[$i] = ''; };
																echo '<option value="'.$cmulti_dbs[$i].'" '.$opdsvgf[$i].'>'.$cmulti_dbs_titl[$i].'</option>';
															};
															echo '</select></td></tr>';
													}
													?>
													<tr align="center">
														<td><input type="text" name="usern" class="field" value="" placeholder="Username" style="color:#000;width:230px !important;"></td>
													</tr>
													<tr align="center">
														<td><input type="password" name="passn" class="field" value="" placeholder="Password" style="color:#000;width:230px !important;"></td>
													</tr>
													<tr align="center">
														<td>
															<button class="cont" name="loginacc" style="margin-top:5px;cursor:pointer" type="submit"><?php echo main_p_user_login_login; ?></button>
															</td>
													</tr>
												
												</form>
												<?php } else { ?>
													
													<?php
														if($mvcore['multi_dbs_supp'] == 'on') {
															echo '<div class="latest-twitter-tweett"><img src="/themes/'.$mvcore['theme_dir'].'/img/pc.png" width="15px"> Server: <b>';
															$cmulti_dbs = explode(',',$mvcore['multi_dbs_names']);
															$cmulti_dbs_titl = explode(',',$mvcore['multi_dbs_titlen']);
															for($i=0;$i < count($cmulti_dbs);++$i) {
																if($cmulti_dbs[$i] == $db_name_multi) { echo ''.$cmulti_dbs_titl[$i].''; break; } else {};
															};
															echo '</b></div>';
														};
													?>
													
													<div class="latest-twitter-tweett"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/cred.png"> <?php echo $mvcore['money_name1']; ?>: <b><?php echo $mvc_Money_credits; ?></b></div>
													<div class="latest-twitter-tweett"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/gold.png"> <?php echo $mvcore['money_name2']; ?>: <b><?php echo $mvc_Money_goldcredits; ?></b></div>
													<div class="latest-twitter-tweett"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/wcoins.png"> wCoins: <b><?php echo $mvc_Money_wcoins; ?></b></div>
													<div class="latest-twitter-tweett"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/zen.png"> Vault Zen: <b><?php echo $mvc_Money_VaultZen; ?></b></div>
													
													<!-- =-=-= Main Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
													<?php if($mvcore['Account_Settings']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Account_Settings.html"><?php echo''.theme_link_accountsett.''; ?></a></div><?php } ?>
													<?php if($mvcore['Payment_System']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Payment_System.html" style="color:red;"><?php echo''.theme_link_paymentsys.''; ?></a></div><?php } ?>
													<div class="latest-twitter-tweett"><a href="-id-Game_Panel.html"><b>Game Panel</b></a></div>
													<?php if($mvcore['Vote']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Vote.html"><?php echo''.theme_link_freevote.''; ?></a></div><?php } ?>


													<!-- =-=-= Extra Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
													<?php if($mvcore['Hide_Information']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Hide_Information.html"><?php echo''.theme_link_hideiteminfo.''; ?></a></div><?php } ?>
													<?php if($mvcore['Friend_System']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Friend_System.html"><?php echo''.theme_link_friendsys.''; ?></a></div><?php } ?>
													<?php if($mvcore['Exchange_System']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Exchange_System.html"><?php echo''.theme_link_exchangesys.''; ?></a></div><?php } ?>
													<?php if($mvcore['GM_Buy']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-GM_Buy.html"><?php echo''.theme_link_gmbuy.''; ?></a></div><?php } ?>
													<?php if($mvcore['Vip_Buy']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Vip_Buy.html"><?php echo''.theme_link_vipbuy.''; ?></a></div><?php } ?>
													<?php if($mvcore['Lottery_System']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Lottery_System.html"><?php echo''.theme_link_lotterysys.''; ?></a></div><?php } ?>
													<?php if($mvcore['Warehouse']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Warehouse.html"><?php echo''.theme_link_warehouse.''; ?></a></div><?php } ?>
													<?php if($mvcore['Castle_Siege_Register']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Castle_Siege_Register.html"><?php echo''.theme_link_caslesiegereg.''; ?></a></div><?php } ?>
													<?php if($mvcore['Item_Upgrade_System']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Item_Upgrade_System.html"><?php echo''.theme_link_itemupgradesys.''; ?></a></div><?php } ?>
													<?php if($mvcore['anc_mob_onoff']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Ancient_Exchange.html"><?php echo''.theme_link_ancexc.''; ?></a></div><?php } ?>
													<?php if($mvcore['My_Sponsor']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-My_Sponsor.html"><?php echo''.theme_link_mysponsors.''; ?></a></div><?php } ?>
													<?php if($mvcore['Scramble']=='on') { ?><div class="latest-twitter-tweett"><a href="-id-Scramble_Event.html"><?php echo''.theme_link_scrambleevent.''; ?></a></div><?php } ?>
													
													<!-- =-=-= Admin/GM Panel Buttons ( Secured With PHP ) =-=-= -->
													<?php if($_SESSION['admin_panel']=='ok') { ?><div class="latest-twitter-tweett"><a target="_blank" href="-id-admincp-id-Dashboard.html">Admin Panel</a></div><?php } ?>
													<?php if($_SESSION['gm_panel']=='ok') { ?><div class="latest-twitter-tweett"><a href="-id-gm_cp-id-GM_Panel.html"><?php echo''.theme_link_gmpanel.''; ?></a></div><?php } ?>
													<div class="latest-twitter-tweett"><a href="-id-exitacc.html"><?php echo''.theme_link_logout.''; ?></a></div> <!-- Logout -->
												<?php } ?>
						
								
									</td>
								</tr>
	
</div> 
</div>

<div class="best-players">
<div class="sidebar-title best-players-title">Xếp hạng <span>TOP <b>10</b></span></div>
<div class="top-players block-p">
<?php include('system/theme_inc/inc.top_characters.php'); ?></div>

<div class="login-block">
<div class="sidebar-title">TOP 10 Xếp hạng GUILD</span></div>
<div class="top-players block-p"><?php include('system/theme_inc/inc.top_guilds.php'); ?></div></div>

<div class="login-block">
<div class="sidebar-title">DISCORD</div>
<div class="top-players block-p">
<!--Link-->
</div>
</div>

</aside>
</div>

<footer class="footer">
<div class="bottom-menu"></div>
<div id="toTop"></div>
<div class="copyright">Copyright 2020 © <a href="#"><?=$config_template->Nombre;?></a> <br>All Rights Reserved</div>
</footer>
</div>



<!-- Video Modal -->
<div class='modal_window' id="video_modal">
<a href="#" class='close_mw close-r'></a>
<iframe width="1000" height="540" src="https://www.youtube.com/embed/F99F_5QTopY" allowfullscreen></iframe>
</div>
<a data-modal-div="select_server" href="#" id="server_click" style="display: hidden;"></a><script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jed.js"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jquery.leanModal.min.js"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jquery.tooltip.js"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jquery.orbit.js"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/ejs.js"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/helpers.js"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/app43a0.js?v3"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/global.js"></script>

<script type="text/javascript">var DmNConfig={base_url:'https://xmuonline.net/',tmp_dir:'xmuonline.net',currenttime:'Feb 24, 2020 11:20:21',ajax_page_load:0,dmn_csrf_token:'MjE1ODI1NTQwMjE0ZTljMmJkYmMxNTU1ODhmMTdmOTk4MGMyNDE4NjdiZTVhZDM5MGE4NjV2ZWNucjRmMG52dDNsbmV2ZTh0NQ=='};$(document).ready(App.initialize,App.locale={"messages":{"":{"domain":"messages","lang":"en","plural-forms":"nplurals=2; plural=(n != 1);"}}},App.initLocalization());$(window).load(function(){$('#featured').orbit({'bullets':true,'timer':true,'animation':'horizontal-slide'});});</script>			
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/validation/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="/themes/<?php echo $mvcore['theme_dir'];?>/js/validation/jquery.validationEngine.js" type="text/javascript"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137694350-1"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-137694350-1');</script>

<!-- cookie system -->
<script>function setCookie(cname,cvalue,exmin){var d=new Date();d.setTime(d.getTime()+(exmin*60*1000));var expires="expires="+d.toUTCString();document.cookie=cname+"="+cvalue+";"+expires+";path=/";}function getCookie(cname){var name=cname+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' '){c=c.substring(1);}if(c.indexOf(name)==0){return c.substring(name.length,c.length);}}return"";}function checkCookie(){var user=getCookie("banner");if(user==""){document.getElementById('blackOverlay').style.display='block';document.getElementById('popup').style.display='block';}}function closePopup(){document.getElementById('blackOverlay').style.display='none';document.getElementById('popup').style.display='none';setCookie("banner","ok",30);}</script>

</body>

<!-- Mirrored from xmuonline.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 14:20:35 GMT -->
</html>