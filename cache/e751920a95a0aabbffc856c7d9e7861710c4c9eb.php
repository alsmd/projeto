<html>
<head>
    <meta charset="utf-8" />
    <title>Inicio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/chat.css">
    <script src="src/js/selecionarChat.js"></script>
    <style>
        img{
            width:50px;
        }
        li{
            transition: background-color .4s;
        }
        li:hover{
            cursor: pointer;
            background:rgba(0, 0, 0, .3) ;
        }
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark " id="navbar">
            <div class="container">

                <!-- LOGO -->
                <a href="" class="navbar-brand" id="logo"><span class="fas fa-spider text-light"></span></a>

                <!-- Button -->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu-collapse"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="menu-collapse">
                    <!-- Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Registrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container h-100 w-100 mt-4">
        <div class="row h-80">
            <!-- Coluna de contatos -->
            <div class="col-md-4 col-xl-4 chat">
                <!-- Contados -->
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <!-- Procurar Por-->
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- Corpo Contato -->
                    <div class="card-body contacts_body">
                        <!-- Contatos -->
                        <ul class="contacts">
                            <!-- Contato -->
                            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="" id="<?php echo e($usuario->id); ?>"> <!-- active -->
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" alt="" class="rounded-circle user_img" >
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span><?php echo e($usuario->nome); ?></span>
                                        <p><?php echo e($usuario->nome); ?> esta online</p>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- Contato -->
                           <!--  <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Maria Souza</span>
                                        <p>Maria Souza saiu 7 minutos atras</p>
                                    </div>
                                </div>
                            </li> -->
                            <!-- Contato -->
                           <!--  <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Marcos Rafi</span>
                                        <p>Marcos esta online</p>
                                    </div>
                                </div>
                            </li> -->

                            <!-- Contato -->
                            <!-- <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Rashid Samim</span>
                                        <p>Rashid saiu 50 minutos atras</p>
                                    </div>
                                </div> 
                            </li>-->
                        </ul>
                    </div> <!-- Fim do corpo Contato -->
                    <div class="card-footer"></div>
                </div> <!-- Fim do card de contatos -->
            </div> <!-- Fim da coluna de contatos -->

            <!-- Coluna de chat -->
            <div class="col-md-8 col-xl-8 chat"> 
                <!-- Conversa -->
                <div class="card">
                    <div class="card-header msg_head"><!--  Parte superior do chat -->
                        <div class="d-flex bd-high-light">
                            <div class="img_cont">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>

                            <div class="user_info">
                                <span>Chat with <span id="chat_name"></span></span>
                                <p>1700 Mensagens</p>
                            </div>

                            <div class="video_cam">
                                <span><i class="fas fa-video"></i></span>
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="action_menu">
                            <ul>
                                <li><i class="fas fa-user-circle"></i>View profile</li>
                                <li><i class="fas fa-users"></i>Add to close friends</li>
                                <li><i class="fas fa-plus"></i>Add to Group</li>
                                <li><i class="fas fa-ban"></i>Block</li>
                            </ul>
                        </div>
                    </div><!-- Fim da parte superior da chat -->
                    <!-- Mensagem BOdy-->
                    <div class="card-body msg_card_body">
                        


                       

                    </div> <!-- Fim Mensagem Body -->
                    <div class="card-footer"><!--Chat Rodape-->
                        <div class="input-group">  <!-- Enviar Mensagem -->
                            <div class="input-group-append">
                                <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                            </div>

                            <textarea name="" id=""class="form--control type_msg" placeholder="Type your message..."></textarea>

                            <div class="input-group-append">
                                <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                            </div>
                        </div><!-- Fim enviar Mensagem -->
                    </div><!--  Fim chat rodape -->
                </div> <!-- Fim card de Chat -->
            </div><!-- Fim coluna de Chat -->
        </div><!-- Fim da row -->
    </main>


        <!-- Modelos para criação das mensagens -->
        <div class="d-none">
            <!-- Mensagem Recebida -->
            <div id="mensagem_recebida">
                <div class="d-flex justify-content-start mb-4 " style="display:none;">
                    <!-- Mensagem Foto -->
                    <div class="img_cont_msg">
                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                    </div>
                    <!-- Mensagem Conteudo -->
                    <div class="msg_container">
                        Hi, how are tou smam?
                        <span class="msg_time">8:40 AM, Today</span>
                    </div>
                </div>
            </div>
            <!--  Mensagem Enviada -->
            <div id="mensagem_enviada">
                <div class="d-flex justify-content-end mb-4 " style="display:none;" >
                    <!-- Conteudo -->
                    <div class="msg_container_send">
                        Hi Lucas i am good tnx how about you?
                        <span class="msg_time_send">8:55 AM, Today</span>
                    </div>
                    <!-- Mensagem Foto -->
                    <div class="img_cont_msg">
                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                    </div>
                </div>
            </div>
        </div> <!-- Fim -->
    <script>
        	$(document).ready(function(){
            $('#action_menu_btn').click(function(){
                $('.action_menu').toggle();
            });

                });
    </script>
        
</body>

</html><?php /**PATH C:\Users\Flavio da Silva\Desktop\projeto\MVC\Views/chat/chat.blade.php ENDPATH**/ ?>