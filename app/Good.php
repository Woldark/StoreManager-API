<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Good
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $type_id
 * @property int|null $room_id
 * @property string $name
 * @property string $property_number
 * @property string $kind
 * @property string $old_property_number
 * @property string $old_kind
 * @property string $description
 * @property string $model
 * @property string $serial
 * @property string $barcode
 * @property string $status
 * @property string $picture
 * @property string $unit
 * @property-read \App\Room|null $room
 * @property-read \App\Type|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereOldKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereOldPropertyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good wherePropertyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Good whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Good extends Model
{
	public function room(): BelongsTo
	{
		return $this->belongsTo(Room::class, 'room_id');
	}

	public function type(): BelongsTo
	{
		return $this->belongsTo(Type::class, 'type_id');
	}
}
