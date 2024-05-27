<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personas\IndexPersonaRequest;
use App\Http\Requests\Personas\PersonaRequest;
use App\Http\Requests\Personas\UpdatePersonaRequest;
use App\Http\Resources\Personas\PersonaResource;
use App\Models\Personas\Persona;

class PersonaController extends Controller
{
    /**
     * Campos excluidos para la consulta de informacion sobre personas.
     */
    private $camposExcluidos = [
        'paginacion',
        'devolver_con'
    ];

    public function index(IndexPersonaRequest $request)
    {
        $queryArgs = [];
        $relaciones = $request['devolver_con'] ?? [];

        foreach (array_keys($request->all()) as $campo) {
            if (!in_array($campo, $this->camposExcluidos)) {
                if (substr($campo, 0, 4) == "not_") {
                    array_push($queryArgs, [substr($campo, 4), 'NOT LIKE', '%' . $request[$campo] . '%']);
                } else {
                    array_push($queryArgs, [$campo, 'LIKE', '%' . $request[$campo] . '%']);
                }
            }
        }

        $query = Persona::where($queryArgs)->with($relaciones);
        if (array_key_exists('paginacion', $request->all())) {
            return response()->json($query->paginate($request['paginacion'], ['*'], 'pagina'));
        }
        return PersonaResource::collection($query->get());
    }

    public function store(PersonaRequest $request)
    {
        return new PersonaResource(Persona::create($request->all()));
    }

    public function show($id)
    {
        return new PersonaResource(Persona::findOrFail($id));
    }

    public function update($id, PersonaRequest $request)
    {
        $model = Persona::findOrFail($id);
        $model->update($request->all());
    }

    public function destroy($id)
    {
        if (Persona::findOrFail($id)->delete()) {
            return response()->json(['mensaje' => 'Borrado correcto']);
        }
    }
}
