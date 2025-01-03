<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'checkIn',
        'checkOut',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Optionally, you can add any additional methods that are relevant
    public function isCheckedIn()
    {
        return !is_null($this->checkIn) && is_null($this->checkOut);
    }

    public function duration()
    {
        if ($this->checkIn && $this->check_out) {
            return $this->checkOut->diffInMinutes($this->checkIn);
        }
        return null; // or 0, depending on your preference
    }
}
