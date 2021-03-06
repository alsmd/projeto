    
    <?php $__env->startSection('content'); ?>
    <main class="container d-flex justify-content-center" style="height: 100vh;">
        <div class="row" >
            <div class="card text-dark">
                <div class="card-header">
                    <h3>Registrar</h3>
                </div>
                <div class="card-body">
                    <form action="/registrar" method="POST"> <!-- Login -->
                        <!-- username -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i class="fas fa-user"></i></span>
                            </div>  
                            <input type="text" class="form-control" placeholder="username" name="nome">
                        </div>
                        <!-- email -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="email" name="email">
                        </div>
                        <!-- Password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="senha">
                        </div> 
                        <?php if(isset($cadastro)): ?>
                            <?php if($cadastro == 1): ?>
                                <p style="color:green;position:absolute;">Conta cadastrada com sucesso</p>
                            <?php else: ?>
                            <p style="color:red;position:absolute;">Erro ao cadastrar conta</p>
                            <?php endif; ?>

                        <?php endif; ?>
                        <!-- Enviar -->
                        <div class="form-group">
                            <button type="text" class="btn login_btn float-right bg-success">Registrar</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Já possui uma conta? <a href="/"> Logar</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    @sectionend
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Flavio da Silva\Desktop\projeto\MVC\Views/index/registro.blade.php ENDPATH**/ ?>