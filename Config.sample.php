#!/usr/bin/env php
<?php

$CONFIG = array(
    'preCommit' => array(
        'run-php-lint',
        'check-for-dos-endings',
        'check-whitespace',
        'enforce-coding-standards',
        'run-phpunit',
    ),
    'postCommit' => array(
        'happy-commits',
    ),
);

// Currently uses PHP CodeSniffer
$CONFIG['codingStandard'] = 'Yourcodingstandard';
