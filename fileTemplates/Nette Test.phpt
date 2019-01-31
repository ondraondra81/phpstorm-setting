<?php
/**
 * Test: CdesignTests\\${PACKAGE}\\${NAME}${DESCRIPTION}.
 *
 * @testCase CdesignTests\\${PACKAGE}\\${NAME}Test
 * @author Ondra Votava <ja@ondravotava.cz>
 * @package CdesignTests\\${PACKAGE}
 */
namespace CdesignTests\\${PACKAGE};
use Cdesign;
use Kdyby;
use Nette;
use Tester;
use Tester\Assert;
require_once __DIR__ . '/../bootstrap.php';
/**
 * @author Ondra Votava <ja@ondravotava.cz>
 */
class ${NAME}Test extends Tester\TestCase
{
    public function setUp()
    {
    }
    public function test()
    {
    }
}
$test = new ${NAME}Test();
$test->run();