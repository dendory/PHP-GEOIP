<html><body><p>
<?
$db = new PDO("sqlite:geoip.db");
$sql = "SELECT * FROM geoip WHERE startipn <= " . ip2long($_SERVER['REMOTE_ADDR']) . " AND endipn >= " . ip2long($_SERVER['REMOTE_ADDR']);
foreach($db->query($sql) as $row)
{
	$country = $row['country']; 
	$countrycode = $row['countrycode']; 
}
echo "<h1>Your IP is " . $_SERVER['REMOTE_ADDR'] . " and your country is " . $country . " (" . $countrycode . ")</h1>";
?>
<hr><i>GeoLite data gathered from by <a href='http://www.maxmind.com'>MaxMind GeoLite</a>. Fork this script on <a href='https://github.com/dendory/PHP-GEOIP'>GitHub</a>.</i>
</p></body></html>
