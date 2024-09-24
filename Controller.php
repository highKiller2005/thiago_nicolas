<?php

class Controller {
  static function render(string $route, array $props) {
    require_once VIEW_PATH . $route;
  }

  static function professor() {
    $page_title = ["title" => "professor"];
    self::render('/head.php', $page_title);
    self::render('/professor.php', $page_title);
    self::render('/foot.php', $page_title);
  }

  static function visualizar() {
    $page_title = ["title" => "Detales"];
    self::render('/head.php', $page_title);
    self::render('/visualizar.php', $page_title);
    self::render('/foot.php', $page_title);
  }

  static function home() {
    $page_title = ["title" => "home"];
    self::render('/head.php', $page_title);
    self::render('/home.php', $page_title);
    self::render('/foot.php', $page_title);
  }
}