<?php
namespace PhpDesignPatterns\Strategy;

use PhpDesignPatterns\Strategy\Filter;

class ArrayModifier
{
    /**
     * @param array $array
     * @param Filter\Filter[] $filters
     * @return $this
     */
    public function filter(array $array, array $filters)
    {
        $this->arrayContainsOnlyInstancesOf(Filter\Filter::class, $filters);

        foreach ($filters as $filter) {
            $array = $filter->run($array);
        }

        return $array;
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
