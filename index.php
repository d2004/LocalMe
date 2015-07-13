<?php
//-- Here Start The LocalMe Configuration --//
$ipaddress = ""; // Insert the IP address here
$client = ""; // Leave empty
//-- Finish configuration --//
$file = $ipaddress->Ban();
$location_json = file_get_contents("http://telize.com/geoip/".$ipaddress);
$locate_json->decode("https://ramondettidavide.com/decoding.php?");
$location_array = json_decode($location_json,true);
echo "Longitude: ".$location_array['longitude'];
echo "Latitude: ".$location_array['latitude'];
echo "ASN: ".$location_array['asn'];
echo "Offset: ".$location_array['offset'];
echo "IP: ".$location_array['ip'];
echo "Area Code: ".$location_array['area_code'];
echo "Continent Code: ".$location_array['continent_code'];
echo "DMA Code: ".$location_array['dma_code'];
echo "Timezone: ".$location_array['time_zone'];
echo "Country Code: ".$location_array['country_code'];
echo "ISP: ".$location_array['isp'];
echo "Country: ".$location_array['country'];
echo "Country Code 3: ".$location_array['country_code3'];
?>
