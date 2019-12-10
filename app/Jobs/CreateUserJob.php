<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class CreateUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name;
    protected $age;
    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $age, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $password = Str::random(8);

        $user = User::create([
           'name' => $this->name,
           'age' => $this->age,
           'email' => $this->email,
           'password_decrypt' => $password,
           'password' => bcrypt($password),
        ]);
    }
}
