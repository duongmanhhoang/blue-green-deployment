<?php

function getServer() {
    if ($_SERVER['SERVER_ADDR'] === '172.31.42.64') return 'This is Green server';

    return 'This is Blue server';
}

echo "SERVER_ADDR: " . getServer();
echo "\n";
echo "Delpoyed 1 time";
