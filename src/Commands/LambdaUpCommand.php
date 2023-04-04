<?php

namespace Bref\LaravelBridge\Commands;

use Bref\LaravelBridge\StorageDirectories;
use Illuminate\Foundation\Console\UpCommand;

class LambdaUpCommand extends UpCommand
{
    protected $signature = 'lambda:up';

    public function handle(): int
    {
        $this->laravel->useStoragePath(StorageDirectories::Path);

        return parent::handle();
    }
}

