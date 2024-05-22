<!DOCTYPE html>
<html>
<head>
    <title>Pickup Confirmed</title>
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
                <h2>Pickup Confirmed!</h2>
                <p>Your successfully picked up a car for move.</p>
                <p>Details:</p>
                <ul>
                    <li><strong>Make and Model:</strong> {{ $car->make_and_model }}</li>
                    <li><strong>Delivery time:</strong> {{ $pick_up->delivery_date_time }}</li>
                    <li><strong>Pick Up front photo:</strong> {{ $pick_up->front_photos }}</li>
                    <li><strong>Pick Up back photo:</strong> {{ $pick_up->back_photos }}</li>
                    <li><strong>Package Amount:</strong> {{ $pick_up->amount }}</li>
                </ul>
                <p>Thank you for using our service.</p>
            </td>
        </tr>
    </table>
</body>
</html>
