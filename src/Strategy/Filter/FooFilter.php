<?php
namespace PhpDesignPatterns\Strategy\Filter;

use PhpDesignPatterns\Strategy\Filter\Filter;

class FooFilter implements Filter {

    /**
     * Runs a filter on an array and returns the filtered array
     *
     * @param array $array
     * @return array
     */
    public function run(array $array)
    {
        return array_map(function ($value) {
            if ($value == 'foo') return 'wow';
            return $value;
        }, $array);
    }
}
