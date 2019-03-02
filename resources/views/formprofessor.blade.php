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
            <h3> <a class="text-primary" href='../aluno'>Alunos</a></h3>
        </div>

    </div>
    <div class="row">

        <form action="{{url('/professor/novo')}}" method="POST" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"  placeholder="Enter nome">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
