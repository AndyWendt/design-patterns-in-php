<?php
namespace PhpDesignPatterns\Strategy\Filter;

class BarFilter implements Filter {

    /**
     * Runs a filter on an array and returns the filtered array
     *
     * @param array $array
     * @return array
     */
    public function run(array $array)
    {
        return array_map(function ($value) {
            if ($value == 'bar') return 'baz';
            return $value;
        }, $array);
    }
}
