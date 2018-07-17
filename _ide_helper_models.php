<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Building
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Floor[] $floors
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Building whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Building whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Building whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Building whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Building extends \Eloquent {}
}

namespace App{
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
	class Floor extends \Eloquent {}
}

namespace App{
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
	class Good extends \Eloquent {}
}

namespace App{
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
	class Responsible extends \Eloquent {}
}

namespace App{
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
	class Room extends \Eloquent {}
}

namespace App{
/**
 * App\Type
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Good[] $goods
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Type extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

