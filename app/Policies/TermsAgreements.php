<?php

namespace WebCTF\Policies;

use WebCTF\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TermsAgreements
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
