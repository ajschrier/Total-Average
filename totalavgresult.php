<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html>
<head>
<title>Total Average Result</title>
</head>
<body>
<table summary="total average">
<?php
	print "<tr align=\"center\">";
		print "<td>";
			print "At Bats";
		print "</td>";
		print "<td>";
			print $_GET['atbat'];

		print "</td>";
	print "</tr>";
	
	print "<tr align=\"center\">";
		print "<td>";
			print "Hits";
		print "</td>";
		print "<td>";
			print $_GET['hits'];
		print "</td>";
	print "</tr>";

	print "<tr align=\"center\">";
		print "<td>";
			print "Doubles";
		print "</td>";
		print "<td>";
			print $_GET['doubles'];
		print "</td>";
	print "</tr>";

	print "<tr align=\"center\">";
		print "<td>";
			print "Triples";
		print "</td>";
		print "<td>";
			print $_GET['triples'];
		print "</td>";
	print "</tr>";
	
	print "<tr align=\"center\">";
		print "<td>";
			print "Home Runs";
		print "</td>";
		print "<td>";
			print $_GET['hr'];
		print "</td>";
	print "</tr>";

	print "<tr align=\"center\">";
		print "<td>";
			print "BB";
		print "</td>";
		print "<td>";
			print $_GET['bb'];
		print "</td>";
	print "</tr>";
	
	print "<tr align=\"center\">";
		print "<td>";
			print "HBP";
		print "</td>";
		print "<td>";
			print $_GET['hbp'];
		print "</td>";
	print "</tr>";

	print "<tr align=\"center\">";
		print "<td>";
			print "SB";
		print "</td>";
		print "<td>";
			print $_GET['sb'];
		print "</td>";
	print "</tr>";
	
	print "<tr align=\"center\">";
		print "<td>";
			print "SH";
		print "</td>";
		print "<td>";
			print $_GET['sh'];
		print "</td>";
	print "</tr>";
	
	print "<tr align=\"center\">";
		print "<td>";
			print "CS";
		print "</td>";
		print "<td>";
			print $_GET['cs'];
		print "</td>";
	print "</tr>";
	
	print "<tr align=\"center\">";
		print "<td>";
			print "GIDP";
		print "</td>";
		print "<td>";
			print $_GET['gidp'];
		print "</td>";
	//print "</tr>";
	
	$totalbases=$_GET['hits']+(2*$_GET['doubles'])+(3*$_GET['triples'])+(4*$_GET['hr']);
	
	function totalbases ($h,$dbl,$trp,$hr) {
	$a=$h-$dbl-$trp-$hr;
	return $a+(2*$dbl)+(3*$trp)+(4*$hr);
	}
	
	function totavg ($ab,$tb,$h,$bb,$hbp,$sb,$sh,$cs,$gidp) {
	$num=$tb+$bb+$hbp+$sb;
	$den=($ab-$h)+$sh+$cs+$gidp;
	return round($num/$den, 3);
	}
	
	//print "<td>";
		//	print totavg($_GET['atbat'], totalbases($_GET['hits'],$_GET['doubles'],$_GET['triples'],$_GET['hr']),
			//				$_GET['hits'], $_GET['bb'],
			//				$_GET['hbp'], $_GET['sb'], $_GET['sh'], $_GET['cs'], $_GET['gidp']);
			//print totalbases($_GET['hits'],$_GET['doubles'],$_GET['triples'],$_GET['hr']);
		print "</td>";
	print "</tr>";

	print "<tr align=\"center\" bgcolor=\"#00FF00\">";
		print "<td>";
			print "<b>Total Average</b>";
		print "</td>";
		print "<td>";
			print "<b>".totavg($_GET['atbat'], totalbases($_GET['hits'],$_GET['doubles'],$_GET['triples'],$_GET['hr']),
							$_GET['hits'], $_GET['bb'],
							$_GET['hbp'], $_GET['sb'], $_GET['sh'], $_GET['cs'], $_GET['gidp'])."</b>";
		?></td>
	</tr>

</table>


<p>
<a href="totalaverage.html" title="Back to input">Back To Input</a>
</p>

</body>
</html>
