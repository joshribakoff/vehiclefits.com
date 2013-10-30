<?php
if(!isset($argv[1])) {
 die('try passing in version date');
}

$date = $argv[1];
passthru("rsync -e ssh -vrl --exclude='.git' --exclude '*.log' --checksum --numeric-ids --delay-updates . root@vehiclefits.com:/var/www/vehiclefits.com/$date");
