<html>
<head>
    <style>
        .payform-tinkoff {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin: 2px auto;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 250px;
        }
        .payform-tinkoff-row {
            margin: 2px;
            border-radius: 4px;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            border: 1px solid #DFE3F3;
            padding: 15px;
            outline: none;
            background-color: #DFE3F3;
            font-size: 15px;
        }
        .payform-tinkoff-row:focus {
            background-color: #FFFFFF;
            border: 1px solid #616871;
            border-radius: 4px;
        }
        .payform-tinkoff-btn {
            background-color: #FBC520;
            border: 1px solid #FBC520;
            color: #3C2C0B;
        }
        .payform-tinkoff-btn:hover {
            background-color: #FAB619;
            border: 1px solid #FAB619;
        }
    </style>
    <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
</head>
<body>
<form class="payform-tinkoff" name="payform-tinkoff" id="payform-tinkoff">
    <input class="payform-tinkoff-row" type="hidden" name="terminalkey" value="TinkoffBankTest">
    <input class="payform-tinkoff-row" type="hidden" name="frame" value="false">
    <input class="payform-tinkoff-row" type="hidden" name="language" value="ru">
    <input class="payform-tinkoff-row" type="hidden" name="receipt" value="">
    <input class="payform-tinkoff-row" type="text" placeholder="Сумма заказа" name="amount" value="{{$amount ?? ''}}" required>
    <input class="payform-tinkoff-row" type="hidden" placeholder="Номер заказа" name="order" value="{{$order ?? ''}}">
    <input class="payform-tinkoff-row" type="text" placeholder="Описание заказа" name="description" value="{{$description ?? ''}}">
    <input class="payform-tinkoff-row" type="text" placeholder="ФИО плательщика" name="name" value="{{$name ?? ''}}">
    <input class="payform-tinkoff-row" type="email" placeholder="E-mail" name="email" value="{{$email ?? ''}}">
    <input class="payform-tinkoff-row" type="tel" placeholder="Контактный телефон" name="phone" value="{{$phone ?? ''}}">
    <input class="payform-tinkoff-row payform-tinkoff-btn" type="submit" value="Оплатить">
</form>
</body>
</html>
