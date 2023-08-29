<?php
session_start();
if (!isset($_SESSION['username']))
{
   $_SESSION['referrer'] = $_SERVER['REQUEST_URI'];
   header('Location: ./acesso_negado.html');
   exit;
}
if (isset($_SESSION['expires_by']))
{
   $expires_by = intval($_SESSION['expires_by']);
   if (time() < $expires_by)
   {
      $_SESSION['expires_by'] = time() + intval($_SESSION['expires_timeout']);
   }
   else
   {
      unset($_SESSION['username']);
      unset($_SESSION['expires_by']);
      unset($_SESSION['expires_timeout']);
      $_SESSION['referrer'] = $_SERVER['REQUEST_URI'];
      header('Location: ./acesso_negado.html');
      exit;
   }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   unset($_SESSION['username']);
   unset($_SESSION['fullname']);
   header('Location: ./index.php');
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Windows Settings</title>
<meta name="generator" content="WYSIWYG Web Builder - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="Site_Download_parceiros.css" rel="stylesheet">
<link href="documentacao_clone.css" rel="stylesheet">
</head>
<body>
<div id="FlexGrid3">
<div class="title">
<div id="wb_title">
<h1 id="title">Windows Settings</h1>
</div>
</div>
</div>
<div id="FlexGrid2">
<div id="FlexGrid2-grid">
<div class="search">
<input type="text" id="find-input" name="find" value="" spellcheck="false" placeholder="Find a setting">
<div id="wb_icon-find">
<div id="icon-find"><i class="fa fa-search"></i></div>
</div>
</div>
</div>
</div>
<div id="FlexGrid1">
<div id="FlexGrid1-grid">
<div class="system">
<div id="wb_icon-system">
<a href="./index.php"><div id="icon-system"><i class="fa fa-laptop"></i></div></a>
</div>
<div id="wb_text-system" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>System<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:21px;">Display, notifications, power</span>
</div>
</div>
<div class="devices">
<div id="wb_icon-devices">
<a href="./index.php"><div id="icon-devices"><i class="fa fa-keyboard-o"></i></div></a>
</div>
<div id="wb_text-devices" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Devices<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Bluetooth, printers, mouse</span>
</div>
</div>
<div class="phone">
<div id="wb_icon-phone">
<a href="./index.php"><div id="icon-phone"><i class="fa fa-mobile"></i></div></a>
</div>
<div id="wb_text-phone" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Phone<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Link your Android, iPhone</span>
</div>
</div>
<div class="network">
<div id="wb_icon-network">
<a href="./index.php"><div id="icon-network"><i class="fa fa-globe"></i></div></a>
</div>
<div id="wb_text-network" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Network &amp; Internet<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Wi-Fi, airplane mode, VPN</span>
</div>
</div>
<div class="personalization">
<div id="wb_icon-personalization">
<a href="./index.php"><div id="icon-personalization"><i class="fa fa-pencil"></i></div></a>
</div>
<div id="wb_text-personalization" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Personalization<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Background, lock screen, colors</span>
</div>
</div>
<div class="apps">
<div id="wb_icon-apps">
<a href="./index.php"><div id="icon-apps"><i class="fa fa-list"></i></div></a>
</div>
<div id="wb_text-apps" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Apps<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Uninstall, defaults, optional features</span>
</div>
</div>
<div class="accounts">
<div id="wb_icon-accounts">
<a href="./index.php"><div id="icon-accounts"><i class="fa fa-user-o"></i></div></a>
</div>
<div id="wb_text-accounts" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Accounts<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:15px;">Your accounts, email, sync, work, family</span>
</div>
</div>
<div class="time">
<div id="wb_icon-time">
<a href="./index.php"><div id="icon-time"><i class="fa fa-clock-o"></i></div></a>
</div>
<div id="wb_text-time" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Time &amp; Language<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Speech, region,date</span>
</div>
</div>
<div class="gaming">
<div id="wb_icon-gaming">
<a href="./index.php"><div id="icon-gaming"><i class="fa fa-gamepad"></i></div></a>
</div>
<div id="wb_text-gaming" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Gaming<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:15px;">Game bar, DVR, broadcasting, Game Mode</span>
</div>
</div>
<div class="easeofaccess">
<div id="wb_icon-easeofuse">
<a href="./index.php"><div id="icon-easeofuse"><i class="fa fa-universal-access"></i></div></a>
</div>
<div id="wb_text-easeofuse" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Ease of Use<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Narrator, magnifier, high contrast</span>
</div>
</div>
<div class="privacy">
<div id="wb_icon-privacy">
<a href="./index.php"><div id="icon-privacy"><i class="fa fa-lock"></i></div></a>
</div>
<div id="wb_text-privacy" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Privacy<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Location, camera</span>
</div>
</div>
<div class="update">
<div id="wb_icon-update">
<a href="./index.php"><div id="icon-update"><i class="fa fa-refresh"></i></div></a>
</div>
<div id="wb_text-update" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Update &amp; Security<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Windows update, recovery, backup</span>
</div>
</div>
<div class="search">
<div id="wb_text-search" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Search<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Language, permissions, history</span>
</div>
</div>
</div>
</div>


<div id="wb_Logout1">
<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<button type="submit" name="logout" value="Deslogar" id="Logout1">Deslogar</button>
</form>
</div>
<div id="wb_LoginName1">
<span id="LoginName1">Bem vindo (a) !<?php
if (isset($_SESSION['username']))
{
   echo $_SESSION['username'];
}
else
{
   echo 'não está logado';
}
?>!</span></div>
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="documentacao_clone.js"></script>
</body>
</html>