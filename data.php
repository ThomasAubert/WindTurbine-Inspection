<?php


// create the array of 100 $inspected items

$inspectedItems = range(1, 100);

// return for ajax
echo json_encode($inspectedItems);
