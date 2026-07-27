<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Test</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">Bootstrap Test Page</h1>
                <p class="lead">If you can see this styled text, Bootstrap is working!</p>
                
                <div class="alert alert-success">
                    <strong>Success!</strong> Bootstrap CSS is loading correctly.
                </div>
                
                <button class="btn btn-primary">Primary Button</button>
                <button class="btn btn-secondary">Secondary Button</button>
                
                <div class="card mt-3">
                    <div class="card-header">
                        Test Card
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">This is a test card to verify Bootstrap styling.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
