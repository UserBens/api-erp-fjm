<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Str;


class GenerateApiKey extends Command
{
    protected $signature = 'generate:apikey';

    protected $description = 'Generate API Key';

    public function handle()
    {
        $key = Str::random(64);

        $this->info('API Key berhasil dibuat:');
        $this->newLine();
        $this->line($key);

        return self::SUCCESS;
    }
}