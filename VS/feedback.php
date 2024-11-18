<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - 𝕮𝖊𝖒𝖊𝖓𝖙𝕮𝖔𝖗𝖕 €</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            height: 100vh;
            background: url('background_image.png.jpg') no-repeat center center fixed;
            background-size: cover;
            overflow: hidden;
        }
        .main-container {
            position: relative;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .content-box {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
        }
        .section-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            padding: 10px;
            font-size: 16px;
        }
        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
        }
        .submit-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="main-container">
    <div class="overlay"></div>
    <div class="content-box">
        <h3 class="section-title">Feedback Form</h3>
        <form action="submit_feedback.php" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Your Phone" required>
            </div>
            <div class="form-group">
                <textarea name="feedback" class="form-control" placeholder="Your Feedback" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit Feedback</button>
        </form>
    </div>
</div>

</body>
</html>
