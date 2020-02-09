<?php

namespace Rumur\WPUtils\Contracts\Repository;

use Rumur\WPUtils\Contracts\Resource\IWordPressResource;

interface ITermResourceRepository extends ITermRepository
{
    /**
     * Sets the resource to a scope of queries.
     * e.g. a \WP_Post could be as resource as well
     *
     * @param IWordPressResource|object|null $resource
     * @return static
     */
    public function useResource($resource = null);
}
