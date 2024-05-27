<?php

namespace App\Http\Controllers\Informaciones;

use App\Http\Controllers\Controller;
use App\Http\Requests\Informaciones\MedioRequest;
use App\Http\Resources\Informaciones\MedioResource;
use App\Models\Informaciones\Medio;
use App\Services\CrudService;

class MedioController extends Controller
{
    protected CrudService $service;
    protected Medio $model;

    public function __construct(CrudService $service, Medio $model) {
        $this->service = $service;
        $this->model = $model;
    }

    public function index()
    {
        $query = $this->model::query();

        if (request()->has('search')) {
            $query = $this->model::search(request('search'));
        }

        return MedioResource::collection($query->get());
    }

    public function store(MedioRequest $request)
    {
        return $this->service->store($request, $this->model, new MedioResource($this->model::class));
    }

    public function show($id)
    {
        return $this->service->show($id, $this->model, new MedioResource($this->model::class));
    }

    public function update($id, MedioRequest $request)
    {
        return $this->service->update($id, $request, $this->model, new MedioResource($this->model::class));
    }

    public function destroy($id)
    {
        return $this->service->destroy($id, $this->model);
    }
}
