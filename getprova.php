<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//realizamos uma requisicao de cURL para o webservise
$url="http://senacsmo.educacao.ws/paulodir/rest/Prova/index";

//abre aconexao
$curl= curl_init($url);

//seta que aguardaremos um retorno
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//seta o cabeçalho
curl_setopt($curl,CURLOPT_HTTPHEADER, array(
    'X-API-KEY: s1e2n3a4c5!'
));

//executa a requisicao
$json= curl_exec($curl);

echo $json;




