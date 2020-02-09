<?php

namespace Rumur\WPUtils\Contracts\Repository;

interface IQueryBuilder
{
    /**
     * Adds the param into a next query.
     *
     * @param $value
     * @param $key
     *
     * @return static;
     */
    public function where($value, $key);

    /**
     * Resets the query params to its basic state.
     *
     * @return static
     */
    public function reset();
}
