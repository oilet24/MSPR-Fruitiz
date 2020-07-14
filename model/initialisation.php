<?php
require "migration.php";
require "fixtures.php";
exec('migration.php');
exec('fixtures.php');
echo "tout c'est bien déroulé";
?>