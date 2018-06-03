<div id="navBarContainer">
				<nav class="navBar">

					<span role="link" onclick="openPage('./home')" class="logo">
						<img src="assets/images/icons/white-1.png">
					</span>


					<div class="group">
						<div class="navItem">
							<span role="link" onclick='openPage("./search")' class="navItemLink"> Search 
								<img src="assets/images/icons/search.png" class="icon" alt="search">
							</span>
						</div>
						
					</div>

					<div class="group">

						<div class="navItem">
							<span role="link" onclick="openPage('./browse')" class="navItemLink">Browse</span>
						</div>

						<div class="navItem">
							<span role="link" onclick="openPage('./yourmusic')" class="navItemLink">Playlist</span>
						</div>

						<div class="navItem">
							<span role="link" onclick="openPage('./profile')" class="navItemLink"><?php echo $_SESSION['userLoggedIn']; ?></span>
						</div>
						
					</div>
					
				</nav>
			</div>