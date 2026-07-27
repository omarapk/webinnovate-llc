<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap CDN Test</title>
    
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary mb-4">
                    <i class="fas fa-check-circle text-success"></i> Bootstrap CDN Test
                </h1>
                
                <div class="alert alert-success">
                    <h4 class="alert-heading">
                        <i class="fas fa-thumbs-up"></i> Success!
                    </h4>
                    <p>If you can see this styled content, Bootstrap CDN is working perfectly!</p>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-star text-warning"></i> Test Card
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">This is a test card to verify Bootstrap styling.</p>
                                <button class="btn btn-primary">
                                    <i class="fas fa-rocket"></i> Primary Button
                                </button>
                                <button class="btn btn-secondary">
                                    <i class="fas fa-cog"></i> Secondary Button
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-info-circle text-info"></i> Features
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="fas fa-check text-success"></i> Bootstrap 5.3.2
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check text-success"></i> Font Awesome Icons
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check text-success"></i> Responsive Design
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check text-success"></i> CDN Loading
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="/" class="btn btn-outline-primary">
                        <i class="fas fa-home"></i> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery JS (CDN) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
            console.log('Bootstrap CDN Test Page Loaded');
            console.log('jQuery version:', $.fn.jquery);
            console.log('Bootstrap version:', typeof bootstrap !== 'undefined' ? 'Loaded' : 'Not loaded');
        });
    </script>
</body>
</html>

