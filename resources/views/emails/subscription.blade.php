<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
</head>

<body>
    <p>Name: {{ $details['name'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Phone: {{ $details['phone'] }}</p>
    @if(isset($details['dateTime']))
    <p>Date & Time: {{ $details['dateTime'] }}</p>
    @endif
    <p>Thanks</p>
</body>

</html>