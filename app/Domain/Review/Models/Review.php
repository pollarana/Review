<?php
namespace App\Domain\Review\Models;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
/**
* @property int $ID_Reviews
*
* @property int $ID_Events ID Events
* @property int $ID_Users ID Users
* @property string $Comment Comment
*
* @property CarbonInterface|null $created_at
* @property CarbonInterface|null $updated_at
*/
class Review extends Model
{
    protected $table = 'reviews';
}

class User extends Model 
//get review associated with the user
{
    public function review()
    {
        return $this->hasOne(Review::class);
    }
}

class Review extends Model 
//get user having review
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

class User extends Model 
//get event associated with user
{
    public function event()
    {
        return $this->hasOne(Event::class);
    }
}

class Event extends Model 
//get user registered for event
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
