<?php

return [

    //Идентификатор (номер кошелька) интернет-магазина, полученный при регистрации.
    'sellerPurse' => '122418262209',
    //Секретный ключ
    'secretKey' => '436d6b6a356850344e686e7c6a413737796e7b4c734e4b707b385d',
    //Метод проверки ключа
    'signatureMethod' => 'sha1',
    // Идентификатор валюты (ISO 4217):
    'currencyCode' => 643,
    /*
     * Адреса (URL) страниц интернет-магазина,
     * на которые будет отправлен покупатель после успешной или неуспешной оплаты.
     */

    'successLink' => 'http://mautab.com/api/payments',
    'failLink' => 'http://mautab.com/api/payments',
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
