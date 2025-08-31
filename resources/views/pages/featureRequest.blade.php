<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Feature Request - LeadForm: COD Order Form</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="Request new features for LeadForm: COD Order Form - Help us improve our platform">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(135deg, #c20c81 0%, #930c81 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .content-section {
            background: white;
            padding: 60px 0;
        }
        .feature-request-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .feature-request-content h1 {
            color: #c20c81;
            margin-bottom: 30px;
        }
        .feature-request-content h2 {
            color: #333;
            margin-top: 40px;
            margin-bottom: 20px;
            border-bottom: 2px solid #c20c81;
            padding-bottom: 10px;
        }
        .feature-request-content p {
            margin-bottom: 20px;
        }
        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
        }
        .breadcrumb-item a {
            color: white;
        }
        .breadcrumb-item.active {
            color: #666;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #c20c81;
            box-shadow: 0 0 0 0.2rem rgba(194, 12, 129, 0.25);
        }
        .form-control:focus {
            outline: none;
        }
        .btn-submit {
            background: linear-gradient(135deg, #c20c81 0%, #930c81 100%);
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(194, 12, 129, 0.4);
            color: white;
        }
        .info-box {
            background: #e8f4fd;
            border: 1px solid #bee5eb;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
        }
        .info-box h3 {
            color: #0c5460;
            margin-bottom: 15px;
        }
        .info-box h3 i,
        .success-message h4 i,
        .btn-submit i {
            font-size: 1.2em;
            margin-right: 8px;
        }
        
        .success-message h4 i {
            color: #155724;
        }
        
        .btn-submit i {
            color: white;
        }
        .success-message {
            display: none;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            color: #155724;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/leadform"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Feature Request</li>
                </ol>
            </nav>
            <h1 class="display-4 fw-bold">Feature Request</h1>
            <p class="lead">Help us improve LeadForm by suggesting new features</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="feature-request-content">
                <h1>Request a New Feature</h1>
                
                <p>We love hearing from our users! Your feedback helps us make LeadForm even better. If you have an idea for a new feature that would help your business, we'd love to hear about it.</p>

                <div class="info-box">
                    <h3><i class="fa-solid fa-lightbulb"></i> Before Submitting</h3>
                    <ul>
                        <li>Check if your feature request already exists in our roadmap</li>
                        <li>Be as specific as possible about how the feature would help you</li>
                        <li>Include any relevant use cases or examples</li>
                        <li>Let us know if this is a critical need or nice-to-have</li>
                    </ul>
                </div>

                <form id="featureRequestForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="featureTitle" class="form-label">Feature Title *</label>
                        <input type="text" class="form-control" id="featureTitle" name="featureTitle" placeholder="Brief description of the feature" required>
                    </div>

                    <div class="form-group">
                        <label for="featureDescription" class="form-label">Detailed Description *</label>
                        <textarea class="form-control" id="featureDescription" name="featureDescription" rows="6" placeholder="Please describe the feature in detail, including how it would work and why it would be useful" required></textarea>
                    </div>

                    <div class="success-message" id="successMessage">
                        <h4><i class="fa-solid fa-check-circle"></i> Thank You!</h4>
                        <p>Your feature request has been submitted successfully. We'll review it and get back to you soon.</p>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-submit">
                            <i class="fa-solid fa-rocket"></i> Submit Feature Request
                        </button>
                    </div>
                </form>

                <div class="text-center mt-5">
                    <a href="https://webinnovate.dev/leadform" class="btn btn-outline-secondary">← Back to Home</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Form Submission Script -->
    <script>
        document.getElementById('featureRequestForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Here you would typically send the data to your backend
            // For now, we'll just show a success message
            console.log('Feature Request Data:', data);
            
            // Show success message
            document.getElementById('successMessage').style.display = 'block';
            
            // Scroll to success message
            document.getElementById('successMessage').scrollIntoView({ 
                behavior: 'smooth' 
            });
            
            // Reset form
            this.reset();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        });
    </script>

</body>
</html>
