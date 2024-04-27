<?php
namespace App\Domain\News\Models;
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

