<?php

namespace eKutivaSolutions\SymLinker\Console\Commands;

use Illuminate\Console\Command;

class SymlinkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:symlink';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a symbolic link from "public/storage" to "storage/app/public"';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        if (file_exists(public_path('storage'))) {
            return $this->error('The "public/storage" directory already exists.');
        }
        $this->laravel->make('myfiles')->link(storage_path('app/public'), public_path('storage'));
        $this->info('The [public/storage] directory has been linked.');
    }
}
