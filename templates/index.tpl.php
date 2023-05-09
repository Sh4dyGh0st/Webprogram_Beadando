<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header >

<!-- SVG ICON -->
<svg class= "svg" height ="120" width ="320" viewBox="20 20 100 100">	
<defs>
<linearGradient id ="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
<stop offset ="0%" style="stop-color:rgb(255, 145, 1);stop-opacity:1"/>
<stop offset ="100%" style="stop-color:rgb(0,0,0);stop-opacity:1"/>
</linearGradient>
</defs>
<ellipse cx ="100" cy ="70" rx ="85" ry ="55" fill="url(#grad1)"/>
<text fill ="#ffffff"font-size ="45" font-family="Verdana" x="50" y="86">MTT</text>
Sajnos a böngésződ nem támogatja az SVG-t.
</svg>
	<!-- Logo+Cím és Mottó, Session bejelentkezve -->
		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		
		<h1><?= $fejlec['cim'] ?></h1>
		
		<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
</header>

<!-- Menü-->
    <div id="wrapper">
	
        <aside id="nav">
            <nav class="navbar navbar-expand-sm bg-black navbar-dark">
                <ul class="navbar-nav">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
            </nav>
        </aside>
        <div id="content">
		
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
		<ul>
<!-- Icons+Links -->
<a href="https://twitter.com/ScaniaGroup"> <i class="fa fa-twitter-square fa-4x"></i></a>
<a href="https://www.facebook.com/scaniamagyarorszag?locale=hu_HU"> <i class="fa fa-facebook-square fa-4x"></i></a>
<a href="https://www.youtube.com/@ScaniaMagyarorszag"> <i class="fa fa-youtube-square fa-4x"></i></a></br>
		
<!-- Script -->
<script class="local" type="text/javascript">
if(sessionStorage.hits){
	sessionStorage.hits=Number(sessionStorage.hits) +1;
}else {
	sessionStorage.hits=1;
}
document.write("Ön ennyiszer járt az oldalon:" + sessionStorage.hits);
</script>
</ul>

<!-- Kép -->
<img src="./images/<?=$lablec['kepforras']?>" alt="<?=$lablec['kepalt']?>">

    </footer>
</body>

</html>
