<?php

namespace App\Http\Controllers;

use App\Http\Requests\Team\TeamRequest;
use App\Http\Resources\Team\TeamCollection;
use App\Http\Resources\Team\TeamResource;
use App\Models\Team;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class TeamController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = Team::class;


    /**
    * @var string $request
    */
    protected $request = TeamRequest::class;

    /**
     * @var string $resource
     */
    protected $resource = TeamResource::class;

    /**
     * @var string $collectionResource
     */
    protected $collectionResource = TeamCollection::class;

}
