#!/usr/bin/env php
<?php

require_once dirname( __FILE__ ) . '/include.php';

error_reporting( -1 );
ini_set( 'display_errors', true );

$tests = new MustacheTest;
$tests->run();
