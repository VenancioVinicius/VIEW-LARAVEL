<h2>Lista de Alunos</h2>
<a href="{{ route('alunos.create') }}"><h4>Novo Aluno</h4></a>
<table>
   <thead>
       <tr>
           <th>ID</th>
           <th>NOME</th>
           <th>E-MAIL</th>
           <th>INFO</th>
           <th>EDITAR</th>
           <th>REMOVER</th>
       </tr>
   </thead>
   <tbody>
       <!-- Funcionalidade Blade / Laço Repetição -->
       <!-- Percorre o array clientes enviado pela Controller -->
       @foreach ($alunos as $item)
           <tr>
               <!-- Acessa os campos de cada item do array -->
               <td>{{ $item['id'] }}</td>
               <td>{{ $item['nome'] }}</td>
               <td>{{ $item['email'] }}</td>
               <td><a href="{{ route('alunos.show', $item['id']) }}">info</a></td>
               <td><a href="{{ route('alunos.edit', $item['id']) }}">editar</a></td>
               <td>
                   <form action="{{ route('alunos.destroy', $item['id']) }}" method="POST">
                       <!-- Token de Segurança -->
                       <!-- Define o método de submissão como delete -->
                       @csrf
                       @method('DELETE')
                       <input type='submit' value='remover'>
                   </form>
               </td>
           </tr>
       @endforeach
   </tbody>
</table>