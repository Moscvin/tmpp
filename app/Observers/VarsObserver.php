<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;

class VarsSubject
{
    protected $observers = [];

    public function registerObserver(VarsObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifySaved(Model $model)
    {
        foreach ($this->observers as $observer) {
            $observer->saved($model);
        }
    }

    // Implementează și alte metode pentru notificarea celorlalte evenimente (deleted, restored, forceDeleted) în același mod.
}

class VarsObserver
{
    public function saved(Model $model): void
    {
        cache()->forget('vars');
    }

    // Implementează și alte metode pentru celelalte evenimente (deleted, restored, forceDeleted).
}

// Utilizare:
$subject = new VarsSubject();
$observer = new VarsObserver();

$subject->registerObserver($observer);
