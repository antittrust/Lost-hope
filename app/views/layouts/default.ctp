<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<meta http-equiv="content-language" content="fr" />
<?php echo $html->css('/css/style.css'); ?> 
</head>
<body>	

<div id="conteneur"><!-- Global -->
		<div id="menu">
			<li><?php echo $html->link('Acceuil', array('controller' =>'nouvelles', 'action' =>'index'))?></li>
		    <li><a href="#">Article</a></li>
		    <li><a href="#">Galerie</a></li>
		    <li><?php echo $html->link('Forum', array('controller' =>'forums', 'action' =>'index'))?></li>
		    <li><a href="#">PHPraid</a></li>
		    <li><?php echo $html->link('Contact', array('controller' =>'contacts', 'action' =>'index'))?></li>
		</div>
		<div id="top">
			<div class="panel_left">
			<center>
       			 <p><u>Sinscrire a la beta test</u><br />
       			 <embed type="application/x-shockwave-flash" width="268" height="235" src="http://cdn-www.swtor.com/sites/all/themes/swtor/fr/assets/swf/bucket5.swf" wmode=		"transparent" allowfullscreen="false" pluginspage="http://www.adobe.com/go/getflashplayer" align="center"></embed></p>
			</center>
			</div>
			<div class="panel_middle">
     
			</div>
			<div class="panel_right">
				<?php
				error_reporting(0);
				require_once('magpierss/rss_fetch.inc');
				$url = 'http://flux.jeuxonline.info/actualites-850-6.rss';
				$rss = fetch_rss($url);
				echo "<p><u>En direct de jeux Online</u></p><br />";
				echo "<ul>";
				foreach ($rss->items as $item) {
				$href = $item['link'];
				$title = $item['title'];
				$title = preg_replace('#\Star Wars The Old Republic :(.+)#i', ' $1', $title);
				echo "<li><a href=\"$href\">- $title</a></li><br />";
				}
				echo "</ul>";
				?>
			</div>
		</div>
		<div id="bottom"></div>

<div id="header"></div>
<div id="contenu"><!-- CONTENU -->		

<?php echo $content_for_layout ?>
 
<div id="clear"></div><!-- NE PAS SUPPRIMER -->	 
</div><!-- FIN CONTENU --> 

<div id="pied"></div><!-- PIED -->
</div><!-- FIN GLOBAL -->	  	
</body>
</html>	
