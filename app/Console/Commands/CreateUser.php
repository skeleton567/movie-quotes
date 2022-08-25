<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new user and save it in database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!filter_var($this->argument()['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Email should be in email format\n";
        } elseif (User::where('email', '=', $this->argument()['email'])->first()) {
            echo "Duplicate entry!\n";
        } else {
            $arguments = $this->argument();
            $arguments['password'] = bcrypt($this->argument()['password']);
            User::create($arguments);
            echo "User created succesfully!\n";
        }
    }
}
