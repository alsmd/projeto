    
    <?php $__env->startSection('content'); ?>
    <main class="container d-flex justify-content-center" style="height: 100vh;">
        <div class="row" >
            <div class="card text-dark">
                <div class="card-header">
                    <h3>Registrar</h3>
                </div>
                <div class="card-body">
                    <form action=""> <!-- Login -->
                        <!-- username -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i class="fas fa-user"></i></span>
                            </div>  
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <!-- email -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                        <!-- Password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <!-- Enviar -->
                        <div class="form-group">
                            <button type="text" class="btn login_btn float-right bg-success">Registrar</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Já possui uma conta? <a href=""> Logar</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    @sectionend
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Flavio da Silva\Desktop\projeto-2\slim-skeleton\MVC\Views/index/registrar.blade.php ENDPATH**/ ?>