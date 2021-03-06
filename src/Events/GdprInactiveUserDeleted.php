<?php

namespace Soved\Laravel\Gdpr\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;

class GdprInactiveUserDeleted
{
    use SerializesModels;

    /**
     * @var \App\User
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
