<?php 
require_once 'config.php';

// Library
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';

// Models
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';

// Message
require_once SOURCE_BASE . 'libs/massage.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

session_start();

require_once SOURCE_BASE . 'partials/header.php';

$rpath = str_replace(BASE_CONTEXT_PATH, '', CURRENT_URI);
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

function route($rpath, $method) {
    if($rpath === '') {
        $rpath = 'home';
    }

    $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";

    if(!file_exists($targetFile)) {
        require_once SOURCE_BASE . "views/404.php";
        return;
    }

    require_once $targetFile;

    $fn = "\\controller\\{$rpath}\\{$method}";

    $fn();
}

require_once SOURCE_BASE . 'partials/footer.php';

?>
