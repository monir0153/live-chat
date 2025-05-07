<?php

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('message.{id}', function ($id) {
    $user = User::find($id);
    if (!$user) {
        return false;
    }
    return true;
});

Broadcast::channel('online', function ($user) {
    return $user;
});
