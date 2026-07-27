<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Join Our Affiliate Program - HiStudy</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="Join our affiliate program and earn 25% lifetime commission. Apply now to become a HiStudy affiliate partner.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    
    <style>
        @include('public.layouts.partials.leadform-cta-button-css')
        .affiliate-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .affiliate-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .benefit-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
        }
        
        .form-section {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .form-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            padding: 50px;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-title {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 15px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 30px;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
        }
        
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
        }
        
        @media (max-width: 768px) {
            .form-card {
                padding: 30px 20px;
                margin: 0 15px;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="affiliate-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Join Our <span style="color: #ffd700;">25%</span> <span style="color: #ff6b35;">Lifetime</span> Commission Program</h1>
                    <p class="lead mb-4">Vitals top creators earn over $30k every month. With 2,700+ 5 star reviews, Vitals basically sells itself.</p>
                    
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <i class="fas fa-infinity benefit-icon"></i>
                            <h5>Lifetime Commission</h5>
                            <p>Earn commissions on every sale, forever</p>
                        </div>
                        <div class="benefit-card">
                            <i class="fas fa-calendar-check benefit-icon"></i>
                            <h5>30-day Attribution</h5>
                            <p>Get credit for sales within 30 days</p>
                        </div>
                        <div class="benefit-card">
                            <i class="fas fa-coins benefit-icon"></i>
                            <h5>Passive Income</h5>
                            <p>Build a sustainable income stream</p>
                        </div>
                        <div class="benefit-card">
                            <i class="fas fa-shopping-cart benefit-icon"></i>
                            <h5>Built for Success</h5>
                            <p>Proven system with high conversion rates</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/images/banner/banner-01.png') }}" alt="Affiliate Program" class="img-fluid" style="max-width: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <a href="/" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch mb-4 d-inline-flex align-items-center gap-2">
                        <i class="fas fa-arrow-left"></i>
                        @include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to Home'])
                    </a>
                    
                    <div class="form-card">
                        <h2 class="form-title">Apply to Become an Affiliate Partner</h2>
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                Please fix the following errors:
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('affiliate.submit') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website" class="form-label">Website/Blog (Optional)</label>
                                        <input type="url" class="form-control" id="website" name="website" value="{{ old('website') }}" placeholder="https://yourwebsite.com">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="social_media" class="form-label">Social Media Handles (Optional)</label>
                                <input type="text" class="form-control" id="social_media" name="social_media" value="{{ old('social_media') }}" placeholder="Instagram: @username, YouTube: channel name, etc.">
                            </div>
                            
                            <div class="form-group">
                                <label for="experience" class="form-label">Previous Affiliate Experience (Optional)</label>
                                <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="Tell us about your experience with affiliate marketing, if any...">{{ old('experience') }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="motivation" class="form-label">Why do you want to join our affiliate program? (Optional)</label>
                                <textarea class="form-control" id="motivation" name="motivation" rows="3" placeholder="Share your motivation and how you plan to promote our products...">{{ old('motivation') }}</textarea>
                            </div>
                            
                            <button type="submit" class="lf-cta-btn lf-cta-switch w-100">
                                <i class="fas fa-paper-plane me-2"></i>
                                @include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Submit Application'])
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
