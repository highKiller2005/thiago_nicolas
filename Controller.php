<?php
require_once "./config.php";

class Controller {
  static function render(string $route, string $page_title) {
    require_once VIEW_PATH . $route;
  }

  static function index() {
    $page_title = "home";
    self::render('/head.php', $page_title);
    self::render('/home.php', $page_title);
    self::render('/foot.php', $page_title);
  }

  static function visualizar() {
    $page_title = "Detales";
    self::render('/head.php', $page_title);
    self::render('/visualizar.php', $page_title);
    self::render('/foot.php', $page_title);
  }
}