<?php
namespace PhpDesignPatterns\Tests\Strategy;

use PhpDesignPatterns\Strategy\ArrayModifier;
use PhpDesignPatterns\Strategy\Filter\BarFilter;
use PhpDesignPatterns\Strategy\Filter\FooFilter;
use PhpDesignPatterns\Tests\ArrayHelperTrait;

class ArrayModifierTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_modifies_an_array_using_supplied_filters()
    {
        $array = ['foo', 'bar'];
        $arrayModifier = new ArrayModifier($array);

        $result = $arrayModifier
            ->modify(
                [
                    new BarFilter(),
                    new FooFilter(),
                ]
            )->getArray();

        $this->assertTrue(!$this->allNeedlesInArray(['foo', 'bar'], $result),
            'Array does not contain what should have been filtered out.');
        $this->assertTrue($this->allNeedlesInArray(['baz', 'wow'], $result),
            'Array contains what should have been inserted.');
    }

    /**
     * Checks to make sure all the needles are present in the haystack
     *
     * @param array $needles
     * @param array $haystack
     * @return bool
     */
    protected function allNeedlesInArray(array $needles, array $haystack)
    {
        return !!array_intersect($needles, $haystack);
    }
}
