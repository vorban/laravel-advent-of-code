<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunCommand extends Command
{
    protected $signature = 'aoc:run {year} {day} {--example}';

    protected $description = 'Run the solution';

    public function handle()
    {
        $instance = instanciate_solution($this->argument('year'), $this->argument('day'));
        if (! $instance) {
            $this->error('Solution not found');

            return;
        }

        $data = load_input($this->argument('year'), $this->argument('day'), $this->hasOption('example'));
        if ($data == null) {
            $this->error('Input file does not exist');

            return;
        }

        $this->info("Silver: {$instance->silver($data)}");
        $this->info("Gold: {$instance->gold($data)}");
    }
}
