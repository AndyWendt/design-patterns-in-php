<?php
namespace PhpDesignPatterns\Strategy\Filter;

interface Filter
{
    /**
     * Runs a filter on an array and returns the filtered array
     *
     * @param array $array
     * @return array
     */
    public function run(array $array);
}
