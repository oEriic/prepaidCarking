<!--//Citation: https://www.braemoor.co.uk/software/creditcard.shtml-->
<html>

<head>
    <title>Credit Card</title>
    <link rel="stylesheet" href="cc.css">
    <script src="creditCard.js"></script>
</head>

<body>
    
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
                <label for="date">EX Date</label>
                
                <select tabindex="12" id="exMonth" style="margin-left: 10px;">
                    <option>01-Jan</option>
                    <option>02-Feb</option>
                    <option>03-Mar</option>
                    <option>04-Apr</option>
                    <option>05-May</option>
                    <option>06-Jun</option>
                    <option>07-Jul</option>
                    <option>08-Aug</option>
                    <option>09-Sep</option>
                    <option>10-Oct</option>
                    <option>11-Nov</option>
                    <option>12-Dec</option>
                </select>
                <select tabindex="4" id="exDate" style="margin-left: 10px;">
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                </select>

                <select tabindex="11" id="CardType" style="margin-left: 10px;">
                    <option value="AmEx">American Express</option>
                    <option value="Discover">Discover</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Visa">Visa</option>
                </select>
                <input type="text" id="CardNumber" maxlength="24" size="24" style="margin-left: 10px;"> 
                <button id="mybutton" type="button" onclick="testCreditCard();" style="margin-left: 10px; color: #f00;">
                Check</button>
            </fieldset>
    </div>

</body>

</html>