<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Name: {{ $details['name'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Phone: {{ $details['phone'] }}</p>
    @if(isset($details['description']))
    <p>Description: {{ $details['description'] }}</p>
    @endif
    <p>Thanks</p>
</body>
</html>