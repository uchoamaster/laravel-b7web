@extends('layouts.logintheme')
@section('title', 'Login no Sistema')
@section('content')

                        <form action="" method="">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                <div class="col-md-8">
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                <div class="col-md-8">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary btn btn-block m-1">Entrar</button>
                            </div>
                            <div class="col-md-8 offset-md-4">
                            <a href="register"><button type="button"  class="btn btn-secondary btn btn-block m-1">Registrar</button></a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
@endsection

@section('footer')
