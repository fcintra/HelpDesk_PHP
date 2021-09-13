function cadastrarTicket() {
        let titulo = document.getElementById('titulo')
        let categoria = document.getElementById('categoria')
        let descricao = document.getElementById('descricao')
        

        if (titulo != undefined || categoria != '' || descricao != null) {
       
           

            document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
            document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso'
            document.getElementById('modal_titulo_div').className = 'modal-header text-success'
            document.getElementById('modal_btn').innerHTML = 'Voltar'
            document.getElementById('modal_btn').className = 'btn btn-success'



            //limpando os campos
            titulo.value = ''
            categoria.value = ''
            descricao.value = ''


            //Dialogo de sucesso
            $('#modalRegistraTicket').modal('show')

        } else {



            document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
            document.getElementById('modal_titulo').innerHTML = 'Erro na gravação'
            document.getElementById('modal_conteudo').innerHTML = 'Existem campos obrigatórios que não foram preenchidos'
            document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
            document.getElementById('modal_btn').className = 'btn btn-danger'


            //Dialogo de erro
            $('#modalRegistraTicket').modal('show')
        }



    }



