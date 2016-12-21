<?php

namespace Hyn\Tenancy\Commands;

use Hyn\Tenancy\Database\Connection;
use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'tenancy:install';
    protected $description = 'Installs tenancy package.';

    public function handle()
    {
        $this->call('migrate', [
            '--database' => app(Connection::class)->systemName(),
            '--path' => __DIR__ . '/../../assets/migrations',
            '-n' => 1
        ]);
    }
}
