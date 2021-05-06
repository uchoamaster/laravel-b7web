@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('content')
<h3 >Adicionar</h3>

<form name="my-form" onsubmit="return validform()"  method="POST">
    @csrf


    <div class="form-group row">
        <label for="titulo" class="col-md-4 col-form-label text-md-right">Título</label>
        <div class="col-md-6">
            <input type="text" id="titulo" class="form-control" name="titulo">
        </div>
    </div>

        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary btn btn-block">
            Editar
            </button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">
function validform() {

var a = document.forms["my-form"]["titulo"].value;


if (a==null || a=="")
{
alert("insira um título por favor");
return false;
}

}
</script>


@endsection



