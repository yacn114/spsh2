<?php

namespace App\Policies;

use App\Models\Transfer_Purchase_history;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TransferPurchaseHistoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Transfer_Purchase_history $transferPurchaseHistory): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Transfer_Purchase_history $transferPurchaseHistory): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Transfer_Purchase_history $transferPurchaseHistory): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Transfer_Purchase_history $transferPurchaseHistory): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Transfer_Purchase_history $transferPurchaseHistory): bool
    {
        return false;
    }
}
