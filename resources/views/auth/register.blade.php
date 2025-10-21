<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natal Free Surf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="short cut icon" href="{{ asset('assets/LogoNFS-FundoBranco.png') }}">
    <script src="https://kit.fontawesome.com/8e1950bbdd.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <div style="border: 0px dotted rgb(47, 241, 255);">
        <div class="container-fluid">

            <div class="row" > <!--content -->

                <div class="col-md-4" id="left_collum_login">           <!-- left collum-->

                    <div class="row justify-content-evenly img_logo" style="border: 0x solid red;" >
                        <img id="logo_login_pg" src="{{ asset('assets/LogoNFS-FundoBranco.png')}}" alt="Logo NFS">
                    </div>

                    <div class="row justify-content-evenly" style="border: px solid red;">

                            <form style="padding: 10%;" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3 col">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control" placeholder="insira seu e-mail">
                                </div>

                                <div class="mb-3 col">
                                    <label class="form-label">Senha</label>
                                    <input type="password" class="form-control" placeholder="insira sua senha">

                                </div>



                                <hr>

                                <div class="row">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">Create</button>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">Go Back</button>
                                    </div>

                                </div>




                            </form>


                            <div class="row justify-content-evenly" style="border: 0px solid orange;">
                        <div class="col-auto">
                            <a href="#">Solicite Acesso e Agende sua aula!</a>
                        </div>
                    </div>

                    </div>



                </div>                                                  <!-- end of the left collum-->

                <div class="col-md-8 " >         <!--right collum-->
                    <div class="teste" ></div>
                </div>
            </div>

        </div>

    </div>


  </body>
</html>
