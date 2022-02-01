<?php

$aboutRouter = new Router();

$aboutRouter->get("/about", function (Request $req, Response $res, $next) {
  $res->render("index.php");
});

$aboutRouter->get("/about/hello", function (Request $req, Response $res) {
  $res->send($req->body);
});
