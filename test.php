<?php
$originalDate1=date_create_from_format("d/m/y","30/04/14");
$originalDate =strtotime(date_format($originalDate1,"Y/m/d"));
echo date("Y-m-d H:i:s",$originalDate);
