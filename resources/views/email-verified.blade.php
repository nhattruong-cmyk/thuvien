
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Minh Email</title>
    <!-- Link đến Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .message-box {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .message-box h4 {
            color: #28a745;
            margin-bottom: 20px;
        }
        .message-box p {
            font-size: 16px;
        }
        .message-box a {
            color: #007bff;
            text-decoration: none;
        }
        .message-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h4>Email của bạn đã được xác minh!</h4>
        <p>Tiếp tục trở về <a href="{{ route('home') }}" onclick="event.preventDefault(); window.location.href='{{ route('home') }}';">Trang Chủ</a>.</p>
    </div>
    <!-- Link đến Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

