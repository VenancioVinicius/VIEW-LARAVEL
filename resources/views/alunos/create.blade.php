<h2>Cadastrar Aluno</h2>
<form action="{{ route('alunos.store') }}" method="POST">
   <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
   @csrf
   <a href="{{route('alunos.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome'>
   <label>E-mail: </label> <input type='text' name='email'>
   <input type="submit" value="Salvar">
</form>