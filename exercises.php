<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercises</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="style.css" media="screen" rel="stylesheet" type="text/css">
	<meta content="Programmieraufgaben" name="title">
	<meta lang="de">
	<meta content="Dominik G." name="author"><!--<script rel="text/javascript" src="main.js"></script>-->
</head>
<body>
	<div class="bg-blur"></div>

	<div id="side_bar" class="sidebar">
		<span onclick="sidenav_close();" class="sidebar_but">✖</span>
		<a href="index.html">home</a>
		<a href="exercises.php">exercises</a>
		<a href="#">about</a>
	</div>

	<span onclick="sidenav_open();" class="sidebar_but">≡</span>


	
	<div id="con" class="container">
		<div class="header">
			<div id="nav">
				<nav>
					<a href="index.html">home</a> <a href="exercises.php">exercises</a> <a href="#">about</a>
				</nav>
			</div><a data-active="active" id="icon-link" onclick="check_night_mode();"><span class="icon" id="m-icon"></span></a>
			<div class="site-title-nav" id="eksde2">
				<nav>
					<a href="#dezember 2019">Dezember-19</a> <span>|</span> <a href="#februar 2020">Februar-20</a> <span>|</span> <a href="#mai 2020">Mai-20</a> <span>|</span>  <a href="#dezember 2020">Dezember-20</a>
				</nav>
			</div>
			<div class="site-title pro" id="ily">
				<h1>Progammieraufgaben</h1>
			</div>
		</div>
		<div class="content">

        <?php
        $data = json_decode(file_get_contents('data.json'));
        $c = count($data->entry) - 1;

        for($i = 0; $i <= $c; $i++)
        {
            echo '<div class="eksde3"> 
                <div class="entry title" id="'. strtolower($data->entry[$i]->title).'">';
            echo "<h2>". $data->entry[$i]->title . "</h2>
                </div>";
            
            echo '<div class="entry">';
            echo '<div class="auf-box">';
          

            for($j = 0; $j < count($data->entry[$i]->aufgaben); $j++)
            {
                echo'
                <div class="auf-item">
                    <div class="auf-item title">
                        Aufgabe '. ($data->entry[$i]->aufgaben[$j]->id). '
                    </div>
                    <div class="auf-item con">'. $data->entry[$i]->aufgaben[$j]->text. '
                            
                    </div><a href="'. $data->entry[$i]->aufgaben[$j]->href . '">
                    <div class="auf-item button">
                        Lösung
                    </div></a>
                </div>';
            }
            echo "</div></div></div>";
        }
        ?>
			
		</div><a class="top-but" id="eksde">
		<div>
			^
		</div></a>
		<div class="footer">
			<a href="impressum.html">Impressum</a>
            <a href="datenschutz.html">Datenschutz</a>
		</div>
	</div>
	<script src="main.js"></script>
	
	<script>
		var side_nav = document.getElementById("side_bar");
		var content = document.getElementById("con");

		function sidenav_open()
		{
			content.style.opacity = "0.1";
			side_nav.style.width = "250px";
		}

		function sidenav_close()
		{
			content.style.opacity = "1";
			side_nav.style.width = "0";
		}
	</script>
</body>
</html>
