<?php
/**
 * Multi Processing Manager (PHP package)
 *
 * @author Franco Ghazaleh <franco.ghazaleh@gmail.com>
 */

declare(strict_types=1);

namespace FGhazaleh\MultiProcessManager\Contracts;

interface ProcessManagerEventInterface
{
    /**
     * @param string $event
     * @param callable|ListenerInterface $listener
     * @throws \InvalidArgumentException
     * @return void
     */
    public function listenOn(string $event, $listener):void ;
}
