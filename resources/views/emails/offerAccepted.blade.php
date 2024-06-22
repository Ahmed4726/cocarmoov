<!DOCTYPE html>
<html>
<head>
    <title>Your Offer has been Accepted</title>
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
                <h2>Congratulations!</h2>
                <p>Dear {{ $driver->family_name }},</p>
                <p>We are pleased to inform you that your offer has been accepted.</p>
                <p><strong>Car Details:</strong></p>
                <ul>
                    <li><strong>Selected Package:</strong> {{ $car->selected_package }}</li>
                    <li><strong>Package Amount:</strong> {{ $proposal->offer_amount }}</li>
                    <li><strong>Make and Model:</strong> {{ $car->make_and_model }}</li>
                    <li><strong>Number Plate:</strong> {{ $car->number_plate }}</li>
                    <li><strong>From Address:</strong> {{ $car->from_address }}</li>
                    <li><strong>Car Type:</strong> {{ $car->car_type }}</li>
                    <li><strong>Car Condition:</strong> {{ $car->car_condition }}</li>
                    <li><strong>Seating Capacity:</strong> {{ $car->seating_capacity }}</li>
                    <li><strong>Gear Box:</strong> {{ $car->gear_box }}</li>
                </ul>
                <p>Thank you for using our service.</p>
            </td>
        </tr>
    </table>
</body>
</html>
