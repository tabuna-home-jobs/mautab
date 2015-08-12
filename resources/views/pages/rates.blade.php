@extends('app')

@section('content')

    <div class="page-head">
        <h1>Тарифы MauTab</h1>
        <span>Выберите подходящий для Вас тариф</span>
    </div>
    <div class="page-content">
        <table class="table">
            <thead>
            <tr>
                <th>
                    Детали
                </th>
                <th>
                    Базовый
                </th>
                <th>
                    Стандартный
                </th>
                <th>
                    Расширенный
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    Цена
                </td>
                <td>
                    <span class="fa fa-rub"></span>
                    <span class="big-count">120</span>
                    <sup>00</sup>
                    <sub>год</sub>
                </td>
                <td>
                    <span class="fa fa-rub"></span>
                    <span class="big-count">180</span>
                    <sup>00</sup>
                    <sub>год</sub>
                </td>
                <td>
                    <span class="fa fa-rub"></span>
                    <span class="big-count">399</span>
                    <sup>99</sup>
                    <sub>год</sub>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
