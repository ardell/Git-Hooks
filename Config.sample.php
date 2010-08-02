#!/usr/bin/env php
<?php

$CONFIG['preCommit'] = array(
    'run-php-lint',
    'check-for-dos-endings',
    'check-whitespace',
    'enforce-coding-standards',
    'run-phpunit',
);

// Currently uses PHP CodeSniffer
$CONFIG['codingStandard'] = 'Yourcodingstandard';
