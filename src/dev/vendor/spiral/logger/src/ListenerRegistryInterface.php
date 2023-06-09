<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Logger;

interface ListenerRegistryInterface
{
    /**
     * Add new even listener.
     */
    public function addListener(callable $listener);

    /**
     * Add LogEvent listener.
     */
    public function removeListener(callable $listener);

    /**
     * @return callable[]
     */
    public function getListeners(): array;
}
