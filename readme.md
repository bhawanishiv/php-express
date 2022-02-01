# ExpressJS like application in PHP
This will help create APIs, web applications in ExpressJS like fashion. 

## Usage 
```php

<?php

include "configs/main.config.php";
include "modules/Router.php";
include "modules/View.php";
include "modules/Request.php";
include "modules/Response.php";
include "modules/Next.php";
include "modules/Bootstrap.php";

include "routes/about/index.php";


$homeRouter = new Router();

$homeRouter->get("/home", function (Request $req, Response $res, $next) {
  $res->render("home.php");
});

$app = new Bootstrap();

$app->use($homeRouter);

// Imported from "/router/about/index.php"
$app->use($aboutRouter);

```