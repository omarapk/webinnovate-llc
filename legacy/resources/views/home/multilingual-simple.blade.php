<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HiStudy - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS - Only essential styles -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .btn-custom {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s ease;
        }
        
        .btn-custom:hover {
            transform: translateY(-3px);
            color: white;
            text-decoration: none;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #667eea;
        }
        
        .stats-section {
            background: #f8f9fa;
            padding: 80px 0;
        }
        
        .stat-item {
            text-align: center;
            margin: 20px 0;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #667eea;
        }
        
        .stat-label {
            font-size: 1.1rem;
            color: #666;
        }
        
        .language-flags {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 40px 0;
        }
        
        .flag-item {
            text-align: center;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .flag-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        .footer {
            background: #2c3e50;
            color: white;
            padding: 50px 0 20px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1><i class="fas fa-globe"></i> Multi-Language Academy</h1>
                    <p class="lead">Take Online Language Courses With Certificate</p>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
                    <a href="#" class="btn-custom">
                        <i class="fas fa-search"></i> Find Your Course
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Language Flags -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Available Languages</h2>
            <div class="language-flags">
                <div class="flag-item">
                    <div class="flag-icon">🇺🇸</div>
                    <div>English</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇪🇸</div>
                    <div>Spanish</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇫🇷</div>
                    <div>French</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇩🇪</div>
                    <div>German</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇯🇵</div>
                    <div>Japanese</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇨🇳</div>
                    <div>Chinese</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇰🇷</div>
                    <div>Korean</div>
                </div>
                <div class="flag-item">
                    <div class="flag-icon">🇮🇹</div>
                    <div>Italian</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Our Academy?</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h4>Flexible Classes</h4>
                        <p>Learn at your own pace with 24/7 access to course materials and flexible scheduling options.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h4>Learn From Anywhere</h4>
                        <p>Access your courses from any device, anywhere in the world. No geographical limitations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Skill-Based Learning</h4>
                        <p>Focus on practical skills and real-world applications with industry-recognized certificates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Learners & counting</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">800+</div>
                        <div class="stat-label">Courses & Videos</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Certified Students</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Expert Instructors</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5><i class="fas fa-graduation-cap"></i> HiStudy Academy</h5>
                    <p>We're always in search for talented and motivated people. Don't be shy introduce yourself!</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">About Us</a></li>
                        <li><a href="#" class="text-white-50">Contact Us</a></li>
                        <li><a href="#" class="text-white-50">Become Teacher</a></li>
                        <li><a href="#" class="text-white-50">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Contact Info</h5>
                    <p><i class="fas fa-phone"></i> (406) 555-0120</p>
                    <p><i class="fas fa-envelope"></i> admin@example.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Education St, Learning City</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2025 HiStudy Academy. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- jQuery JS (CDN) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
            console.log('HiStudy Simple Page Loaded Successfully!');
            console.log('Bootstrap version:', typeof bootstrap !== 'undefined' ? 'Loaded' : 'Not loaded');
            console.log('jQuery version:', $.fn.jquery);
            
            // Simple animation for stats
            $('.stat-number').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text().replace(/[^\d]/g, '')
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now) + '+');
                    }
                });
            });
        });
    </script>
</body>
</html>
