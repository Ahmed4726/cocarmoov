<!DOCTYPE html>
<html>
<head>
    <title>Good News! You receive an offer.</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 20px 0;">
                <img src="{{ asset('images/wallet/footer-2.png') }}" width="300" alt="Header Image">
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px;">
                <h2>Almost ready to go!</h2>
                <p>You receive an offer.</p>
                <p>Here are the Details:</p>
                <ul>
                    <li><strong>Driver: {{ $driver }}</strong></li>
                    <li><strong>Offer Amount: {{ $offer_amount }}</strong></li>
                    <li><strong>Pick-Up Time: {{ $pick_up_time }}</strong></li>
                    <li><strong>Delivery Time: {{ $delivery_time }}</strong></li>
                </ul>

                <p>Thank you for using our service.</p>
            </td>
        </tr>
    </table>
</body>
</html>
