<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\Member;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CommentPolicy
{
    use HandlesAuthorization;

    public function view(?Member $member)
    {
        return true;
    }

    public function create(?Member $member)
    {
        if (Auth::guard('admin')->check())
            return false;
        if (!Auth::check())
            return false;
        return true;
    }

    public function update(?Member $member, Comment $comment)
    {
        if (Auth::guard('admin')->check())
            return false;
        if (!Auth::check())
            return false;
        return $member->id == $comment->owner->id;
    }

    public function delete(?Member $member, Comment $comment)
    {
        if (Auth::guard('admin')->check())
            return true;
        if (!Auth::check())
            return false;
        if ($comment->recipe->group != null && $comment->recipe->group->moderators->contains($member->id))
            return true;
        return $member->id == $comment->owner->id;
    }
}
