<?php

include "configs/main.config.php";
include "modules/Router.php";
include "modules/View.php";
include "modules/Request.php";
include "modules/Response.php";
include "modules/Next.php";
include "modules/Bootstrap.php";

include "routes/about/index.php";

$app = new Bootstrap();

$app->use($aboutRouter);