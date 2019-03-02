<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="text-warning">Proferssores</h3>
        </div>
        <div class="col-2">
            <h3> <a class="text-primary" href='./aluno'>Alunos</a></h3>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary float-right" href="./professor/novo">Add</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>Alunos</th>
                <th>Data</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{count($item->aluno)}}</td>
                    <td>{{date( 'd/m/Y' , strtotime($item->created_at))}}</td>
                    <td> <b class="text-danger">X</b></td>
                </tr>
            @endforeach
            </tbody>



        </table>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
