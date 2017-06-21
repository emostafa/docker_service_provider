<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DockerApi;

class DockerController extends Controller
{
    function index (DockerApi $docker) {
        $c = $docker->listContainers();

        return $c;
    }
}
