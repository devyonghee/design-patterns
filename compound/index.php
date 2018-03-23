<?php
require_once 'DuckSimulator.php';
require_once 'abstract-factory/CountingDuckFactory.php';

$duckFactory = new CountingDuckFactory();

(new DuckSimulator())->simulate($duckFactory);