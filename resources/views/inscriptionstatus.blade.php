<!DOCTYPE html>
<html>
<head>
    <title>Inscription Status Update</title>
</head>
<body>
    <h1>Inscription Status Update</h1>
    <p>Hello {{ $inscription->first_name }},</p>
    <p>Your inscription has been {{ $status }}.</p>
    @if($status == 'accepted')
        <p>Congratulations! You have been accepted.</p>
    @else
        <p>We regret to inform you that your inscription has been rejected.</p>
    @endif
    
</body>
</html>

