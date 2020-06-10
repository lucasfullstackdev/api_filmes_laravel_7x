<?php

namespace App\Http\Controllers\Api;

use Throwable;

use App\Http\Controllers\Controller;

use App\Models\Filme;
use App\Models\FilmeAtor;
use App\Models\FilmeDiretor;
use App\Models\Diretor;
use App\Models\Ator;

use App\Http\Requests\FilmeRequest;
use App\Http\Services\Message;

class FilmeController extends Controller
{
    private $filme;
    private $filmeAtor;
    private $filmeDiretor;
    private $diretor;
    private $ator;

    public function __construct(Filme $filme, FilmeAtor $filmeAtor, FilmeDiretor $filmeDiretor, Diretor $diretor, Ator $ator)
    {
        $this->filme = $filme;
        $this->filmeAtor = $filmeAtor;
        $this->filmeDiretor = $filmeDiretor;
        $this->diretor = $diretor;
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
            $filmeCollection = $this->filme->paginate(10);

            foreach ($filmeCollection as $filme) {
                $filme["atores"] = $this->filmeAtor->leftJoin('ator', 'ator.id', '=', 'filme_ator.ator_id')
                                                       ->where('filme_id', $filme->id)
                                                       ->select("ator.*")
                                                       ->get();
                
                $filme["diretores"] = $this->filmeDiretor->leftJoin('diretor', 'diretor.id', '=', 'filme_diretor.diretor_id')                                       
                                                         ->where('filme_id', $filme->id)
                                                         ->select("diretor.*")
                                                         ->get();
            }
            
            return Message::create("Registros encontrados!", 200)->bind($filmeCollection)->show();
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
    public function store(FilmeRequest $request)
    {
        try {
            $lastId = $this->filme->create($request->all())->id;
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
            $filmeCollection = $this->filme->findOrFail($id);

            $filmeCollection["atores"] = $this->filmeAtor->leftJoin('ator', 'ator.id', '=', 'filme_ator.ator_id')
                                                         ->where('filme_id', $id)
                                                         ->select("ator.*")
                                                         ->get();

            $filmeCollection["diretores"] = $this->filmeDiretor->leftJoin('diretor', 'diretor.id', '=', 'filme_diretor.diretor_id')
                                                         ->where('filme_id', $id)
                                                         ->select("diretor.*")
                                                         ->get();

            return Message::create($message, 200)->bind($filmeCollection)->show();
        } catch (Throwable $th) {
            return Message::errorMessage($th);
        }
    }

    public function showDiretores($id, $message='Registro encontrado')
    {
        try {
            $filmeDiretores = $this->filmeDiretor->leftJoin('diretor', 'diretor.id', '=', 'filme_diretor.diretor_id')
                                                         ->where('filme_id', $id)
                                                         ->select("diretor.*")
                                                         ->get();

            return Message::create($message, 200)->bind($filmeDiretores)->show();
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
    public function update(FilmeRequest $request, $id)
    {
        $data = $request->all();
        return $_SERVER['REQUEST_METHOD'] == 'PUT' ? $this->updatePut($data, $id) : $this->updatePatch($data, $id);
    }
    
    private function updatePut($data, $id)
    {
        try {
            $this->filme->find($id)->update($data);
            $data = $this->filme->find($id);
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
            $this->filme->where('id', $id)->update([$fieldName => $data[$fieldName]]);
            $data = $this->filme->find($id);
            
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
            $this->filme->find($id)->delete();
            return Message::create("Registro removido com sucesso!", 200)->show();
        } catch (Throwable $th) {
            return Message::create($th->getMessage(), $th->getCode())->show();
        }
    }
}
