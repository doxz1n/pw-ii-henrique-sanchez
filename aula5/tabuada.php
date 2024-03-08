<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
for ($i = 1; $i <= 50; $i++) {
	echo "<h1>" . "Tabuada do " . $i . "</h1>" .
		"<table class='table'>" .
		"<th>" . "A" . "</th>" .
		"<th>" . "X" . "</th>" .
		"<th>" . "B" . "</th>" .
		"<th>" . "=" . "</th>" .
		"<th>" . "C" . "</th>";

	for ($j = 0; $j < 11; $j++) {
		echo "<tr>" .
			"<td>" . $i . "</td>" .
			"<td>" . "X" . "</td>" .
			"<td>" . $j . "</td>" .
			"<td>=</td>" .
			"<td>" . $i * $j . "</td>" .
			"</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>