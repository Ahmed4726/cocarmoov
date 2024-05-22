<h1>Delivery Approved</h1>
<p>Dear {{ $driver->family_name }},</p>
<p>Your delivery for mission ID {{ $mission->id }} has been approved. Funds are now available for withdrawal.</p>
<p>Thank you for your service.</p>
<!DOCTYPE html>
<html>
<head>
    <title>Delivery Approved</title>
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
                <h2>Car Delivery has been Approved</h2>
                <p>Dear {{ $driver->family_name }},</p>
                <p>Your delivery for mission ID {{ $mission->id }} has been approved. Funds are now available for withdrawal.</p>
                <p>Thank you for your service.</p>
            </td>
        </tr>
    </table>
</body>
</html>
