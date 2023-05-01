<h2>Lista de Cidade</h2>

<td>
    <form action="{{ route('cidades.create') }}">
        <input type='submit' value='Cadastrar Cidade'>
    </form>
</td>

<table>
   <thead>
       <tr>
           <th>ID</th>
           <th>CIDADE</th>
           <th>PORTE</th>
           <th>INFO</th>
           <th>EDITAR</th>
           <th>REMOVER</th>
       </tr>
   </thead>
   <tbody>
       <!-- Funcionalidade Blade / Laço Repetição -->
       <!-- Percorre o array clientes enviado pela Controller -->
       @foreach ($cidades as $item)
           <tr>
               <!-- Acessa os campos de cada item do array -->
               <td>{{ $item['id'] }}</td>
               <td>{{ $item['cidade'] }}</td>
               <td>{{ $item['porte'] }}</td>
               <td>
                    <form action="{{ route('cidades.edit', $item['id']) }}" method="GET">
                        <input type='submit' value='Editar'>
                    </form>
                </td>
                <td>
                    <form action="{{ route('cidades.destroy', $item['id']) }}" method="POST">
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