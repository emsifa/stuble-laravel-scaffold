<?php

$stuble->filter('nspath', function (string $val) {
    return preg_replace("/^App/", "app", str_replace('\\', '/', $val));
});
