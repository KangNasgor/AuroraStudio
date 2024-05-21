<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        //
=======
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
=======
        $this->registerPolicies();

>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
        //
    }
}
