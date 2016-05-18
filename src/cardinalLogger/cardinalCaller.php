<?php

namespace cardinalLogger;

use Exception;

class cardinalCaller{

  private $projectId;

  public function __construct($project){
    $this->projectId=$project;
    $this->init();
  }

  private function init(){

  }

  public function call(Exception $e){
    return "Error Message: ". $e->getMessage();
  }

}
