@extends ('layout.principal')
@section('conteudo')
<h1>Adicionar Procedimentos</h1>
<form method="post" action="{{route('procedures.store')}}">
	@csrf
	<p>Nome:<input type="text" name="name"></p>
	<p>Preço:<input type="number" name="price"></p>
	<p>ID do Usuário:<input type="number" name="user_id"></p>
	<p>Adicionar<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
