<?php
// create the array of 100 $inspected items
$inspectedItems = range(1, 100);
// JSON return for ajax
$jsonArray = json_encode($inspectedItems);
