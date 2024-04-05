<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Join extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'joins';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function mountain(): BelongsTo
    {
        return $this-> belongsTo(Mountain::class);
    }
    public function memberjoin(): BelongsTo
    {
        return $this-> belongsTo(MemberJoin::class);
    }
    public function user(): BelongsTo
    {
        return $this-> belongsTo(User::class);
    }
    public function isFull(){
        return $this->memberjoins->count() >= $this->quantity;
    }
}
