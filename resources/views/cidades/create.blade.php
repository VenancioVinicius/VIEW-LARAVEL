<h2>Cadastrar Cidade</h2>
<form action="{{ route('cidades.store') }}" method="POST">
   <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
   @csrf
   <a href="{{route('cidades.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='cidade'><br><br>
   <label>Porte: </label> <select name='porte'>

      <option value="Pequeno">Pequeno</option>
      <option value="Medio">Medio</option>
      <option value="Grande">Grande</option>
  
   </select><br><br>
   <input type="submit" value="Salvar">
</form>