<?php

namespace Laravel\Horizon\SupervisorCommands;

use Laravel\Horizon\Contracts\Pausable;

class Pause
{
    /**
     * Process the command.
     *
     * @param \Laravel\Horizon\Contracts\Pausable $pausable
     * @return void
     */
    public function process(Pausable $pausable)
    {
        $pausable->pause();
    }
}
