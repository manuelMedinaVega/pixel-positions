<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class DispatchTestJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch a test job to be processed by the server workers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        TestJob::dispatch();

        $this->info('Test job dispatched successfully');
    }
}
