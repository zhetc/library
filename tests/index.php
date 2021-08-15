<?php
include_once dirname(__DIR__) . '/vendor/autoload.php';

use library\Http;

pr(Http::getClientIp());
