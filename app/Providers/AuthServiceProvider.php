<?php

namespace App\Providers;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
        {
            $this->registerPolicies();

            Gate::before(function($user){
                if($user->id == 1){
                    return true;
                }
            });
            if (Gate::allows('create-contact')) {
                redirect('hooray');
}
            if(! $this->app->runningInConsole()){
                foreach (Permission::all() as $permission) {
                Gate::define($permission->url,function ($user) use ($permission){
                    return $user ->hasPermission($permission);
                });       
                }
            }
        }

    
}

 