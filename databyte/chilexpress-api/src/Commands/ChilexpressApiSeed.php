<?php

namespace Databyte\ChilexpressApi\Console\Commands;

use Illuminate\Console\Command;

class ChilexpressApiSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chilexpress-api:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the Chilexpress Package database seeds';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Running Chilexpress Seeder...');
        $this->call('db:seed', [
            '--class' => 'Databyte\\ChilexpressApi\\Database\\Seeds\\DatabaseSeeder',
        ]);

        return 0;
    }
}
