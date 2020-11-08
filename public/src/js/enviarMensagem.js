$(document).ready(()=>{
    $('#btn_enviar').on('click',()=>{
        //recupera a mensagem digitada
        let mensagem = $("#mensagem").val();
        $("#mensagem").val('');
        let chat = sessionStorage.getItem('chat_selecionado'); //recupera o id do chat selecionado
        if(chat == ''){
            chat = 0;
        }  
        //manda a mensagem para o backend salvar no banco de dados
        $.ajax({
            type: 'POST',
            url:`enviar/${chat}`,
            data:`mensagem=${mensagem}`,
            dataType:'json',
            success: (e)=>{
                //modifica o total de mensagens
                let atual = $('#total_mensagem').html();
                atual = parseInt(atual);
                $('#total_mensagem').html(atual +1);
               //recupera e renderiza a nova mensagem no chat
               let mensagem_enviada_html = $("#mensagem_enviada").html();
               let mensagem_enviada_dom = new DOMParser().parseFromString(mensagem_enviada_html,'text/html');
               $(mensagem_enviada_dom).find('.msg_container_send').html(e.message);
               $('.msg_card_body').append($(mensagem_enviada_dom).find('body').html());
            },
            error: (e)=>{
                console.log(e);
            }
    
        });
    })
})