<?php

Route::resources([
    'buildings' => 'API\BuildingController',
    'rooms' => 'API\RoomController',
    'floors' => 'API\FloorController',
    'types' => 'API\TypeController',
    'goods' => 'API\GoodController',
    'responsibles' => 'API\ResponsibleController',
]);