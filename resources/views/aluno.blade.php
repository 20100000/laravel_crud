<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h3 class="text-warning">Alunos</h3>
        <hr>
        <h3> <a class="text-primary" href='./professor'>Professores</a></h3>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary float-right" href="./aluno/novo">Add</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>RA</th>
                    <th>professor</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->ra}}</td>
                    <td>{{$item->professor->nome}}</td>
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
