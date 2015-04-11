<?php
namespace PhpDesignPatterns\Strategy;

use PhpDesignPatterns\Strategy\Filter;

class ArrayModifier
{
    /**
     * @var array
     */
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @param Filter\Filter[] $filters
     * @return $this
     */
    public function modify(array $filters)
    {
        $this->arrayContainsOnlyInstancesOf(Filter\Filter::class, $filters);

        foreach ($filters as $filter) {
            $this->array = $filter->run($this->array);
        }

        // returning $this allows us to chain methods.
        return $this;
    }

    public function getArray()
    {
        return $this->array;
    }

    /**
     * @param $interface
     * @param array $arrayOfImplementors
     */
    private function arrayContainsOnlyInstancesOf($interface, array $arrayOfImplementors)
    {
        foreach ($arrayOfImplementors as $object) {
            if (false === ($object instanceof $interface)) {
                throw new \InvalidArgumentException($object.' does not implement '.$interface);
            }
        }
    }
}
