<!DOCTYPE html>
<html>
<head>
    <title>Your car has been Booked</title>
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
                <p>Your car has been successfully booked for move.</p>
                <p>Details:</p>
                <ul>
                    <li><strong>Selected Package:</strong> {{ $listing->selected_package }}</li>
                    <li><strong>Package Amount:</strong> {{ $listing->package_amount }}</li>
                    <li><strong>Make and Model:</strong> {{ $listing->make_and_model }}</li>
                    <li><strong>Number Plate:</strong> {{ $listing->number_plate }}</li>
                    <li><strong>From Address:</strong> {{ $listing->from_address }}</li>
                    <li><strong>To Address:</strong> {{ $listing->to_address }}</li>
                    <li><strong>Car Type:</strong> {{ $listing->car_type }}</li>
                    <li><strong>Car Condition:</strong> {{ $listing->car_condition }}</li>
                    <li><strong>Seating Capacity:</strong> {{ $listing->seating_capacity }}</li>
                    <li><strong>Gear Box:</strong> {{ $listing->gear_box }}</li>
                    <li><strong>Car Move Departure Date From:</strong> {{ $listing->car_move_departure_date_from }}</li>
                    <li><strong>Car Move Departure Date To:</strong> {{ $listing->car_move_departure_date_to }}</li>
                </ul>
                <p>Here are details of Your driver</p>
                <ul>
                    <li><strong>Name :</strong> {{ $driver->family_name }} </li>
                    <li><strong>Phone #</strong> {{ $driver->phone_number }} </li>
                    <li><strong>Email :</strong> {{ $driver->email }} </li>
                    <li><strong>PickUp Date and Time:</strong> {{ $mission->pickup_date_time }} </li>
                    <li><strong>Delivery Date and Time:</strong> {{ $mission->delivery_date_time }} </li>
                </ul>
                <p><strong>Amount also deducted from your account.</strong></p>
                <p>Invoice is attached below.</p>
                <p>Thank you for using our service.</p>
            </td>
        </tr>
    </table>
</body>
</html>
