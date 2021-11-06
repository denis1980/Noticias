<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaRequest;
use App\Models\Noticia;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Services\UploadService;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::where('status', Noticia::STATUS_ATIVO)->paginate(10);
        
        return view('noticias.index', [
            "noticias" => $noticias
        ]);
    }

    public function create()
    {
        return view('noticias.form');
    }

    public function store(NoticiaRequest $request)

    {
        $dados = $request->all();
        $dados['image'] = UploadService::upload($request);
               
        $noticia = Noticia::create($dados);
        

        return redirect()->back()->with(['mensagem' => 'Registro salvo com sucesso!']);

    }

    public function edit(Noticia $noticia)

    {
        $noticia = Noticia::find($noticia);
        
        return view('noticias.form', [
            "noticia" => $noticia

        ]);
    }

    public function update(Noticia $noticia, request $request)

    {
        $dados = $request->all();
        $dados['imagem'] = UploadService::upload($request);

        $noticia->update($dados);
        

        return redirect()->back()->with(['mensagem' => 'Registro salvo com sucesso!']);
 
    }

    public function destroy(Noticia $noticia)

    {
        $noticia->delete();

        return redirect()->back()
            ->with(['mensagem' => 'Registro excluido com sucesso']);
    }
}
