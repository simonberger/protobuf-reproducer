<?php

use Google\Protobuf\Api;

$message = new Api();
// Not necessary for the zend_mm_heap corrupted error to appear.
$message->setName('TestApi');
