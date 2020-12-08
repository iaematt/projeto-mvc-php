<?php

namespace libraries;

class System extends Router {

  private $url;
  private $exploder;
  private $area;
  private $controller;
  private $action;
  private $params;

  public function setUrl() {
    $this->url = isset($_GET['url']) ? $_GET['url'] : 'home/index';
  }

  private function setExploder() {
    $this->exploder = explode('/', $this->url);
  }

  /**
   *
   */
  private function setArea() {

    foreach($this->routers as $index => $value) {

      if ($this->onDefault && $this->exploder[0] === $index) {
        $this->area = $value;
        $this->onDefault = false;
      }

    }

    $this->area = empty($this->area) ? $this->defaultRouter : $this->area;

    if (!defined('APP_AREA')) {
      define("APP_AREA", $this->area);
    }

  }

}
