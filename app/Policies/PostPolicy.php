<?php

namespace App\Policies;

use App\Model\admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
       return $this->getPermission($user, 6);
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user, 7);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user, 8);
    }

    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
    }

    protected function getPermission($user, $permission_id){

        foreach ($user->roles as $role){

            foreach ($role->permissions as $permission) {

                if ($permission->id == $permission_id){
                    return true;
                }
            }
        }

        return false;

    }

    public function tag(Admin $user){

        return $this->getPermission($user, 13);
    }

    public function category(Admin $user){

        return $this->getPermission($user, 14);
    }

    public function permission(Admin $user){

        return $this->getPermission($user, 15);
    }

    public function role(Admin $user){

        return $this->getPermission($user, 16);
    }

    public function user(Admin $user){

        return $this->getPermission($user, 9);
    }
}
