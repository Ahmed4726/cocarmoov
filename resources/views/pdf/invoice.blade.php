<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice #{{ $invoice->id }}</title>

    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
        }

        .invoice-header {
            background-color: #f5f5f5;
            padding: 10px;
        }

        .invoice-details {
            margin-top: 20px;
        }

        .invoice-details td {
            padding: 5px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .invoice-table th, .invoice-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .invoice-footer {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('/images/wallet/footer-2.png') }}" alt="" class="img-fluid" width="350" height="100">
    </div>
    <div class="invoice-header">
        <h1>Invoice #{{ $invoice->id }}</h1>
    </div>

    <div class="invoice-details">
        <table>
            <tr>
                <td><strong>Pickup Address:</strong></td>
                <td>{{ $invoice->pickup_address }}</td>
            </tr>
            <tr>
                <td><strong>Last Name:</strong></td>
                <td>{{ $invoice->last_name }}</td>
            </tr>
            <tr>
                <td><strong>Family Name:</strong></td>
                <td>{{ $invoice->family_name }}</td>
            </tr>
            <tr>
                <td><strong>Amount:</strong></td>
                <td>{{ $invoice->amount }}</td>
            </tr>
            <tr>
                <td><strong>Status:</strong></td>
                <td>{{ $invoice->status }}</td>
            </tr>
        </table>
    </div>

    <div class="invoice-table">
        <table>
            <thead>
                <th scope="col">Item</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
            </thead>
            <tbody>
                <!-- Add your invoice line items here -->
                <tr>
                    <td>Item 1</td>
                    <td>Description 1</td>
                    <td>2</td>
                    <td>$50.00</td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>Description 2</td>
                    <td>1</td>
                    <td>$75.00</td>
                    <td>$75.00</td>
                </tr>
                <!-- Adjust the data based on your invoice structure -->
            </tbody>
        </table>
    </div>

    <div class="invoice-footer">
        <p>Total Amount: ${{ $invoice->amount }}</p>
    </div>
</body>
</html>
