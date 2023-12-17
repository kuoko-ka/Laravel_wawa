<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Events extends Model
{
    use HasFactory;
   

    public function scopeFilter($query, array $filters)
    {

       if ($filters['Department'] ?? false) {
            $query->where('department', 'like', '%' . request('Department') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('department', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }




    }
    //relasyon sa imong user

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
        
    }


}
