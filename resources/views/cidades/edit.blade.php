<h2>Alterar Cidade</h2>
<form action="{{ route('cidades.update', $cidade['id']) }}" method="POST">
   <!-- Token de Segurança -->
   <!-- Define o método de submissão como PUT -->
   @csrf
   @method('PUT')
   <a href="{{route('cidades.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='cidade' value='{{$cidade['cidade']}}'> <br><br>
   <label>Porte: </label> <select name='porte' value='{{$cidade['porte']}}'>

      <option value="Pequeno">Pequeno</option>
      <option value="Medio">Medio</option>
      <option value="Grande">Grande</option>
  
   </select><br><br>
   <input type="submit" value="Salvar">
</form>