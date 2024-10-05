<?php

namespace App\Policies;

use App\Models\User;
use App\Models\daftar_pejabat_struktural;
use Illuminate\Auth\Access\Response;

class DaftarPejabatStrukturalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, daftar_pejabat_struktural $daftarPejabatStruktural): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, daftar_pejabat_struktural $daftarPejabatStruktural): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, daftar_pejabat_struktural $daftarPejabatStruktural): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, daftar_pejabat_struktural $daftarPejabatStruktural): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, daftar_pejabat_struktural $daftarPejabatStruktural): bool
    {
        //
    }
}
