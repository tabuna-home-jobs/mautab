<?php

return [

    //Идентификатор (номер кошелька) интернет-магазина, полученный при регистрации.
    'sellerPurse' => '',
    //Секретный ключ
    'secretKey' => '',
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
