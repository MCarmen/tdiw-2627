<?php
function connectaBD()
{
	$servidor = "deic-docencia.uab.cat";
	$port = "5432";
	$DBnom = "tdiw-problemes";
	$usuari = "tdiw-problemes";
	$clau = "passProblemes2627";

	//TODO: Create the DB connection and return it.
	$connexio = pg_connect("host=$servidor port=$port dbname=$DBnom user=$usuari password=$clau") or
		die("Error: (pg_connect)" . pg_last_error());
	
	return $connexio;	
}
