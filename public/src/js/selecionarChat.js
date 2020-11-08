$(document).ready(()=>{
    ajax = null;
    $('.contacts').on('click','li',(e)=>{
        if(ajax != null){ 
            ajax.abort();//caso selecione outro usuario antes da requisição atual esta completa a requisição atual é interrompida
        }
        let usuario_selecionado =   $(e.target).closest('li')
        let id = usuario_selecionado.attr('id'); //id do usuario clickado
        sessionStorage.setItem('usuario_selecionado',id);
        //trocando a classe do chat que esta ativo
        let li = $(e.target).closest('ul').find('li');
        $.each(li,function(indice,valor){
            $(valor).removeClass('active');
        })
        $(e.target).closest('li').toggleClass('active');
        //mudando o nome do usuario selecionado
        let nome = $(e.target).closest('li').find(".contato_nome").html();
        $("#chat_name").html(nome);
        //request das mensagens entre o usuario logado e o usuario selecionado
        ajax = $.ajax({
            type: 'GET',
            url:`http://localhost:8080/chat/${id}`,
            dataType:'json',
            success: (e)=>{
                $('.msg_card_body').html(''); //apaga o chat atual
                //recuperando o html da mensagem enviada e recebida e convertendo para Dom para que seja possivel montar as mensagens dinamicamente
                let mensagem_enviada_html = $("#mensagem_enviada").html();
                let mensagem_enviada_dom = new DOMParser().parseFromString(mensagem_enviada_html,'text/html');
                let mensagem_recebida_html = $("#mensagem_recebida").html();
                let mensagem_recebida_dom = new DOMParser().parseFromString(mensagem_recebida_html,'text/html');
                let total_mensagem = e.total_mensagem;
                delete e.total_mensagem;
                $("#total_mensagem").html(total_mensagem);
                sessionStorage.setItem('chat_selecionado',e['chat'])// registrando qual é o chat selecionado
                delete e.chat;

                for(let i in e ){
                    let mensagem = e[i];
                    //verifica se foi uma mensagem enviada para o usuario selecionado ou recebida pelo usuario logado
                    if(mensagem.id_user == id){
                        $(mensagem_recebida_dom).find('.msg_container').html(mensagem.message);
                        $('.msg_card_body').append($(mensagem_recebida_dom).find('body').html());
                        sessionStorage.setItem('ultima_mensagem',mensagem.created_at); //ultima mensagem recebida
                    }else{
                        $(mensagem_enviada_dom).find('.msg_container_send').html(mensagem.message);
                        $('.msg_card_body').append($(mensagem_enviada_dom).find('body').html());
                    }
                }
            },
            error: (e)=>{
                console.log(e);
            }
    
        });
    })

});