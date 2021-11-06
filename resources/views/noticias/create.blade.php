<x-template titulo="Titulo">
    <div class="container pt-5">

    <h4>Cadastro de Notícias</h4>

    @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Erro ao realizar esta operação</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
        
    <form action="/noticias" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control">

        </div>

        <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea name="conteudo" rows="5" class="form-control"></textarea>

        <div class="form-group">
        <label for="imagem">Imagem</label><br>
        <input type="file" name="imagem">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="A">Ativo</option>
                <option value="I">Inativo</option>
            </select>

        <div class="form-group">
        <label for="data_publicacao">Data</label>
        <input type="text" name="data_publicacao" class="form-control"
            data-provide="datepicker" data-date-format="dd/mm/yyyy"
            data-date-language="pt-BR">
        </div>

        <button class="btn btn-primary">Salvar</button>




    </form>

    <a href="/noticias" class="btn btn-defaut">Voltar</a>

    </div>
</x-template>