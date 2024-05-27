<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompaniaTelefonicaRequest;
use App\Http\Resources\CompaniaTelefonicaResource;
use App\Models\CompaniaTelefonica;
use App\Services\CrudService;
use Illuminate\Http\Request;

class CompaniaTelefonicaController extends Controller
{
    protected CrudService $service;
    protected CompaniaTelefonica $model;

    public function __construct(CrudService $service, CompaniaTelefonica $model)
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

        return CompaniaTelefonicaResource::collection($query->get());
    }

    public function store(CompaniaTelefonicaRequest $request)
    {
        return $this->service->store($request, $this->model, new CompaniaTelefonicaResource($this->model::class));
    }

    public function show($id)
    {
        return $this->service->show($id, $this->model, new CompaniaTelefonicaResource($this->model::class));
    }

    public function update($id, CompaniaTelefonicaRequest $request)
    {
        return $this->service->update($id, $request, $this->model, new CompaniaTelefonicaResource($this->model::class));
    }

    public function destroy($id)
    {
        return $this->service->destroy($id, $this->model);
    }
}
