<?php include("header.php"); ?>

		<h2>Senat</h2>

		<div class="full_box">
			Der Senat ist für alle Angelegenheiten in Forschung und Lehre zuständig, die die Universität in ihrer Gesamtheit betreffen. Der Rektor vertritt die Universität nach außen. Er ist Vorsitzender des Rektorats und wird vom Senat gewählt. Das Rektorat setzt sich aus dem Rektor, den drei Prorektoren und dem Kanzler zusammen und leitet die Universität.
			<br><br>
			Der Senat besteht aus Professoren und Professorinnen, wissentschaftliche und künstlerische Mitarbeiter*innen und aus vier studentischen Vertretern.
		</div>

		<h3>Kandidaten</h3>
		<div></div>

		<div class="canidates">

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Johannes Filter</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Johannes Filter</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Johannes Filter</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Johannes Filter</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Johannes Filter</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Johannes Filter</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<div class="half_box randomize">
				<img src="potrait/filter.jpg">
				<div class="name">Peter Lustig</div>
				<div class="hsg">geile Hochschulgruppe</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>



		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
		jQuery(function(){
			$('.canidates').html(
				$('.randomize').sort( function(){ return ( Math.round( Math.random() ) - 0.5 ) } )
				);
		});
		</script>

<?php include("footer.php"); ?>
