<?php $page = "Home";include('assets/elements/head.php'); ?>
<div class="maincontent">
	<div class="logo">
		<img>
		<form action="search.php" method="GET">
			<input type="text" placeholder="Search..." name="query" value=<?php echo $_GET['query'] ?>><input type="submit" value="Search!">
		</form>
	</div>
</div>





<?php 

$query = $_GET['query'];

$possibleQueries = (object) [
	'propertyone' => 'propertyonesent'
];

echo $possibleQueries['propertyone'];

?>