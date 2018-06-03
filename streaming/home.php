<?php 
include ("includes/includedFiles.php");
?>


<h1 class="pageHeadingBig">Music for you</h1>

<div class="pageTitle">
<h1>New Albums</h1>
<span role="link" onclick="openPage('./browse')" class="navItemBrowse">Browse</span>
</div>
<div class="gridViewContainer">

	<?php

	$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY id DESC LIMIT 10 ");

	while ($row = mysqli_fetch_array($albumQuery)) {



		echo "<div class='gridViewItem'>
				<span role='link' onclick='openPage(\"album?id=" . $row['id'] . "\")'>
					<img src='" . $row['artworkPath'] . "'>

					<div class='gridViewInfo'>"
					. $row['title'] .
					"</div>
				</span>

			</div>";
	}


	?>
	

</div>

<!-- <div class="nowAds"> -->
	<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<! 728 404 -->
<!-- <ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9785584549637749"
     data-ad-slot="1273453800"></ins>
<script> -->
<!-- (adsbygoogle = window.adsbygoogle || []).push({});
</script> -->
<!-- </div> --> 

<div class="meTitle">
<h1>Popular Songs</h1>
<span role="link" onclick="openPage('./browse')" class="navItemBrowse">Browse</span>
</div>
<div class="gridViewContainer">

	<?php

	$albumQuery = mysqli_query($con, "SELECT * FROM songs ORDER BY plays DESC LIMIT 10");


	while ($row = mysqli_fetch_array($albumQuery)) {



		echo "<div class='gridViewItem'>
				<span role='link' onclick='openPage(\"album?id=" . $row['album'] . "\")'>
					<img src='" . $row['artworkPath'] . "'>

					<div class='gridViewInfo'>"
					. $row['title'] .
					"</div>
				</span>

			</div>";
	}


	?>
	

</div>
