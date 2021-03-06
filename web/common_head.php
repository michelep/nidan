<?php

include_once "common.inc.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nidan">
    <meta name="author" content="Michele 'O-Zone' Pinassi">
    <link rel="icon" href="/favicon.ico">

<?php
if(isset($pageTitle)) {
    echo "<title>Nidan -  $pageTitle</title>";
} else {
    echo "<title>Nidan</title>";
}
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#333333"/>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/tether.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="/css/validationEngine.jquery.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/noty.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">

<?php
$local_css = basename($_SERVER['SCRIPT_FILENAME'],".php").".css";

if(file_exists("./css/".$local_css)) {
    echo "\t<!-- local CSS -->\n\t<link href=\"/css/".$local_css."\" rel=\"stylesheet\" />\n";
}
?>
</head><body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="/"><img src="/img/header_logo.png" class="img-responsive header-logo" alt="Nidan logo"/> Nidan <small class="header">v.<?php echo VERSION; ?></small></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    	    <span class="navbar-toggler-icon"></span>
	</button>
<?php
if($mySession->isLogged()) {
?>
	<div class="collapse navbar-collapse" id="navbarCollapse">
	    <ul class="navbar-nav mr-auto">
	    </ul>
	    <form class="form-inline mt-2 mt-md-0" action="/search" method="GET">
		<input class="form-control mr-sm-2 validate[required]" type="search" name="q" label="search" placeholder="Search host/service" value="<?php if(isset($_GET["q"])) { echo $_GET["q"]; }?>">
		<select class="form-control mr-sm-2" name="t">
		    <option value="all">All</option>
		    <option value="IP">IP</option>
		    <option value="MAC">MAC</option>
		</select>
		<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
	    </form>
	</div>
<?php
}
echo "<!-- SID: $mySession->id -->\n";
?>
    </nav>

    <div class="container-fluid"><!-- CONTAINER -->
	<div class="row"><!-- ROW -->
