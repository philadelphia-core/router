<?php

  namespace PhiladelPhia\Router\HTTP;

  use PhiladelPhia\Router\Interfaces\RequestInterface;
  
  use PhiladelPhia\Router\HTTP\Body;
  use PhiladelPhia\Router\HTTP\Params;
  use PhiladelPhia\Helpers\Path;

  /**
   * Handler http request.
   */
  class Request implements RequestInterface {
    /**
     * Walks all properties of $_SERVER and add them in this class instance.
     */
    public function __construct() 
    {
      foreach($_SERVER as $key => $value)
      {
        $this->{Path::toCamelCase($key)} = $value;
      }
      $this->body = new Body($this);
      $this->params = new Params($this);
    }
  };