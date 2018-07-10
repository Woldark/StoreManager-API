<?php

Route::resources([
    'buildings' => 'BuildingController',
    'rooms' => 'RoomController',
    'floors' => 'FloorController',
    'types' => 'TypeController',
    'goods' => 'GoodController',
    'responsibles' => 'ResponsibleController',
]);