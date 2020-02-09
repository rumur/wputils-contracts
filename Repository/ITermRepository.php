<?php

namespace Rumur\WPUtils\Contracts\Repository;

use Rumur\WPUtils\Support\Collection;

interface ITermRepository extends IQueryBuilder
{
    /**
     * Finds a specific resource.
     *
     * @param int $term_id
     * @param string $taxonomy
     *
     * @return mixed
     */
    public function find(int $term_id, string $taxonomy = null);

    /**
     * Runs the query.
     *
     * @param array $params
     *
     * @return Collection
     */
    public function get(array $params = []): Collection;

    /**
     * Gets all resources.
     *
     * @return Collection
     */
    public function all(): Collection;

    /**
     * Gets a specific resources.
     *
     * @param string ...$taxonomies
     * @return Collection
     */
    public function only(...$taxonomies): Collection;

    /**
     * Gets all resources excepts specific ones.
     *
     * @param string ...$taxonomies
     * @return Collection
     */
    public function except(...$taxonomies): Collection;

    /**
     * Creates a new \WP_Term.
     *
     * @param array|string $data
     * @param string|null $taxonomy
     * @return null|mixed|\WP_Term
     */
    public function create($data, string $taxonomy = null);

    /**
     * Updates a specific term.
     *
     * @param int $term_id
     * @param array $data
     * @param string|null $taxonomy
     * @return null|mixed|\WP_Term
     */
    public function update(int $term_id, array $data, string $taxonomy = null);

    /**
     * Deletes a specific term.
     *
     * @param int $term_id
     * @param string|null $taxonomy
     *
     * @return bool
     */
    public function delete(int $term_id, string $taxonomy = null): bool;
}
