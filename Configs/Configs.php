<?php

include __DIR__.'/env.php';

include __DIR__.'/functions/functions.php';

include_once __DIR__.'/classes/Route.php';

include_once __DIR__.'/../Routes/web.php';

Route::run();