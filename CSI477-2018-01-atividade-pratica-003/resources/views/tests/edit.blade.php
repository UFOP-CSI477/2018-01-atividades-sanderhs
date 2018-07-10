@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar Teste:{{$test->id}}</h1>
<form method="post" action="{{route('tests.update',['test' => $test->id])}}">
	@csrf
	@method('PATCH')
	<p>ID do Usuário:<input type="number" name="user_id" value="{{$test->user_id}}"></p>
	<p>ID do Procedimento:<input type="number" name="procedure_id" value="{{$procedure->price}}"></p>
	<p>Atualizar<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
