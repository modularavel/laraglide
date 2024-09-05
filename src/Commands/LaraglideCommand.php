<?php

namespace Casimirorocha\Laraglide\Commands;

use Illuminate\Console\Command;

class LaraglideCommand extends Command
{
    public $signature = 'laraglide';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
