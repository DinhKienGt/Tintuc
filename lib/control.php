<?php 
require('../css/style.css');

function printTableTin($data, $columns, $cssClass = "default"){
	echo("<table class =\"data-table $cssClass\">");
	echo("<tr class=\"data-header\">");
	foreach ($columns as $column) {
		echo("<th>$column</th>");
	}
	echo("</tr>");
	echo("<tr class=\"data-row\">");
	while($row = mysqli_fetch_assoc($data)){
		echo("<tr>");
		foreach ($columns as $field => $title) {
			echo("<td>$row[$field]</td>");
		}
		echo("<td><a href='edit_Tin.php'>Edit</a></td>");
		echo("</tr>");
	}
	echo("</table>");
}

 ?>