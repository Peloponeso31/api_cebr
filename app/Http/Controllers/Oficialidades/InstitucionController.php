<?php

namespace App\Http\Controllers\Oficialidades;

use App\Http\Controllers\Controller;
use App\Http\Requests\Oficialidades\InstitucionRequest;
use App\Http\Resources\Oficialidades\InstitucionResource;
use App\Models\Oficialidades\Institucion;
use App\Services\CrudService;

class InstitucionController extends Controller
{
    protected CrudService $service;
    protected Institucion $model;

    public function __construct(CrudService $service, Institucion $model)
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

        return InstitucionResource::collection($query->get());
    }

    public function store(InstitucionRequest $request)
    {
        return $this->service->store($request, $this->model, new InstitucionResource($this->model::class));
    }

    public function show($id)
    {
        return $this->service->show($id, $this->model, new InstitucionResource($this->model::class));
    }

    public function update($id, InstitucionRequest $request)
    {
        return $this->service->update($id, $request, $this->model, new InstitucionResource($this->model::class));
    }

    public function destroy($id)
    {
        return $this->service->destroy($id, $this->model);
    }
}
