<?php
header("Access-Control-Allow-Origin: *"); // Allow all origins
header("Content-Type: application/vnd.apple.mpegurl"); // Set content type for HLS

// Fetch the .m3u8 file URL
$url = 'https://sportcast.me/sony.php/hls/live/2020593/SONYSIXHD/hdntl=exp=1726329107~acl=%2f*~id=1556784483112233~data=hdntl~hmac=2285fa0de5de575af2b7a8fabfd3585abf71c3d3d53c22871fa209d295cbe91a/master_2000.m3u8?aka_me_session_id=AAAAAAAAAAATseVmAAAAAPnRf1oXpp9Zwm528SJ9B1ZrUM4ouoUY010HYgu3ZK0ySn92mntwT1CWBuxbsoSS++m+Z3YKBYw5&aka_media_format_type=hls';

// Get the content of the .m3u8 file
echo file_get_contents($url);
?>