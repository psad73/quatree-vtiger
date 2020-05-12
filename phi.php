<?php
//phpinfo();
$dir = "logs/";

$myFiles = scandir($dir);
foreach ($myFiles as $stampFile) {
    if (preg_match('/cron-lastrun-([0-9\-]+).stamp/', $stampFile)) {
        unlink("logs/" . $stampFile);
    }
}
$runDate = date("Ymd-His");
touch("logs/cron-lastrun-" . $runDate . ".stamp");
