<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-P8WEWF0k0gBEl7bEjddk/CCtSapXoXysqAB/m6c53L+kk1bL6gk/A3gawgMgPEN4" crossorigin="anonymous">

    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-gSK6IBe8G4HD8m0F23/F1B/9BkIlthSZcGv9U88d8k8H/Hvt4GvYf/NjuyLHDk69" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-TEqlRK6g4Lh2dPjjJnQ6vzLZCm6THU05rzIOZCE3vliB8vMIayte5pALB+GTC8tn" crossorigin="anonymous"></script>

    <title>{{ $user->family_name }} submitted their profile</title>
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
                <p>Dear Admin profile has been received for approval</p>

                <p>Here is the information submitted:</p>

                <ul>
                    <li><strong>Name:</strong> {{ $user->family_name }}</li>
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Status:</strong> {{ $user->status }}</li>
                    <li><strong>Phone:</strong> {{ $user->phone_number }}</li>
                    <li><strong>Address:</strong> {{ $user->adddress }}</li>
                    <li><strong>Driver Type:</strong> {{ $user->user_type }}</li>
                    <li><strong>City:</strong> {{ $user->city }}</li>
                    <li><strong>Postal Code:</strong> {{ $user->postal_code }}</li>
                    <li><strong>Place Of Birth:</strong> {{ $user->place_of_birth }}</li>
                </ul>

                <p>Attached Files:</p>
                <ul>
                    <li><strong>Photo:</strong> @if($user->photo) <a href="{{ asset($user->photo) }}" target="_blank">View</a> @endif</li>
                    <li><strong>ID Card:</strong> @if($user->id_card) <a href="{{ asset($user->id_card) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Mission Document:</strong> @if($user->mission_document) <a href="{{ asset($user->mission_document) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Driving License:</strong> @if($user->driving_license) <a href="{{ asset($user->driving_license) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Company Registeration:</strong> @if($user->company_registeration) <a href="{{ asset($user->company_registeration) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Professional Liabilities:</strong> @if($user->professional_liabilities) <a href="{{ asset($user->professional_liabilities) }}" target="_blank">View</a> @endif</li>
                    <li><strong>CarMov Insurance:</strong> @if($user->carmov_insurance) <a href="{{ asset($user->carmov_insurance) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Trade Plates:</strong> @if($user->trade_plates) <a href="{{ asset($user->trade_plates) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Bank Details:</strong> @if($user->bank_details) <a href="{{ asset($user->bank_details) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Signed Contract:</strong> @if($user->signed_contract) <a href="{{ asset($user->signed_contract) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Transport Capacity:</strong> @if($user->transport_capacity) <a href="{{ asset($user->transport_capacity) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Transport Insurance:</strong> @if($user->transport_insurance) <a href="{{ asset($user->transport_insurance) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Vehicle Carrier Registration:</strong> @if($user->vehicle_carrier_reg) <a href="{{ asset($user->vehicle_carrier_reg) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Income Contribution:</strong> @if($user->income_contribution) <a href="{{ asset($user->income_contribution) }}" target="_blank">View</a> @endif</li>
                    <li><strong>Vehicle Condition Test:</strong> @if($user->vehicle_condition_test) <a href="{{ asset($user->vehicle_condition_test) }}" target="_blank">View</a> @endif</li>
                </ul>
                <div style="text-align: center; padding: 10px;">
                    <a href="{{ route('profile.pending.details', ['id' => $user->id]) }}" class="btn btn-warning">View Profile</a>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
