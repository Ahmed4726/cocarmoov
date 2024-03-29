<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelation Notification</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- Header Section -->
        <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 20px 0;">
                <img src="{{ asset('images/wallet/footer-2.png') }}" width="300" alt="Header Image">
            </td>
        </tr>
        <!-- Content Section -->
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px;">
                <h2 style="margin-top: 0; font-size: 24px; color: #333;">Cancelation Notification</h2>
                <p style="font-size: 16px; color: #555;">Dear {{ $driverName }},</p>
                <p style="font-size: 16px; color: #555;">This is to inform you that the ride associated with car "{{ $carMakeAndModel }}" has been canceled.</p>
                {{-- <p style="font-size: 16px; color: #555;">You will receive a refund for this cancelation.</p> --}}
                <p style="font-size: 16px; color: #555;">Thank you.</p>
            </td>
        </tr>
    </table>
</body>
</html>
