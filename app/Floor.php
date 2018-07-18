<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * App\Floor
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $building_id
 * @property string $name
 * @property-read \App\Building|null $building
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Room[] $rooms
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Floor whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Floor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Floor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Floor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Floor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Floor extends Model
{
	use LogsActivity;

	protected static $logName = 'Floor';

	public function building(): BelongsTo
	{
		return $this->belongsTo(Building::class, 'building_id');
	}

	public function rooms(): HasMany
	{
		return $this->hasMany(Room::class, 'floor_id');
	}
}
