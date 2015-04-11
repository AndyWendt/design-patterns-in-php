<?php
namespace PhpDesignPatterns\Strategy;

class BarFilter implements Filter {

    /**
     * Runs a filter on an array and returns the filtered array
     *
     * @param array $array
     * @return array
     */
    public function run(array $array)
    {

        return $array;
    }
}
