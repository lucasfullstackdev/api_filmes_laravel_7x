<?php

namespace App\Http\Controllers\Api;


use Throwable;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AtorRequest;

use App\Models\Ator;
use App\Http\Services\Message;

class AtorController extends Controller
{
    private $ator;

    public function __construct(Ator $ator)
    {
        $this->ator = $ator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = $this->ator->paginate(10);
            return Message::create("Registros encontrados!", 200)->bind($data)->show();
        } catch (Throwable $th) {
            return Message::errorMessage($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtorRequest $request)
    {
        try {
            $lastId = $this->ator->create($request->only('nm_ator'))->id;
            return $this->show($lastId, "Registro gravado com sucesso!");
        } catch (Throwable $th) {
            return Message::errorMessage($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $message='Registro encontrado')
    {
        try {
            $data = $this->ator->findOrFail($id);
            return Message::create($message, 200)->bind($data)->show();
        } catch (Throwable $th) {
            return Message::errorMessage($th);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AtorRequest $request, $id)
    {
        $data = $request->all();
        return $_SERVER['REQUEST_METHOD'] == 'PUT' ? $this->updatePut($data, $id) : $this->updatePatch($data, $id);
    }
    
    private function updatePut($data, $id)
    {
        try {
            $this->ator->find($id)->update($data);
            $data = $this->ator->find($id);
            return Message::create("Registro atualizado com sucesso!", 200)->bind($data)->show();
        } catch (Throwable $th) {
            return Message::create($th->getMessage(), $th->getCode())->show();
        }
    }

    private function updatePatch($data, $id)
    {
        if (count($data) > 1)
            return Message::create("Este Verbo (PATCH) aceita apenas um campo!", 400)->show();

        try {
            $fieldName = array_keys($data)[0];
            $this->ator->where('id', $id)->update([$fieldName => $data[$fieldName]]);
            $data = $this->ator->find($id);
            
            return Message::create("Registro atualizado com sucesso!", 200)->bind($data)->show();
        } catch (Throwable $th) {
            return Message::create($th->getMessage(), $th->getCode())->show();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->ator->find($id)->delete();
            return Message::create("Registro removido com sucesso!", 200)->show();
        } catch (Throwable $th) {
            return Message::create($th->getMessage(), $th->getCode())->show();
        }
    }
}
