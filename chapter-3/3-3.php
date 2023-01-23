<?php
$errorResponse = $baseResponse
    ->withStatus(404, 'Not Found')
    ->withHeader('Content-Type', 'application/json')
;
