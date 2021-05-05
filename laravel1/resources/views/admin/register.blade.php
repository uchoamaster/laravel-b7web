@extends('layouts.registertheme')
@section('title', 'Registro no Sistema')
@section('content-registro')

        {{-- Meu nome é {{$nome}} e tenho {{$idade}} anos.<br> --}}

        {{-- @if($idade > 18  && $idade <= 60)
        eu sou um Adulto.
        @elseif($idade > 60 && $idade <=120)
        eu sou um idoso.
        @else
        eu  sou MENOR de idade.
        @endif
        <br>
        @isset($versao)
        existe uma versão e é a versão: {{$versao}}
        @endisset
        <br>
        @empty($idade)
        existe uma cidade {{$idade}}
        @endempty --}}
            <hr>
        {{-- @for($q=1;$q<=10;$q++)
            o valor é {{$q}}<br>
        @endfor --}}

        {{-- pode se fazer assim ou de outro jeito que vou mostrar na sequencia --}}
        {{-- @if(count($lista) > 0)
            Lista de Bolo:
            <ul>
                @foreach($lista as $item)
                <li>{{$item}}</li>
                @endforeach
            </ul>
        @else
        Não há ingredientes.
        @endif --}}

        {{-- este outro exemplo é bastante utilizado tb como podem verificar --}}
        {{-- pode se criar um componente de alerta dessa forma aqui como podes verificar no exemplo abaixo: --}}

        @component('components.alert')
            Testando msg de alerta de erro 1,2,3 ...
        @endcomponent

        {{-- @component('alert')
        @slot('type')
        Aviso:
        @endslot
        Alerta de Erro Teste
        @endcomponent --}}
        <ul>
            @forelse($lista as $item)
            <li>{{$item['nome']}} -  {{$item['qt']}}</li>
            @empty
            <li>Não há ingredientes</li>
            @endforelse
        </ul>

        {{-- @while()
        pouco utilizado mas tb pode ser util em determinada situação
        @endwhile --}}
            <hr>                <form name="my-form" onsubmit="return validform()"  method="GET">



                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nome Completo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Endereço de E-mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Nome de Usuário</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="username">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Telefone</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone_number">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Endereço Atual</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="permanent-address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>


                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn btn-block">
                                        Registrar
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

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["username"].value;
        var d = document.forms["my-form"]["phone_number"].value;
        var e = document.forms["my-form"]["permanent-address"].value;
        var f = document.forms["my-form"]["password"].value;

        if (a==null || a=="")
        {
            alert("insira seu nome por favor");
            return false;
        }else if (b==null || b=="")
        {
            alert("Insira seu email por favor");
            return false;
        }else if (c==null || c=="")
        {
            alert("Por favor entre com seu usuário!");
            return false;
        }else if (d==null || d=="")
        {
            alert("Por favor entre com seu telefone");
            return false;
        }else if (e==null || e=="")
        {
            alert("Por favor entre com seu endereço atual");
            return false;
        }else if (f==null || f=="")
        {
            alert("Por favor entre com seu senha");
            return false;
        }

    }
</script>
@endsection

@section('footer')
