<?php  
	// Date
	// echo date("l");
	// echo date("d");
	// echo date("l, d-M-Y");

	// Time - UNIX Timestamp/EPOCH Time	
	// 60s*60m*24h(1day)*5day = 432000
	// echo time();
	// echo date("l", time()+432000);
	// echo date("l", time()+60*60*24*5);

	// 5 days ahead
	// echo date("l", time()+60*60*24*5);
	// echo date("l, d-M-Y", time()+60*60*24*5);
	
	// 5 days behind
	// echo date("l", time()-60*60*24*5);
	// echo date("l, d-M-Y", time()-60*60*24*5);

	// mktime -> Create Time
	// mktime(0,0,0,0,0,0)
	// Hour, Minute, Second, Month, Date, Year 
	// echo date("l", mktime(0,0,0,10,1,1800));
	
	// strtotime
	echo date("l", strtotime("10 jan 1800"));
?>