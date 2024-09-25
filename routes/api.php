<?php

use App\Http\Controllers\TeamController;
use Orion\Facades\Orion;

Orion::resource('teams', TeamController::class);