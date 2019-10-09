/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).on('load', function () {
    //alert('teste')
    // GET prova
    $('#getprova').on('click', function (e) {
        e.preventDefault();
        let requrl = $(this).attr('href');
        let dados = $('form').serialize();

        $.ajax({
            type: "GET",
            timeout: 15000,
            url: 'http://senacsmo.educacao.ws/paulodir/rest/Prova/index',
            headers: {
                'X-API-KEY': 's1e2n3a4c5!'
            },
            dataType: 'json',
            success: function (retorno) {
                //$('.content').html(retorno);

                //para post

                $.each(retorno, function (posicao, prova) {
                    $('.content').append('----------<br>');
                    $('.content').append(prova.id + '<br>');
                    $('.content').append(prova.nome + '<br>');
                    $('.content').append(prova.descricao + '<br>');
                });
            }
        });

    });
    
    $('#postprova').on('click', function (e) {
        e.preventDefault();
        let requrl = $('form').attr('action');
        let dados = $('form').serialize();

        $.ajax({
            type: "POST",
            data: dados,
            timeout: 15000,
            url: requrl,
            headers: {
                'X-API-KEY': 's1e2n3a4c5!'
            },
            dataType: 'json',
            success: function (retorno) {
               console.log(retorno);
            }
        });

    });
   
    $('#putprova').on('click', function (e) {
        e.preventDefault();
        let requrl = $(this).attr('action');
        let dados = $('form').serialize();

        $.ajax({
            type: "POST",
            data: dados,
            timeout: 15000,
            url: 'http://senacsmo.educacao.ws/paulodir/rest/Prova/index',
            headers: {
                'X-API-KEY': 's1e2n3a4c5!'
            },
            dataType: 'json',
            success: function (retorno) {
                //$('.content').html(retorno);

                //para post 

                $.each(retorno, function (posicao, prova) {
                    $('.content').append('----------<br>');
                    $('.content').append(prova.id + '<br>');
                    $('.content').append(prova.nome + '<br>');
                    $('.content').append(prova.descricao + '<br>');
                });
            }
        });

    });
});

