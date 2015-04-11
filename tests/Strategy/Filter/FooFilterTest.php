<?php
namespace PhpDesignPatterns\Tests\Strategy\Filter;

use PhpDesignPatterns\Strategy\Filter\FooFilter;
use PhpDesignPatterns\Tests\ArrayHelperTrait;

class FooFilterTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function it_replaces_foo_in_array_with_wow()
    {
        $array = ['foo', 'bar', 'PHP', 'code', 'can', 'be', 'written', 'awesomely'];
        $barFilter = new FooFilter();
        $result = $barFilter->run($array);

        $this->assertTrue(! in_array('foo', $result));
        $this->assertTrue(in_array('wow', $result));
    }
}
