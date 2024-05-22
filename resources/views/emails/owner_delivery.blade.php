<!DOCTYPE html>
<html>
<head>
    <title>Your Car Has Been Delivered</title>
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
                <h2>Your Car Has Been Delivered</h2>
                <p>Your car has been delivered to it's destination.</p>
                <p>Check Images and confirm delivery.</p>
                <p>Details:</p>
                <ul>
                    <li><strong>Make and Model:</strong> {{ $pick_up_car->make_and_model }}</li>
                    <li><strong>Delivery time:</strong> {{ $pick_up_car->delivery_date_time }}</li>
                    <li><strong>Delivery front photo:</strong> {{ $pick_up_car->front_photos }}</li>
                    <li><strong>Delivery back photo:</strong> {{ $pick_up_car->back_photos }}</li>
                    <li><strong>Package Amount:</strong> {{ $pick_up_car->amount }}</li>
                </ul>
                <p>Thank you for using our service.</p>
                <a href="/confirmDelivery/{{$pick_up_car->car_id}}" class="btn btn-warning">Confirm Delivery</a>
            </td>
        </tr>
    </table>
</body>
</html>
{{-- <h1>Your Car Has Been Delivered</h1>
<p>Your car has been delivered. Details:</p>
<ul>
    <li>Mission ID: {{ $pick_up_car->mission_id }}</li>
    <li>Car ID: {{ $pick_up_car->car_id }}</li>
    <!-- Add more details as needed -->
</ul> --}}
