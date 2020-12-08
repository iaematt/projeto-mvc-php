<?php

namespace libraries;

class Router {

  protected $routers = array(
    'site' => 'site',
    'admin' => 'admin'
  );

  protected $defaultRouter = 'site';

  protected $onDefault = true;

}
