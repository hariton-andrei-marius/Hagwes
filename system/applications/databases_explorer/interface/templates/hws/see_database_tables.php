<?php

/**
 * Template for the index page.
 *
 * @author     Hariton Andrei Marius <andreimariushariton@gmail.com>
 * @copyright  2016-2017 Hariton Andrei Marius
 * @license    http://opensource.org/licenses/mit-license.php  MIT license
**/

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	
	<title>Databases Explorer | <?php echo($website_name); ?></title>

	<link href="../../../interface/themes/<?php echo($theme_applications); ?>/css/theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../../../interface/themes/<?php echo($theme_applications); ?>/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body>	
	
	<nav>
		<section>
			<a id="logo-container" href="index.php"><?php echo($website_name); ?></a>
			<ul class="nav-menu">
				<li><a href="../../../administration/panel.php">Administration</a></li>
				<li><a href="../../../web/index.php">Web</a></li>
			</ul>
		</section>
	</nav>

	<section>
		<article>

			<aside>
				<h5>Tables in "<?php echo($_GET['database']); ?>"</h5>
				<p class="chip"><a href="index.php">Return to databases</a></p>
			</aside>
		
			<table>
			
				<tr>
					<th>Name</th>
					<th>-</th>
					<th>-</th>
				</tr>
				
				<?php
				
				foreach($tables as $table)
				{
					echo(
						"<tr>
							<td>".$table."</td>
							<td><a href=\"see_table_records.php?database=".$_GET['database']."&&table=".$table."\">See records</a></td>
							<td><a href=\"see_table_structure.php?database=".$_GET['database']."&&table=".$table."\">See structure</a></td>
						</tr>"
					);
				}
				
				?>
				
			</table>

		</article>
	</section>

	<footer>
		<div>
			<section>
				<?php echo($copyright); ?>
			</section>
		</div>
	</footer>

	<script src="../../../interface/themes/<?php echo($theme_applications); ?>/js/theme.js"></script>
	<script src="../../../interface/themes/<?php echo($theme_applications); ?>/js/custom.js"></script>

</body>
</html>