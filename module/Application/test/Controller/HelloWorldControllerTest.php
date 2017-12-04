<?php

namespace ApplicationTest\Controller;

use Application\Controller\HelloWorldController;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

class HelloWorldTestController extends AbstractConsoleControllerTestCase
{
    /**
     *  Setup for HelloWorldTestController
     */
    public function setUp()
    {
        $configOverrides = [];
        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));
        parent::setUp();
    }

    /**
     *  Test for 'IndexAction' from 'HelloWorldController'
     */
    public function testIndexActionShowHelloWorld()
    {
        $this->dispatch('hello-world');

        $this->assertModuleName('application');
        $this->assertControllerName(HelloWorldController::class);
        $this->assertControllerClass('HelloWorldController');
        $this->assertMatchedRouteName('hello-world');
        $this->assertConsoleOutputContains('Hello World');
    }
}
