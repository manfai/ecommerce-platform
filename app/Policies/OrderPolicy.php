<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Order;
use App\Models\Staff;

class OrderPolicy
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

    public function view(Staff $user, Order $order)
    {
        return ($user->isAdmin);
    }

    public function create(Staff $user)
    {
        return ($user->isAdmin);
    }

    public function edit(Staff $user, Order $order)
    {
        return ($user->isAdmin);
    }

    public function own(User $user, Order $order)
    {
        return $order->user_id == $user->id;
    }

}
