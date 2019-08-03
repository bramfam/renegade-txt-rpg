<header class="flex ml-10 mt-8 justify-between">
	<div id="logo p-6 mt-4">
		<div class="bg-white h-1"></div>
		<a href="./">
			<h3 class="text-5xl text-red-600 font-display uppercase">Renegades
			</h3>
		</a>
		<div class="bg-white h-1"></div>
	</div>

	<nav class="mr-24 -mt-1 font-sans">
		<ul class="flex mt-6 text-2xl font-display">
			<?php
			// if there's a logged on user
				if(isset($_SESSION["login"])) { 
			?>

		<!-- <ul class="flex text-2xl">
			<a href="./register-account.php" class="bg-black pt-4 px-6 py-6 border-switchcolor border-2 hover:bg-switchcolor hover:text-white">
				<li class="items-center text-center">Create a Free Account
				</li>
			</a >
		</ul> -->
		<li class="mr-6"><a href="/purchases">Purchases</a></li>
		<li class="mr-6"><a href="/missions">Browse Missions</a></li>
		<li class="mr-6"><a href="/factions">Factions</a></li>
		<li class="mr-6"><a href="/account">Account</a></li>
	</ul>
</nav>

<? 
}
else {

} 
?>
<ul></ul>
</header>
