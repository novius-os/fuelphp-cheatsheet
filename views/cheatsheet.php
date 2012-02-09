<!doctype html>
<!--[if lt IE 7 ]><html class="ie6 ie67 ie no-js" lang="en"><![endif]-->
<!--[if IE 7 ]>   <html class="ie7 ie67 ie no-js" lang="en"><![endif]-->
<!--[if IE 8 ]>   <html class="ie8 ie no-js" lang="en"><![endif]-->
<!--[if IE 9 ]>   <html class="ie9 ie no-js" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Fuel PHP 1.2 Cheat Sheet by Novius Labs</title>
    <link rel="shortcut icon" href="http://fuelphp.com/addons/themes/fuel/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/static/modules/labs_cheatsheet/css/cheatsheet.css" type="text/css" media="all" />
</head>
<body>
<?
	$i = 0;
    foreach ($classes as $classe) {
	    if ($i === 0 || isset($classe['pagebreak'])) {
?>
	    <header class="<?= $i != 0 ? 'print' : '' ?>">
		    <div class="logo">
			    <a href="http://www.novius-labs.com" title="Novius Labs">
				    <img src="/static/modules/labs_cheatsheet/img/noviuslabs.jpg" />
				    <span>http://www.novius-labs.com</span>
			    </a>
		    </div>
		    <h1>
			    <a href="http://fuelphp.com/"><img src="/static/modules/labs_cheatsheet/img/fuelphp.png" /> FuelPHP</a> <span>v1.1 Cheat Sheet</span>
		    </h1>
		    <div class="pdf"><a href="/static/modules/labs_cheatsheet/fuelphp-cheatsheet.pdf" target="_blank">PDF</a></div>
	    </header>
	    <section class="<?= $i != 0 ? 'print' : '' ?>">
		    <ul>
			    <li><span class="return">b</span>: Boolean,</li>
			    <li><span class="return">s</span>: String,</li>
			    <li><span class="return">f</span>: Float,</li>
			    <li><span class="return">i</span>: Integer,</li>
			    <li><span class="return">a</span>: Array,</li>
			    <li><span class="return">m</span>: Mixed,</li>
			    <li><span class="return">o</span>: Object,</li>
			    <li><span class="return">r</span>: Ressource,</li>
			    <li><span class="return">c</span>: Closure,</li>
			    <li><span class="return">oc</span>: Octal,</li>
			    <li><span class="return">-</span>: Void,</li>
			    <li><span class="return">*</span>: Other(s) type(s)</li>
		    </ul>
	    </section>
<?
	    }
	    $i++;
?>
<article>
	<h2><a href="<?= $classe['href'] ?>"><?= $classe['name'] ?></a></h2>
	<div>&nbsp;</div>
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
</body>
</html>
