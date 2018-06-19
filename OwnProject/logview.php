<?php
    include_once("functions/getTeams.php");
    $teams = getTeams(); 
?>
<html>
    <head>
        <tittle> logView </tittle>
    </head>
    <body>
	    <div class="top-nav">
		    <a href="/"><p>Thelog</p></a>
	    </div>
        <h1>  List  </h1>
        <?php
        foreach($teams as $team) {  ?>
            <li id="team" class="club"><?php echo var_dump($teams) ?></li>
        <?php } ?>
    </body>
</html>