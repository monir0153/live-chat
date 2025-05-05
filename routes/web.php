<?php

use App\Http\Controllers\{ProfileController, MessageController};
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = User::latest()->get();
    return view('dashboard', ['users' => $user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/messages/send', [MessageController::class, 'send'])->name('messages.send');
Route::get('messages/{user_id}', function ($user_id) {
    $data = Message::where('sender_id', $user_id)->orWhere('receiver_id', $user_id)
        ->limit(50)->get();
    return response()->json([
        'status' => true,
        'messages' => $data
    ], 200);
});
require __DIR__ . '/auth.php';
