<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <!-- Add your PDF design here, which may include HTML and CSS for styling -->
    
    <!-- Example: Display a button to generate the PDF -->
    <a href="{{ route('generate-pdf') }}" class="btn btn-primary">Generate PDF</a>
</body>
</html>
