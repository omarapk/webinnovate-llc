<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to WebInnovate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .welcome-container {
            text-align: center;
            padding: 2rem;
        }
        
        .welcome-title {
            font-size: 4rem;
            font-weight: bold;
            margin: 0 0 2rem 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }
        
        .like-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            margin-bottom: 2rem;
            animation: slideInFromBottom 1.5s ease-out 0.5s both;
            opacity: 0;
            transform: translateY(50px);
        }
        
        .like-button:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
        
        .like-button:active {
            transform: translateY(0);
        }
        
        .arrow-icon {
            font-size: 1.3rem;
            color: white;
            animation: bounce 2s ease-in-out infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-5px);
            }
            60% {
                transform: translateY(-3px);
            }
        }
        
        @keyframes slideInFromBottom {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 768px) {
            .welcome-title {
                font-size: 2.5rem;
            }
            .like-button {
                font-size: 1rem;
                padding: 0.6rem 1.2rem;
            }
        }
        
        @media (max-width: 480px) {
            .welcome-title {
                font-size: 2rem;
            }
            .like-button {
                font-size: 0.9rem;
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-title">Welcome to WebInnovate</h1>
        <a href="https://webinnovate.dev/leadform" class="like-button" target="_blank">
            Lead Form
            <i class="fa-solid fa-arrow-up-right-from-square arrow-icon"></i>
        </a>
    </div>
</body>
</html>
