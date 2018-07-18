<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * App\Responsible
 *
 * @property int $id
 * @property int|null $room_id
 * @property string $name
 * @property string $code_meli
 * @property string $post
 * @property string $shenasnameh
 * @property string $personeli
 * @property string $picture
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Room|null $room
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereCodeMeli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible wherePersoneli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible wherePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereShenasnameh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Responsible whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Responsible extends Model
{
	use LogsActivity;

	protected static $logName = 'Responsible';

	protected $hidden = ['room'];

	public function room(): BelongsTo
	{
		return $this->belongsTo(Room::class, 'room_id');
	}
}
