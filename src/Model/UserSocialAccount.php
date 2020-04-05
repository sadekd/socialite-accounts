<?php

namespace SadekD\SocialiteMultiAccounts\Model;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    public function getTable(): string
    {
        return config('socialite-multi-accounts.table_name');
    }
}
