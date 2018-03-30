<?php 
	define("TEST_LENGTH_NAMES", 5);
	include "names-of-odin.php";
	$selektory=new namesGenotype(TEST_LENGTH_NAMES);
?>
<style>
	.<?php echo $selektory->get_name(0); ?>{
		color:#f0f;
	}
	.<?php echo $selektory->get_name(1); ?>{
		color:#00f;
	}
	.<?php echo $selektory->get_name(2); ?>{
		background:#faa;
	}
	.<?php echo $selektory->get_name(999999); ?>{
		text-decoration:underline overline;
		font-size:23px;
	}
	#<?php echo $selektory->get_name(880); ?>{
		font-family:arial;
	}
	.<?php echo $selektory->get_name(696969); ?>{
		clear:both;
	}
	#<?php echo $selektory->get_name(1234567); ?>, #<?php echo $selektory->get_name(7654321); ?>{
		float:left;
	}
	#<?php echo $selektory->get_name(7654321); ?>{
		width: 59%;
	}
	#<?php echo $selektory->get_name(1234567); ?>{
		width: 40%;
	}
</style>
<script>
	var i=0;
	var a=['#f00','#0f0','#00f'];
	setInterval(function(){
		i++;
		console.log(":::START::: color changing for class: '<?php echo $selektory->get_name(999999); ?>' at "+(i*0.5)+((i%2==0)?".0":"")+"s - changing color into: "+a[i%3]);
		for(var j=0;j<document.getElementsByClassName('<?php echo $selektory->get_name(999999); ?>').length;j++){
			document.getElementsByClassName('<?php echo $selektory->get_name(999999); ?>')[j].style.color=a[i%3];
			console.log("element with class nr."+(1+j));
		}
		console.log(":::END:::");
		console.log("- - - - -");
	}, 500);
</script>
<h1 class="<?php echo $selektory->get_name(0); ?>">
	Title with class named "<mark><?php echo $selektory->get_name(0); ?></mark>"
</h1>
<p class="<?php echo $selektory->get_name(1)." ".$selektory->get_name(2); ?>" id="<?php echo $selektory->get_name(880); ?>">
	paragrah with classes named "
	<mark>
		<?php echo $selektory->get_name(1); ?>
	</mark>
	" and "
	<mark>
		<?php echo $selektory->get_name(2); ?>
	</mark>
	" and with id "
	<mark>
		<?php echo $selektory->get_name(880); ?>
	</mark>"
</p>
<br>
<br>
<div>
	current names length: 
	<span class="<?php echo $selektory->get_name(999999); ?>">
		<?php echo TEST_LENGTH_NAMES; ?>
	</span>
	<br>
	<br>
	maximum number of names for 
	<?php echo TEST_LENGTH_NAMES; ?>
	char length: 
	<span class="<?php echo $selektory->get_name(999999); ?>">
		<?php echo pow(26, TEST_LENGTH_NAMES); ?>
	</span>
</div>
<br>
<br>
<div>
	<div id="<?php echo $selektory->get_name(7654321); ?>">
		<h1>List of existing in memory randomised names</h1>
		<pre><?php 
			//for($i=0;$i<100;$i++) $selektory->get_name($i);
			var_dump($selektory->namesspace); 
		?></pre>
	</div>
	<div id="<?php echo $selektory->get_name(1234567); ?>">
		<h3>List after using 10 random names</h3>
		<pre><?php 
			for($i=0;$i<10;$i++) $selektory->get_name(round(rand()^2/32768));
			var_dump($selektory->namesspace); 
		?></pre>
	</div>
	<div class="<?php echo $selektory->get_name(696969); ?>"></div>
</div>
