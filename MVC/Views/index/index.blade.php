    @extends('layouts.layout')
    @section('content')
    <main class="container d-flex justify-content-center" style="height: 100vh;">
        <div class="row" >
            <div class="card text-dark">
                <div class="card-header">
                    <h3>Logar</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action=""> <!-- Login -->
                        <!-- username -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="fas fa-user"></span></span>
                            </div>  
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <!-- Password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <!-- Lembrar de mim -->
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember me
                        </div>
                        <!-- Enviar -->
                        <div class="form-group">
                            <button type="text" class="btn login_btn float-right">Logar</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Não possui uma conta? <a href=""> Registrar</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    @sectionend