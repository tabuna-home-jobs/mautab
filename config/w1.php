<?php

return [

    //Номер магазина
    'sellerPurse' => '122418262209',
    //Секретный ключ
    'secretKey' => '436d6b6a356850344e686e7c6a413737796e7b4c734e4b707b385d',
    //Метод проверки ключа
    'signatureMethod' => 'sha1',


    // Страницы на которые будут отправлены ответы
    'successLink' => '',
    'failLink' => '',


    // Разрешить платёжные системы (По умолчанию все возможные)
    'paymentTypeList' => [
        /*
            'LiqPayMoneyRUB',
            'CreditCardRUB',
            'BankTransferMDL',
            'AlfaclickRUB',
            'RussianPostRUB',
            'SvyaznoyRUB',
            'CashTerminalBYR',
            'YandexMoneyRUB',
        */
    ],


];
