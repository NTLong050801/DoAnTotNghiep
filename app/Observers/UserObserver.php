<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Ntlong050801\FileManager\app\Models\FileManager;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        try {
            $userFolder = "user_{$user->id}";
            $rootPath = "File-manager/{$userFolder}";
            Storage::makeDirectory($rootPath);
            FileManager::create([
                'name' => ($user->name ?? $user->username) . "'s Document",
                'file_path' => $rootPath,
                'user_id' => $user->id,
            ]);
        }catch (\Exception $exception){
            Log::error(class_basename($this).': '.$exception->getMessage());
        }
    }
}
