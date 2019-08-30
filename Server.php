<?php
/** Red Framework
 * Server Module for PHP Built-in Development Server
 * @author RedCoder
 * http://redframework.ir
 */

define('php_development_server', TRUE);

$_SERVER['SERVER_ADDR'] = "127.0.0.1";

if (strpos($_SERVER['REQUEST_URI'], '.') == TRUE) {
    require_once urldecode(trim($_SERVER['REQUEST_URI'], "\/"));
} else if (!isset($_GET['url'])) {
    if (trim($_SERVER['REQUEST_URI'], "\/")){
        header("Location: /?url=" . trim($_SERVER['REQUEST_URI'], "\/"));
    } else {
        require_once 'public/index.php';
    }
} else {
    require_once 'public/index.php';
}