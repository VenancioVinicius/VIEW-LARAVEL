<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Alunos", 'rota' => "alunos.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Alunos @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist
                crud="alunos"
                :header="['ID', 'NOME', 'E-MAIL', 'AÇÕES']" 
                :data="$alunos"
                :hide="[true, false, true, false]" 
            />

        </div>
    </div>
@endsection