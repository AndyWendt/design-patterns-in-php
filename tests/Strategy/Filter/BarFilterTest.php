<?php
namespace PhpDesignPatterns\Tests\Strategy\Filter;

use PhpDesignPatterns\Strategy\Filter\BarFilter;

class BarFilterTest extends \PHPUnit_Framework_TestCase {


    /**
     * @test
     */
    public function it_filters_array_by_replacing_bar_with_baz()
    {
        $array = ['foo', 'bar', 'PHP', 'code', 'can', 'be', 'written', 'awesomely'];
        $barFilter = new BarFilter();
        $result = $barFilter->run($array);

        $this->assertTrue(! in_array('bar', $result));
        $this->assertTrue(in_array('baz', $result));
    }
}
