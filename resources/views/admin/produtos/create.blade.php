<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
      <form action="{{ route('admin.produto.store') }}"  method="POST" enctype="multipart/form-data" class="col s12">
        @csrf

        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">

        <div class="row">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="preco" id="preco" type="number" class="validate">
            <label for="preco">Preço</label>
          </div>

          <div class="input-field col s12">
            <input name="descricao" id="descricao" type="text" class="validate">
            <label for="descricao">Descrição</label>
          </div>

          <div class="input-field col s12">
            <select name="id_categoria">
              <option value="" disabled selected>Escolha uma opção</option>
              @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
              @endforeach
              
            </select>
            <label>Categoria</label>
          </div>
        </div>
        
        <div class="file-field input-field">
            <div class="btn">
                <span>imagem</span>
                <input name="imagem" type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
         
        <div style="display: flex; float: right; padding-bottom: 20px">
            <a href="#!" class="modal-close waves-effect waves-green btn blue">Cancelar</a><br>
            <button style="margin-left: 10px" type="submit" class="waves-effect waves-green btn green">Cadastrar</button><br>
        </div>
        
    </div>
    
  </form>
  </div>