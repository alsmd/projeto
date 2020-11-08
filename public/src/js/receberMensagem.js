$(document).ready(()=>{
    $('.contacts').on('click','li',(e)=>{
        monitorarMensagem();

    })
    function monitorarMensagem(){
       setInterval(function(){
        let id = sessionStorage.getItem('usuario_selecionado') //id do usuario selecionado
        let chat = sessionStorage.getItem('chat_selecionado') //id do chat selecionado
        let time = sessionStorage.getItem('ultima_mensagem') //data e hora da ultima mensagem
        $.ajax({
            type: 'GET',
            url:`receber/${chat}/${id}/${time}`,
            dataType:'json',

            success: (e)=>{
               //recupera e renderiza a nova mensagem no chat
               if(e.length != 0 ){
                   let mensagem = e[0];
                   sessionStorage.setItem('ultima_mensagem',mensagem.created_at);
                   let mensagem_recebida_html = $("#mensagem_recebida").html();
                   let mensagem_recebida_dom = new DOMParser().parseFromString(mensagem_recebida_html,'text/html');
                   $(mensagem_recebida_dom).find('.msg_container').html(mensagem.message);
                   $('.msg_card_body').append($(mensagem_recebida_dom).find('body').html());
                   console.log(mensagem.message);
               }
            },
            error: (e)=>{
                console.log(e);
            }
    
        });
       },1000)
    }

});

