<?php
	$con = pg_connect("host=lallah.db.elephantsql.com port=5432 dbname=hgnnytxy user=hgnnytxy password=Qa2eG2kuHLLq5dw6lgnuWT28sWieBbai") or die ("Não foi possível se conectar!".pg_last_error());
	$query = 'select * from pessoa';
	echo $query;
?>