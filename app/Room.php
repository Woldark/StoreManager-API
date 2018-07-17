<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Room
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $floor_id
 * @property string $name
 * @property string $barcode
 * @property-read \App\Floor|null $floor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Good[] $goods
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Responsible[] $responsibles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Room extends Model
{
	protected $hidden = ['goods'];

	public function floor(): BelongsTo
	{
		return $this->belongsTo(Floor::class, 'floor_id');
	}

	public function responsibles(): HasMany
	{
		return $this->hasMany(Responsible::class, 'room_id');
	}

	public function goods(): HasMany
	{
		return $this->hasMany(Good::class, 'room_id');
	}
}
