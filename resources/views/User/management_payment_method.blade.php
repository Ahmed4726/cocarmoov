@extends('admin.admin_layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Select2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <style>
        .credit-card {
            background-color: #fff;
            color: #555;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin: 10px;
            display: inline-block;
            transition: transform 0.3s;
        }

        .credit-card:hover {
            transform: scale(1.05);
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-number {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .card-info {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .brand-logo {
            max-width: 50px;
            margin-right: 10px;
        }

        .delete-btn {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br>
            <div class="container">
                <div class="row mx-5 mb-5">
                    <div class="col-md-12">
                        @if (count($cards) > 0)
                            <div class="card-columns">
                                @foreach ($cards as $card)
                                    <div class="credit-card">
                                        <div class="card-header">{{ $card['name'] }} Test Card</div>
                                        <div class="card-number">**** **** **** {{ $card['last4'] }}</div>
                                        <div class="card-info">
                                            <img class="brand-logo" src="{{ asset('dist/img/credit/' . $card['brand'] . '.png') }}" alt="{{ $card['brand'] }}">
                                            {{-- {{ ucfirst($card['brand']) }} --}}
                                        </div>
                                        <form method="post" action="{{ route('delete-card', ['cardId' => $card['id']]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-btn">Delete Card</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No cards saved.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (jQuery is required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</body>
</html>

@endsection
