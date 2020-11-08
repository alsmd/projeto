    
    <?php $__env->startSection('content'); ?>
    <?php session_destroy(); ?>
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
                    <form action="/logar" method="post"> <!-- Login -->
                        <!-- username -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="fas fa-user"></span></span>
                            </div>  
                            <input type="email" class="form-control" placeholder="email" name="email" required>
                        </div>
                        <!-- Password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="senha" required>
                        </div>
                        <!-- Lembrar de mim -->
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember me
                        </div>
                        <?php if(isset($_GET['erro'])): ?>
                            <?php if($_GET['erro'] == 'email'): ?>
                                <p style="color:red;">Email não cadastrado</p>
                            <?php else: ?>
                                <p style="color:red;">Senha incorreta</p>
                            <?php endif; ?>
                        <?php endif; ?>
                        <!-- Enviar -->
                        <div class="form-group">
                            <button type="text" class="btn login_btn float-right">Logar</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Não possui uma conta? <a href="/registro"> Registrar</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="/recuperar">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    @sectionend
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Flavio da Silva\Desktop\projeto\MVC\Views/index/index.blade.php ENDPATH**/ ?>