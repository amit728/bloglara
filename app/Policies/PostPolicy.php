<?php

namespace App\Policies;

use App\Model\admin\Admin;
use App\Model\user\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        //
    }

    /**
     * Determine whether the Admin can view the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the Admin can create models.
     *
     * @param  \App\Model\user\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 2) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Determine whether the Admin can update the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the Admin can delete the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the Admin can restore the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $user, Post $post)
    {
        //
    }
}
