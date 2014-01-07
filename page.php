<?php	//HEADER
require( 'header.htm' );?>

<?php
	$page = $_GET["page"];	//get what page we want to load
?>

<div id="content" style="clear: both;">
	<div id="container">
		<?php include( 'pages/' . $page ); ?>
	</div>
</div>

<?php	//FOOTER
require( 'footer.htm' );?>
