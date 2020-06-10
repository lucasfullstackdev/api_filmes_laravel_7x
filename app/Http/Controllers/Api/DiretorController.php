<?php

namespace App\Http\Controllers\Api;

use Throwable;

use App\Http\Controllers\Controller;

use App\Models\Diretor;
use App\Http\Requests\DiretorRequest;
use App\Http\Services\Message;

class DiretorController extends Controller
{
    private $diretor;

    public function __construct(Diretor $diretor)
    {
        $this->diretor = $diretor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = $this->diretor->paginate(10);
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
    public function store(Request $request)
    {
        try {
            $lastId = $this->diretor->create($request->only('nm_diretor'))->id;
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
            $data = $this->diretor->findOrFail($id);
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
    public function update(DiretorRequest $request, $id)
    {
        $data = $request->all();
        return $_SERVER['REQUEST_METHOD'] == 'PUT' ? $this->updatePut($data, $id) : $this->updatePatch($data, $id);
    }
    
    private function updatePut($data, $id)
    {
        try {
            $this->diretor->find($id)->update($data);
            $data = $this->diretor->find($id);
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
            $this->diretor->where('id', $id)->update([$fieldName => $data[$fieldName]]);
            $data = $this->diretor->find($id);
            
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
            $this->diretor->find($id)->delete();
            return Message::create("Registro removido com sucesso!", 200)->show();
        } catch (Throwable $th) {
            return Message::create($th->getMessage(), $th->getCode())->show();
        }
    }
}
