<?php
 
use Joyabia\Jpasswdgen\Jpasswdgen;
 
class JpasswdgenTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    $Jpasswdgen = new Jpasswdgen;
    $this->assertTrue($Jpasswdgen->passwdgen());
  }
 
}