<?php

namespace Pratiksoni\Einvoice\Commands;

use Illuminate\Console\Command;

class EinvoiceCommand extends Command
{
    public $signature = 'einvoice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
