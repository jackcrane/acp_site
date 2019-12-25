<h1>Product Information Sheet</h1>

<h2 onclick="document.location.href=document.referrer">Go back</h2>
<?php 

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
$url = explode("page=",$escaped_url);
$infoTarget = $url[1];

$page = "Information Sheet:". $infoTarget; include("assets/elements/head.php"); 


if(file_exists("assets/elements/pdfs/" . $infoTarget . ".pdf")) {
	echo "<iframe class='infoSheet' src='assets/elements/pdfs/" . $infoTarget . ".pdf#toolbar=0'></iframe>";
} else {
	echo "Requested page not found. Oopsie";
}
?>
<style>
	body, html {
		margin:0;padding:0;
	} iframe {
		height:65vh;
		width:78%;
		margin-left:10%;
		margin-right:10%;
		border: 6px solid #0c6eaf;
		border-radius:10px;
	}
	h1,h2 {
		padding:1%;
	}
</style>
