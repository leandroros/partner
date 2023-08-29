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
<link href="documentacao.css" rel="stylesheet">
<link rel="stylesheet" href="magnificpopup/magnific-popup.css">
</head>
<body>
<div id="FlexGrid3">
<div class="title">
<div id="wb_title">
<h1 id="title">Documentos para apoio ao parceiro</h1>
</div>
</div>
</div>
<div id="FlexGrid2">
<div id="FlexGrid2-grid">
<div class="search">
<input type="text" id="find-input" name="find" value="" spellcheck="false" placeholder="Localize">
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
<a href="javascript:displaylightbox('./Gravação de vídeo por aba  (2023-08-09 17_00 GMT-3).mp4',{})" target="_self"><div id="icon-system"><i class="fa fa-video-camera"></i></div></a>
</div>
<div id="wb_text-system" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Video Conf.Planilha<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:21px;">Aba de Parâmetros Gerais</span>
</div>
</div>
<div class="devices">
<div id="wb_IconFont1">
<a href="javascript:displaylightbox('./Gravação de vídeo por aba configuracao por aplicativo.mp4',{})" target="_self"><div id="IconFont1"><i class="fa fa-video-camera"></i></div></a>
</div>
<div id="wb_Text1" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Video Conf.Planilha<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:21px;">Aba de Config. por Aplicativo</span>
</div>
</div>
<div class="phone">
<div id="wb_IconFont2">
<a href="javascript:displaylightbox('./Gravação de vídeo por aba palavras sensiveis.mp4',{})" target="_self"><div id="IconFont2"><i class="fa fa-video-camera"></i></div></a>
</div>
<div id="wb_Text2" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Video Conf.Planilha<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:21px;">Aba de Palavras Sensíveis</span>
</div>
</div>
<div class="network">
<div id="wb_IconFont5">
<a href="./index.php"><div id="IconFont5"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_Text5" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Manual DLP<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Instalação</span>
</div>
</div>
<div class="personalization">
<div id="wb_IconFont6">
<a href="./index.php"><div id="IconFont6"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_Text4" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Manual DLP<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Desinstalação</span>
</div>
</div>
<div class="apps">
<div id="wb_icon-apps">
<a href="./index.php"><div id="icon-apps"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_text-apps" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Troubleshoot<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">DLP</span>
</div>
</div>
<div class="accounts">
<div id="wb_icon-accounts">
<a href="./index.php"><div id="icon-accounts"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_text-accounts" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Contatos<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">DLP - SAC</span>
</div>
</div>
<div class="time">
<div id="wb_icon-time">
<a href="./index.php"><div id="icon-time"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_text-time" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Time &amp; Language<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Speech, region,date</span>
</div>
</div>
<div class="gaming">
<div id="wb_IconFont7">
<a href="./index.php"><div id="IconFont7"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_Text6" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Time &amp; Language<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Speech, region,date</span>
</div>
</div>
<div class="easeofaccess">
<div id="wb_IconFont8">
<a href="./index.php"><div id="IconFont8"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_Text7" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Time &amp; Language<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Speech, region,date</span>
</div>
</div>
<div class="privacy">
<div id="wb_icon-privacy">
<a href="./index.php"><div id="icon-privacy"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_text-privacy" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Privacy<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Location, camera</span>
</div>
</div>
<div class="update">
<div id="wb_icon-update">
<a href="./index.php"><div id="icon-update"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_text-update" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Update &amp; Security<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Windows update, recovery, backup</span>
</div>
</div>
<div class="search">
<div id="wb_IconFont3">
<a href="./index.php"><div id="IconFont3"><i class="fa fa-file-pdf-o"></i></div></a>
</div>
<div id="wb_Text3" class="text-alignment">
<span style="color:#999999;font-family:Arial;font-size:19px;line-height:21px;"><strong>Update &amp; Security<br></strong></span><span style="color:#999999;font-family:Arial;font-size:13px;line-height:16px;">Windows update, recovery, backup</span>
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
<div id="wb_IconFont4">
<div id="IconFont4"><i class="fa fa-address-book"></i></div></div>
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="magnificpopup/jquery.magnific-popup.min.js"></script>
<script src="documentacao.js"></script>
</body>
</html>