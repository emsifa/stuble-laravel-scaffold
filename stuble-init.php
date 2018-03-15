<?php

$stuble->filter('namespaceToPath', function (string $val) {
    return preg_replace("/^App/", "app", str_replace('\\', '/', $val));
});
