<!DOCTYPE html>
<html>
<head>
    <title>Inscription Status Update</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: auto;
            animation: fadeIn 2s;
        }
        .header {
            background-color: rgba(0, 123, 255, 0.5);
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            color: white;
        }
        .content {
            text-align: center;
        }
        .content h1 {
            font-size: 1.5em;
        }
        .content p {
            font-size: 1.1em;
        }
        .dear {
            color: #007bff; 
        }
        .status {
            font-weight: bold;
        }
        .status.accepted {
            color: #28a745; 
        }
        .status.rejected {
            color: #dc3545; 
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container border border-primary">
        <div class="header">
            <h1>Inscription Status Update</h1>
        </div>
        <div class="content">
            <h1><span class="dear">Dear</span> {{ $inscription->first_name }} {{ $inscription->last_name }},</h1>
            <p>Your inscription status has been updated to: 
                <strong class="status {{ $status == 'accepted' ? 'accepted' : 'rejected' }}">
                    {{ ucfirst($status) }}
                </strong>.
            </p>
            <p>Thank you for your patience.</p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
