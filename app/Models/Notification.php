<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// command  php artisan make:model Notification     by sane

class Notification extends Model
{
    //
    protected $table = 'notifications';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
        'read_at' => 'datetime',
    ];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function notifiable()
    {
        return $this->morphTo();
    }

    /**
     * update read_at 
     *
     * @return void
     */
    public function markAsRead()
    {
        if (is_null($this->read_at)){
            $this->forceFill(['read_at' => $this->freshTimestamp()])->save();
        }
    }

    /**
     * Undocumented function
     *
     * @param array $models
     * @return void
     */
    public function newCollection(array $models = [])
    {
        
        return new DatabaseNotificationCollection($models);
    }

}
