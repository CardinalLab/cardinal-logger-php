<?php

namespace cardinalLogger;

use cardinalCaller;

class cardinalLogger{

  private $apiKey;
  private $userId;

  public function __construct($key,$id){
    $this->apiKey=$key;
    $this->userId=$id;
    $this->init();
  }

  private function init(){

  }

}
