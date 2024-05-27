<?php

namespace App\Http\Controllers\Oficialidades;

use App\Http\Controllers\Controller;
use App\Http\Resources\Oficialidades\FolioResource;
use App\Models\Oficialidades\Folio;
use App\Services\CrudService;

class FolioController extends Controller
{
    protected CrudService $service;
    protected Folio $model;

    public function __construct(CrudService $service, Folio $model)
    {
        $this->service = $service;
        $this->model = $model;
    }

    public function index()
    {
        $query = $this->model::query();

        if (request()->has('search')) {
            $query = $this->model::search(request('search'));
        }

        return response()
            ->json(FolioResource::collection($query->get()))
            ->setEncodingOptions(JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return $this->service->show($id, $this->model, new FolioResource($this->model::class));
    }
}
