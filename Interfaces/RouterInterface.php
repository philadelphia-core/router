<?php 

	namespace PhiladelPhia\Router\Interfaces;

	use PhiladelPhia\Router\Interfaces\RequestInterface as IRequest;
	use PhiladelPhia\Router\Interfaces\ResponseInterface as IResponse;

	interface RouterInterface 
	{
		/**
		 * 
		 */
		public function __construct();
		
		/**
		 * 
		 */
		public function __call(string $name, $args);

	}