<?php

namespace Bref\LaravelBridge\Commands;

use Bref\LaravelBridge\StorageDirectories;
use Illuminate\Foundation\Console\DownCommand;

class LambdaDownCommand extends DownCommand
{
    protected $signature =  'lambda:down {--redirect= : The path that users should be redirected to}
                                 {--render= : The view that should be prerendered for display during maintenance mode}
                                 {--retry= : The number of seconds after which the request may be retried}
                                 {--refresh= : The number of seconds after which the browser may refresh}
                                 {--secret= : The secret phrase that may be used to bypass maintenance mode}
                                 {--status=503 : The status code that should be used when returning the maintenance mode response}';

    public function handle(): int
    {
        $this->laravel->useStoragePath(StorageDirectories::Path);

        return parent::handle() ?: 0;
    }
}
