<?php

namespace SadekD\SocialiteMultiAccounts;

use Illuminate\Support\ServiceProvider;

class SocialiteMultiAccountsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/socialite-multi-accounts.php',
            'socialite-multi-accounts'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/socialite-multi-accounts.php' => config_path('socialite-multi-accounts.php'),
        ], 'config');

        if (!class_exists('CreateUsersSocialsAccountsTables')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_users_socials_accounts_table.php.stub'
                    => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_users_socials_accounts_table.php'),
            ], 'migrations');
        }
    }
}
