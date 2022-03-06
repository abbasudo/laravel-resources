<?php

namespace Llabbasmkhll\LaravelResources\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Resources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:resources {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Resource & Controller for the given name';

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
     * @return int
     */
    public function handle(): int
    {
        $name = Str::ucfirst($this->argument('name'));

        $this->call('make:resource', ['name' => $name.'Resource']);

        $this->info($name.' resource created successfully!');

        $this->call('make:resource', ['name' => $name.'Collection']);

        $this->info($name.' collection created successfully!');

        return 0;
    }
}
