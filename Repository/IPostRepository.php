<?php

namespace Rumur\WPUtils\Contracts\Repository;

use Rumur\WPUtils\Support\Collection;

interface IPostRepository extends IQueryBuilder
{
    /**
     * Finds a specific resource.
     *
     * @param int $post_id
     *
     * @return mixed
     */
    public function find(int $post_id);

    /**
     * Runs the query.
     *
     * @param array $args
     * @return Collection
     */
    public function get(array $args = []): Collection;

    /**
     * Gets all resources.
     *
     * @return Collection
     */
    public function all(): Collection;

    /**
     * Gets a specific resources.
     *
     * @param int ...$post_ids
     * @return Collection
     */
    public function only(...$post_ids): Collection;

    /**
     * Gets all resources excepts specific ones.
     *
     * @param int ...$post_ids
     * @return Collection
     */
    public function except(...$post_ids): Collection;
}
