<?php

namespace App\Http\Controllers\Api;

use Throwable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Filme;
use App\Models\FilmeAtor;
use App\Models\FilmeDiretor;
use App\Models\Diretor;
use App\Models\Ator;

use App\Http\Services\Message;

class FilmeDiretorController extends Controller
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
    public function index($id, $message='Registros encontrados')
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        try {
            $data = $request->all();
            $data["filme_id"] = $id;

            $this->filmeDiretor->create($data)->id;
            return $this->index($id, "Registro gravado com sucesso!");
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
    public function show($id, $idDiretor)
    {
        try {
            $data = $this->diretor->leftJoin('filme_diretor', 'filme_diretor.diretor_id', '=', 'diretor.id')
                               ->where('filme_diretor.diretor_id', $idDiretor)
                               ->where('filme_id', $id)
                               ->select("diretor.*")
                               ->get();

            return Message::create('Registro encontrado', 200)->bind($data)->show();
        } catch (\Throwable $th) {
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $idDiretor)
    {
        try {
            $this->filmeDiretor->where('filme_id', $id)
                            ->where('diretor_id', $idDiretor)                
                            ->delete();

            return Message::create("Registro removido com sucesso!", 200)->show();
        } catch (Throwable $th) {
            return Message::create($th->getMessage(), $th->getCode())->show();
        }
    }
}
