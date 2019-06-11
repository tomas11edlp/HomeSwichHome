<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pg.pg' shared service.

include_once $this->targetDirs[3].'/src/PgBundle/Util/Paginator/PaginatorInterface.php';
include_once $this->targetDirs[3].'/src/PgBundle/Util/Paginator/Paginator.php';

$this->services['pg.pg'] = $instance = new \PgBundle\Util\Paginator\Paginator($this, ${($_ = isset($this->services['pg.form_remember']) ? $this->services['pg.form_remember'] : $this->load('getPg_FormRememberService.php')) && false ?: '_'}, ${($_ = isset($this->services['pg.dql_query_helper']) ? $this->services['pg.dql_query_helper'] : $this->load('getPg_DqlQueryHelperService.php')) && false ?: '_'}, ${($_ = isset($this->services['pg.sql_query_helper']) ? $this->services['pg.sql_query_helper'] : $this->load('getPg_SqlQueryHelperService.php')) && false ?: '_'});

$instance->setConfig('panel', 'base', 'open', false, true, false, false);

return $instance;
