<html>

<head>
    <title>Credit Card</title>
    <link rel="stylesheet" href="cc.css">
    <script src="creditCard.js"></script>
</head>

<body>
    <table>
        <tr>
            <td style="padding-right: 30px;">American Express</td>
            <td>3400 0000 0000 009</td>
        </tr>
        <tr>
            <td>Discover</td>
            <td>6011 0000 0000 0004</td>
        </tr>
        <tr>
            <td>MasterCard</td>
            <td>5500 0000 0000 0004</td>
        </tr>
        <tr>
            <td>Visa</td>
            <td>4111 1111 1111 1111</td>
        </tr>
    </table>
    <hr />
    <div class="cardInfo">
        <form action="index.html" method="POST" id="creditCard">
            <fieldset>
                <legend>
                    <h2>Card Info</h2>
                </legend>
                <label for="name">Name: </label>
                <input type="text" name="userName" id="name" maxlength="16" />
                </br>
            
                <label for="secCode">Security Code</label>
                <input type="password" name="code" id="secCode" maxlength="4">
                </br>
                <select tabindex="11" id="CardType" style="margin-left: 10px;">
                    <option value="AmEx">American Express</option>
                    <option value="Discover">Discover</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Visa">Visa</option>
                </select>
                <input type="text" id="CardNumber" maxlength="24" size="24" style="margin-left: 10px;"> <button id="mybutton" type="button" onclick="testCreditCard();" style="margin-left: 10px; color: #f00;">Check</button>
            </fieldset>
    </div>

</body>

</html>