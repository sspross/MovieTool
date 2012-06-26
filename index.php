<?php

$platten[] = "SMOVIES01";
$platten[] = "SMOVIES02";
$platten[] = "SMOVIES03";
$platten[] = "SMOVIES04";
$platten[] = "SMOVIES05";
$platten[] = "SMOVIES06";
$platten[] = "SMOVIES07";
$platten[] = "SMOVIES08";
$platten[] = "SMOVIES09";

$settings = array(
	'db_host'		=> '127.0.0.1',
	'db_user'		=> 'root',
	'db_password'	=> '',
	'db_database'	=> 'db01',
	'tbl_name'		=> 'movies',
);

$conn = mysql_connect($settings["db_host"],$settings["db_user"],$settings["db_password"]) OR DIE ("DB Verbindung fehlgeschlagen");
mysql_select_db($settings["db_database"],$conn) OR DIE ("Konnte DB nicht waehlen");
echo mysql_error();

function list_directory($dir) {
	$file_list = '';
	$stack[] = $dir;
	while ($stack) {
		$current_dir = array_pop($stack);
		if ($dh = @opendir($current_dir)) {
			while (($file = readdir($dh)) !== false) {
				if ($file !== '.' AND $file !== '..') {
					$current_file = "{$current_dir}/{$file}";
					if (is_file($current_file)) {
						$file_list[] = "{$current_dir}/{$file}";
					} elseif (is_dir($current_file)) {
						$stack[] = $current_file;
					}
				}
			}
		}
	}
	return $file_list;
}

function dump($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
	return true;
}

if ($_GET["wertung"]) {
	$res = mysql_query("UPDATE ".$settings["tbl_name"]." SET wertung = ".$_GET["wertung"]." WHERE id_file = '".$_GET["id"]."'",$conn);
	echo mysql_error();
}

for ($i=0;$i<count($platten);$i++) {
	$file_list = list_directory("/Volumes/".$platten[$i]);
	for ($z=0;$z<count($file_list);$z++) {
		$file_arr = explode("/",$file_list[$z]);
		for ($x=3;$x<count($file_arr);$x++) {
			$sortpfad .= $file_arr[$x];
		}
		$last_arr = count($file_arr) - 1;
		$stat = stat($file_list[$z]);
		$res = mysql_num_rows(mysql_query("SELECT * FROM ".$settings["tbl_name"]." WHERE id_file = '".$stat["ino"]."'",$conn));
		if ($res < 1) { mysql_query("INSERT INTO ".$settings["tbl_name"]." (id_file,wertung) VALUES ('".$stat["ino"]."','0')",$conn); };
		$res = mysql_query("SELECT * FROM ".$settings["tbl_name"]." WHERE id_file = '".$stat["ino"]."'",$conn);
  		$row = mysql_fetch_array($res,MYSQL_ASSOC);
		echo mysql_error();
		$files[] = array ("id" => $stat["ino"], "sortpfad" => $sortpfad, "file" => $file_arr[$last_arr], "folder" => $file_arr[3], "volume" => $file_arr[2], "original" => $file_list[$z], "wertung" => $row["wertung"]);
		$sortpfad = "";
	}
}

function mycmp(&$a, &$b) {
   return strcmp($a['sortpfad'], $b['sortpfad']);
}

usort($files,"mycmp");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

	<head>
		<title>Movies</title>
		<link href="default.css" type="text/css" rel="stylesheet" media="all">		
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
	</head>

	<body bgcolor="#ffffff" leftmargin="0" marginheight="0" marginwidth="0" topmargin="0">
		<table width="100%" border="0" cellspacing="1" cellpadding="2">	
			<tr height="20">
				<td height="20" width="30" align="right"></td>
				<td height="20" width="30" align="center"></td>
				<td height="20" width="70" align="center"></td>
				<td height="20"><b>Movies</b></td>
				<td height="20" width="50">IMDB</td>
			</tr>
		<?php
		$zaehler = 1;
		for($i=0;$i<count($files);$i++) {
			if ($files[$i]["file"] != $files[$i]["folder"]) {
				$file = $files[$i]["folder"]."/".$files[$i]["file"];
			} else { 
				$file = $files[$i]["file"];
			}
			if ($file) {
				if (substr($file,0,1) != ".") {
		?>
			<tr height="20">
				<td height="20" width="30" align="right"><a id="<?php echo $files[$i]["id"]; ?>" name="<?php echo $files[$i]["id"]; ?>"></a><?php echo $zaehler++; ?></td>
				<td height="20" width="30" align="center"><img src="file.jpg" alt="" width="16" height="16" border="0"></td>
				<td height="20" width="70" align="center">
					<img src="sterne/<?php echo $files[$i]["wertung"]; ?>.gif" alt="" border="0" usemap="#map<?php echo $files[$i]["id"]; ?>">
					<map name="map<?php echo $files[$i]["id"]; ?>">
						<area shape="rect" coords="44,0,54,11" href="index.php?id=<?php echo $files[$i]["id"]; ?>&wertung=5#<?php echo $files[$i]["id"]; ?>" alt="">
						<area shape="rect" coords="33,0,43,11" href="index.php?id=<?php echo $files[$i]["id"]; ?>&wertung=4#<?php echo $files[$i]["id"]; ?>" alt="">
						<area shape="rect" coords="22,0,32,11" href="index.php?id=<?php echo $files[$i]["id"]; ?>&wertung=3#<?php echo $files[$i]["id"]; ?>" alt="">
						<area shape="rect" coords="11,0,21,11" href="index.php?id=<?php echo $files[$i]["id"]; ?>&wertung=2#<?php echo $files[$i]["id"]; ?>" alt="">
						<area shape="rect" coords="0,0,10,11" href="index.php?id=<?php echo $files[$i]["id"]; ?>&wertung=1#<?php echo $files[$i]["id"]; ?>" alt="">
					</map>
				</td>
				<td height="20" class="bg"><a href="<?php echo $files[$i]["volume"]."/".$file; ?>"><?php echo $file; ?></a></td>
				<td height="20" width="150" class="bg"><a href="http://www.imdb.com/find?q=<?php $file = explode(".",$file); echo $file[0]; ?>;tt=on;nm=on;mx=20">Infos</a></td>
			</tr>
		<?php
				}
			}
		}
		?>
		</table>
	</body>

</html>