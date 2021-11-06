@extends('adminlte::page')

@section('content')

    <div class = "container">

          <h3>Listagem de Notícias</h3>

        @if(session()->has('mensagem'))

            <div class="alert alert-success">

                {{ session()->get('mensagem') }}

            </div>

        @endif

    <a href="/noticias/create" class="btn btn-primary">Nova Noticia</a>

<table class="table">

  <thead>

    <tr>

      <th>Ações</th>
      <th scope="col">Título</th>
      <th scope="col">Imagem</th>
      <th scope="col">Data de publicação</th>
      <th scope="col">Status</th>

    </tr>

  </thead>

  <tbody>

    @foreach($noticias as $noticia)

    <tr>

      <td>

        <a href="/noticias/{{ $noticia->id }}/edit" class="btn btn-warning">Editar</a>

          <form action="/noticias/{{ $noticia->id }}" method="POST" onSubmit="confirmaExclusao(event)">

          @method('DELETE')
          @csrf 

         <button type="submit" class="btn btn-danger">Excluir</button>

        </form>

      </td>
    
      <td>{{ $noticia->titulo }}</td>
      
      <td>

        <img src="{{ $noticia->imagem }}" height="50px">

      </td>

      <td>{{ $noticia->data_formatada }}</td>
  
          <td>

            @if ($noticia->status == "A")
              Ativo

            @else
             inativo

            @endif

        </td>

          {{$noticia->data_publicacao->format("d/m/Y")}}

    </tr>
    
    @endforeach

  </tbody>

</table>

  {{ $noticias->links() }}

</div>

@stop





   
   