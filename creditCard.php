<html>
    <head>
        <title>Credit Card</title>
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
<hr /> Card Number:
<select tabindex="11" id="CardType" style="margin-left: 10px;">
  <option value="AmEx">American Express</option>
  <option value="Discover">Discover</option>
  <option value="MasterCard">MasterCard</option>
  <option value="Visa">Visa</option>
</select> 
<input type="text" id="CardNumber" maxlength="24" size="24" style="margin-left: 10px;"> <button id="mybutton" type="button" onclick="testCreditCard();" style="margin-left: 10px; color: #f00;">Check</button>

    </body>
</html>