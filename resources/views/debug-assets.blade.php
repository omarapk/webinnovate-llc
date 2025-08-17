<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Debug</title>
</head>
<body>
    <h1>Asset Debug Page</h1>
    
    <h2>Asset URLs:</h2>
    <ul>
        <li>Bootstrap CSS: <a href="{{ $bootstrapUrl }}" target="_blank">{{ $bootstrapUrl }}</a></li>
        <li>Styles CSS: <a href="{{ $stylesUrl }}" target="_blank">{{ $stylesUrl }}</a></li>
    </ul>
    
    <h2>Test with Bootstrap:</h2>
    <link rel="stylesheet" href="{{ $bootstrapUrl }}">
    <link rel="stylesheet" href="{{ $stylesUrl }}">
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">Bootstrap Test</h1>
                <p class="lead">If this is styled, Bootstrap is working!</p>
                
                <div class="alert alert-success">
                    <strong>Success!</strong> Bootstrap CSS is loading correctly.
                </div>
                
                <button class="btn btn-primary">Primary Button</button>
                <button class="btn btn-secondary">Secondary Button</button>
            </div>
        </div>
    </div>
    
    <script>
        // Check if CSS files are loaded
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('link[rel="stylesheet"]');
            console.log('CSS links found:', links.length);
            
            links.forEach((link, index) => {
                console.log(`CSS ${index + 1}:`, link.href);
                
                link.addEventListener('load', function() {
                    console.log('CSS loaded successfully:', this.href);
                });
                
                link.addEventListener('error', function() {
                    console.error('CSS failed to load:', this.href);
                });
            });
        });
    </script>
</body>
</html>
