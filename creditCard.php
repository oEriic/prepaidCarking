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
                <label for="stAddress">Street Address: </label>
                <input type="text" name="stAddress" id="stAddress" maxlength="50" />
                </br>
                <label for="city">City: </label>
                <input type="text" name="city" id="stAddress" maxlength="20" />
                <label for="state">State: </label>
                <select id="state" style="margin-left: 10px;">
                    <option>AL</option>
                    <option>AK</option>
                    <option>AZ</option>
                    <option>AR</option>
                    <option>CA</option>
                    <option>CO</option>
                    <option>CT</option>
                    <option>DE</option>
                    <option>FL</option>
                    <option>GA</option>
                    <option>HI</option>
                    <option>ID</option>
                    <option>IL</option>
                    <option>IN</option>
                    <option>IA</option>
                    <option>KS</option>
                    <option>KY</option>
                    <option>LA</option>
                    <option>ME</option>
                    <option>MD</option>
                    <option>MA</option>
                    <option>MI</option>
                    <option>MN</option>
                    <option>MS</option>
                    <option>MO</option>
                    <option>MT</option>
                    <option>NE</option>
                    <option>NV</option>
                    <option>NH</option>
                    <option>NJ</option>
                    <option>NM</option>
                    <option>NY</option>
                    <option>NC</option>
                    <option>ND</option>
                    <option>OH</option>
                    <option>OK</option>
                    <option>OR</option>
                    <option>PA</option>
                    <option>RI</option>
                    <option>SC</option>
                    <option>SD</option>
                    <option>TN</option>
                    <option>TX</option>
                    <option>UT</option>
                    <option>VT</option>
                    <option>VA</option>
                    <option>WA</option>
                    <option>WV</option>
                    <option>WI</option>
                    <option>WY</option>
                </select>
                <label for="zip">ZIP Code: </label>
                <input type="text" name="ZIP" id="zipCode" maxlength="5" />
                </br>
                <label for="phone">Phone: </label>
                <input type="text" name="phone" id="phone" maxlength="10" />
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