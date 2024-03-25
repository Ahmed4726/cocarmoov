<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Status Update</title>
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
            <p>Hello {{ $profile->family_name }},</p>

            <p>Your profile status has been updated to {{ $profile->status }}.</p>

                @if($profile->status === 'Pending')
                    <p>Please read Note and resubmit your profile:</p>
                @elseif($profile->status === 'Verified')
                    <p> <strong>Congratulations! </strong>Your profile has been verified.</p>
                @endif

                <p>Note: {{ $note }}</p>

                <p>Thank you!</p>
                </td>
            </tr>
        </table>
</body>
</html>
