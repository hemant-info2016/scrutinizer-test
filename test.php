<?php

include_once("testClass.php");

/**
 * show off @property, @property-read, @property-write
 *
 * @property mixed $test2 regular read/write property
 * @property-read int $test2 the foo prop
 * @property-write string $test2 the bar prop
 */
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
