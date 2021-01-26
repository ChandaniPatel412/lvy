<?php
// ======= HIT COUNTER ========
	require("configuration.inc.php");
	mysql_connect("$db_host","$db_usr","$db_pwd");
	mysql_select_db("$db_name");
	$date = date("Y-m-d");
	$ip = getenv(REMOTE_ADDR);
	$matchingips = mysql_query("SELECT * FROM ips WHERE ip = '$ip' AND projectid = $projectid AND date = '$date'");
	if (mysql_num_rows($matchingips) == 0)
	{
		mysql_query("INSERT INTO ips (projectid, ip, date) VALUES ($projectid, '$ip', '$date')");
		$visitsToday = mysql_query("SELECT * FROM visitors WHERE date = '$date' AND projectid = $projectid");
		if (mysql_num_rows($visitsToday) == 0)
		{
		mysql_query("INSERT INTO visitors (projectid, hits, nuhits, date) VALUES ($projectid, 1, 0, '$date')");
		}
		else
		{
		mysql_query("UPDATE visitors SET hits = hits + 1 WHERE date = '$date' AND projectid = $projectid");
		}
		// deleting older date:
		mysql_query("DELETE FROM ips WHERE date != '$date' AND projectid = $projectid") or die(mysql_error());
	}
	mysql_query("UPDATE visitors SET nuhits = nuhits + 1 WHERE date = '$date' AND projectid = $projectid");
	// ========================
	?>