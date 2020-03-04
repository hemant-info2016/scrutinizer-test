<?php

include_once("testClass.php");

$objTestClass = new testClass();

$objTestClass->test1 = 'tet1';

/**
 * show off @property, @property-read, @property-write
 *
 * @property mixed $regular regular read/write property
 * @property-read int $foo the foo prop
 * @property-write string $bar the bar prop
 */
$objTestClass->test2 = 'tet2';
