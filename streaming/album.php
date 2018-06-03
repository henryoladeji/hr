<?php include ("includes/includedFiles.php");

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];
}
else {
	header("Location: 404");
}

$album = new Album($con, $albumId);

$artist = $album->getArtist();
?>

<script>
function playSong() {
	if(audioElement.audio.currentTime == 0) {
		$.post("includes/handlers/ajax/updatePlays", {songId: audioElement.currentlyPlaying.id });
	}


	$(".play").hide();
	$(".pause").show();
	audioElement.play();
}

function pauseSong() {
	$(".play").show();
	$(".pause").hide();
	audioElement.pause();
}
</script>
<div class="entityInfo">

	<div class="leftSection">
		<img src="<?php echo $album->getArtworkPath(); ?>">
	</div>

	<div class="rightSection">
		<h2 class="_good"><?php echo $album->getTitle(); ?></h2>
		<p class="_me">By <?php echo $artist->getName(); ?></p>
		<p class="_me"><?php echo $album->getNumberOfSongs(); ?> songs</p>
		<p class="_me"><?php echo $album->getYearOfSongs() ?></p>
	</div>
	
</div>


<div class="tracklistContainer">
	<ul class="tracklist">
		
		<?php
		$songIdArray = $album->getSongIds();

		$i = 1;
		foreach($songIdArray as $songId) {


			$albumSong = new Song($con, $songId);
			$albumArtist = $albumSong->getArtist();

			echo "<li class='tracklistRow'>	
					<div class='trackCount'>
						<img class='play' src='assets/images/icons/play-white.png' onclick='setTrack(\"" . $albumSong->getId() . "\", tempPlaylist, true, playSong()), playSong()'>
						<img class='pause' src='assets/images/icons/pause.png' style='display:none;' onclick='pauseSong()'>
						<span class='trackNumber'>$i</span>
					</div>						

					<div class='trackInfo'>
						<span role='link' class='trackName' onclick='setTrack(\"" . $albumSong->getId() . "\", tempPlaylist, true)'>" . $albumSong->getTitle() . "</span>

					</div>


					<div class='trackOptions'>
						<img class='optionsButton' src='assets/images/icons/more.png'>
					</div>

					<div class='trackDuration'>
						<span class='duration'>" . $albumSong->getDuration() . "</span>
					</div>


				</li>";


		$i = $i + 1;			






		}

		?>

		<div class="rLabel">
			&copy; <?php echo $album->getRecordLabel() ?>
		</div>

		<script>
			var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
			tempPlaylist = JSON.parse(tempSongIds);
		</script>


	</ul>
</div>
