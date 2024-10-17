<?php

namespace Print\Print\Commands;

use Illuminate\Console\Command;

class PrintCommand extends Command
{
    public $signature = 'print';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
