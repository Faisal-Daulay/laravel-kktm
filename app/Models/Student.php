<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Student extends Model
{
    use HasFactory, LogsActivity;
    protected $guarded = ['$id'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'fullname',
                'matric_number',
                'ic',
                'email',
                'address',
                'program_of_study',
                'phone_number',
                'religion',
                'races',
                'date_of_birth',
                'birthplace',
                'gender',
                'age',
            ])
            ->setDescriptionForEvent(fn (string $eventName) => "Data student has been {$eventName}")
            ->useLogName(Auth::check() ? Auth::user()->name : 'Staff');
    }


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('fullname', 'like', '%' . $search . '%');
        });
    }

    public function logactivity(): MorphMany
    {
        return  $this->morphMany(LogUpdate::class, 'subject');
    }

    public function student_parent(): HasOne
    {
        return $this->hasOne(StudentParent::class);
    }
}
