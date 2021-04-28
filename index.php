<?php
$command="/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
$localIP = exec ($command);
echo "<p>test initial</p>";
echo "<p>version 1.1</p>";
echo "<p>Host $localIP</p>";
echo "<p><a href=./test.php>NEXT</a></p>";
?>
