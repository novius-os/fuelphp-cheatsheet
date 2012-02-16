<!doctype html>
<!--[if lt IE 7 ]><html class="ie6 ie67 ie no-js" lang="en"><![endif]-->
<!--[if IE 7 ]>   <html class="ie7 ie67 ie no-js" lang="en"><![endif]-->
<!--[if IE 8 ]>   <html class="ie8 ie no-js" lang="en"><![endif]-->
<!--[if IE 9 ]>   <html class="ie9 ie no-js" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
		<meta name="viewport" content="width=device-width" />
		
    <title>Novius OS brings you the FuelPHP 1.1 Cheat Sheet</title>
		
    <link rel="shortcut icon" href="http://fuelphp.com/addons/themes/fuel/img/favicon.png" type="image/x-icon">
    <link href="/static/modules/labs_cheatsheet/stylesheets/all.css" media="all" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic" type="text/css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" type="text/css" />
</head>
<body>

<?
	$i = 0;
    foreach ($classes as $classe) {
	    if ($i === 0 || isset($classe['pagebreak'])) {
?>
	    <header class="<?= $i != 0 ? 'print' : '' ?>">
		    <h1>
			    <a href="http://fuelphp.com/">FuelPHP</a> v1.1 Cheat Sheet
		    </h1>
		    <a href="/static/modules/labs_cheatsheet/fuelphp-cheatsheet-by-novius-os.pdf" target="_blank" class="pdf">Download the PDF</a>
				
		    <div class="logo">
					Brought to you by:
			    <a href="http://www.novius-os.org/en/" title="Novius OS, HTML5 and FuelPHP CMS">
				    <img src="/static/modules/labs_cheatsheet/images/logo-novius-os.png" />
				    <span>www.novius-os.org</span>
			    </a>
		    </div>
				
				<div class="qr">
				 <img src="/static/modules/labs_cheatsheet/images/qr.png" />
				</div>
	    </header>
	    <section class="<?= $i != 0 ? 'print' : '' ?>">
		    <ul>
			    <li><span class="return">b</span> Boolean</li>
			    <li><span class="return">s</span> String</li>
			    <li><span class="return">f</span> Float</li>
			    <li><span class="return">i</span> Integer</li>
			    <li><span class="return">a</span> Array</li>
			    <li><span class="return">m</span> Mixed</li>
			    <li><span class="return">o</span> Object</li>
			    <li><span class="return">r</span> Ressource</li>
			    <li><span class="return">c</span> Closure</li>
			    <li><span class="return">oc</span> Octal</li>
			    <li><span class="return">-</span> Void</li>
			    <li><span class="return">*</span> Other(s) type(s)</li>
		    </ul>
	    </section>
<?
	    }
	    $i++;
?>
<article>
	<h2><a href="<?= $classe['href'] ?>"><?= $classe['name'] ?></a></h2>

	<summary><?= $classe['summary'] ?></summary>
    <ul>
<?
        foreach ($classe['methods'] as $method) {
?>
            <li><span class="return"><?= $method['return'] ?></span><span class="method"><a href="<?= $method['href'] ?>" target="_blank"><span class="access"><?= $method['access'] ?></span><?= $method['name'] ?></a><span class="arguments"><?= $method['args'] ?></span></span></li>
<?
        }
?>
    </ul>
</article>
<?
    }
?>
<p id="license">This cheat sheet is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</p>

<a href="http://github.com/novius-os/fuelphp-cheatsheet" id="github"><img src="https://a248.e.akamai.net/assets.github.com/img/4c7dc970b89fd04b81c8e221ba88ff99a06c6b61/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub"></a>
</body>
</html>
