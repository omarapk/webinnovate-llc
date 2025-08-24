<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LeadForm Affiliate Program – Form</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="Apply to become a LeadForm affiliate partner">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    
        <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .page-header {
            background: linear-gradient(135deg, #c20c81, #930c81);
            color: white;
            padding: 40px 0;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .page-header h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .page-header p {
            color: white;
            font-size: 1.1rem;
        }
        
        /* Home Icon Styling */
        .home-icon-link {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 24px;
            text-decoration: none;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .home-icon-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
        }
        
        .form-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 30px auto;
            max-width: 800px;
            padding: 40px;
        }
        
        .form-section {
            margin-bottom: 40px;
        }
        
        .form-section h3 {
            color: #c20c81;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e5e7eb;
        }
        
        .form-label {
            font-weight: 600;
            font-size: 1.3rem;
            color: #374151;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control, .form-select {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            transition: border-color 0.2s ease;
            height: auto;
            line-height: 1.5;
            background-color: #fff;
            color: #374151;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #c20c81;
            box-shadow: 0 0 0 3px rgba(194, 12, 129, 0.1);
            outline: none;
        }
        
        /* Ensure select elements have the same appearance as input fields */
        select.form-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 6 7 7 7-7'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px 12px;
            padding-right: 40px;
        }
        
        /* Ensure consistent sizing for all form elements */
        .form-control, .form-select, select {
            min-height: 48px;
            box-sizing: border-box;
        }
        
        .required-field::after {
            content: " *";
            color: #dc2626;
        }
        
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-top: 10px;
        }
        
        .form-check {
            margin-bottom: 8px;
        }
        
        .form-check-input:checked {
            background-color: #c20c81;
            border-color: #c20c81;
        }
        
        .social-media-row {
            display: flex;
            gap: 15px;
            align-items: end;
            margin-bottom: 15px;
        }
        
        .add-social-btn {
            background: #c20c81;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        
        .add-social-btn:hover {
            background: #930c81;
        }
        
                 .submit-btn {
             background: linear-gradient(135deg, #c20c81, #930c81);
             border: none;
             padding: 15px 40px;
             border-radius: 8px;
             color: white;
             font-weight: 600;
             font-size: 16px;
             transition: all 0.3s ease;
             width: 100%;
             max-width: 300px;
         }
         
         .submit-btn:hover {
             transform: translateY(-2px);
             box-shadow: 0 8px 25px rgba(194, 12, 129, 0.3);
         }
        
        .alert {
            border-radius: 8px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }
        
        .alert-danger {
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        
        .back-btn {
            background: #6b7280;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            transition: background-color 0.2s ease;
        }
        
        .back-btn:hover {
            background: #4b5563;
            color: white;
            text-decoration: none;
        }
        
                 .terms-checkbox {
             margin: 30px 0;
             padding: 20px;
             background: #f9fafb;
             border-radius: 8px;
             border: 1px solid #e5e7eb;
         }
         
         /* RBT Button Styles for animations */
         .rbt-btn {
             display: inline-flex;
             align-items: center;
             justify-content: center;
             padding: 12px 30px;
             border-radius: 50px;
             font-weight: 600;
             text-decoration: none;
             transition: all 0.3s ease;
             border: none;
             cursor: pointer;
             position: relative;
             overflow: hidden;
         }
         
         .rbt-btn.btn-gradient {
             background: linear-gradient(135deg, #c20c81, #930c81);
             color: white;
             box-shadow: 0 4px 15px rgba(194, 12, 129, 0.2);
         }
         
         .rbt-btn.btn-gradient:hover {
             transform: translateY(-3px);
             box-shadow: 0 8px 25px rgba(194, 12, 129, 0.4);
             color: white;
         }
         
         .rbt-btn.hover-icon-reverse .icon-reverse-wrapper {
             display: flex;
             align-items: center;
             gap: 8px;
             transition: all 0.3s ease;
         }
         
         .rbt-btn.hover-icon-reverse:hover .icon-reverse-wrapper {
             transform: translateX(-5px);
         }
         
         .rbt-btn .btn-text {
             transition: all 0.3s ease;
         }
         
         .rbt-btn .btn-icon {
             transition: all 0.3s ease;
             opacity: 0;
             transform: translateX(-10px);
         }
         
         .rbt-btn:hover .btn-icon {
             opacity: 1;
             transform: translateX(0);
         }
         
         .rbt-btn.btn-lg {
             padding: 15px 40px;
             font-size: 18px;
         }
         
         .rbt-btn.btn-sm {
             padding: 8px 20px;
             font-size: 14px;
         }
    </style>
</head>
<body>

                   <!-- Page Header -->
      <div class="page-header">
          <div class="container">
              <div class="text-center position-relative">
                  <!-- Home Icon -->
                  <a href="/" class="home-icon-link" title="Back to Home">
                      <i class="fas fa-home"></i>
                  </a>
                  <h1>LeadForm Affiliate Program Application</h1>
                  <p>Join our partner network and earn 30% lifetime commission</p>
              </div>
          </div>
      </div>

      <!-- Main Content -->
      <div class="container">
          <div class="form-container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ route('affiliate.submit') }}" method="POST">
            @csrf
            
                         <!-- Section 1: Basic Information -->
             <div class="form-section">
                 <h3> Basic Information</h3>
                
                                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="full_name" class="form-label required-field">Full Name</label>
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                               id="full_name" name="full_name" value="{{ old('full_name') }}" 
                               placeholder="Please enter your full legal name" required>
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <label for="email" class="form-label required-field">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email') }}" 
                               placeholder="Provide your primary email address" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="whatsapp_number" class="form-label required-field">WhatsApp Number</label>
                        <div class="input-group">
                            <select class="form-select js-example-templating" style="max-width: 200px;">
                                <option value="us">United States (+1)</option>
                                <option value="af">Afghanistan (+93)</option>
                                <option value="al">Albania (+355)</option>
                                <option value="dz">Algeria (+213)</option>
                                <option value="ad">Andorra (+376)</option>
                                <option value="ao">Angola (+244)</option>
                                <option value="ag">Antigua and Barbuda (+1-268)</option>
                                <option value="ar">Argentina (+54)</option>
                                <option value="am">Armenia (+374)</option>
                                <option value="au">Australia (+61)</option>
                                <option value="at">Austria (+43)</option>
                                <option value="az">Azerbaijan (+994)</option>
                                <option value="bs">Bahamas (+1-242)</option>
                                <option value="bh">Bahrain (+973)</option>
                                <option value="bd">Bangladesh (+880)</option>
                                <option value="bb">Barbados (+1-246)</option>
                                <option value="by">Belarus (+375)</option>
                                <option value="be">Belgium (+32)</option>
                                <option value="bz">Belize (+501)</option>
                                <option value="bj">Benin (+229)</option>
                                <option value="bt">Bhutan (+975)</option>
                                <option value="bo">Bolivia (+591)</option>
                                <option value="ba">Bosnia and Herzegovina (+387)</option>
                                <option value="bw">Botswana (+267)</option>
                                <option value="br">Brazil (+55)</option>
                                <option value="bn">Brunei (+673)</option>
                                <option value="bg">Bulgaria (+359)</option>
                                <option value="bf">Burkina Faso (+226)</option>
                                <option value="bi">Burundi (+257)</option>
                                <option value="kh">Cambodia (+855)</option>
                                <option value="cm">Cameroon (+237)</option>
                                <option value="ca">Canada (+1)</option>
                                <option value="cv">Cape Verde (+238)</option>
                                <option value="cf">Central African Republic (+236)</option>
                                <option value="td">Chad (+235)</option>
                                <option value="cl">Chile (+56)</option>
                                <option value="cn">China (+86)</option>
                                <option value="co">Colombia (+57)</option>
                                <option value="km">Comoros (+269)</option>
                                <option value="cr">Costa Rica (+506)</option>
                                <option value="hr">Croatia (+385)</option>
                                <option value="cu">Cuba (+53)</option>
                                <option value="cy">Cyprus (+357)</option>
                                <option value="cz">Czech Republic (+420)</option>
                                <option value="cd">Democratic Republic of the Congo (+243)</option>
                                <option value="dk">Denmark (+45)</option>
                                <option value="dj">Djibouti (+253)</option>
                                <option value="dm">Dominica (+1-767)</option>
                                <option value="do">Dominican Republic (+1-809)</option>
                                <option value="ec">Ecuador (+593)</option>
                                <option value="eg">Egypt (+20)</option>
                                <option value="sv">El Salvador (+503)</option>
                                <option value="gq">Equatorial Guinea (+240)</option>
                                <option value="er">Eritrea (+291)</option>
                                <option value="ee">Estonia (+372)</option>
                                <option value="et">Ethiopia (+251)</option>
                                <option value="fj">Fiji (+679)</option>
                                <option value="fi">Finland (+358)</option>
                                <option value="fr">France (+33)</option>
                                <option value="ga">Gabon (+241)</option>
                                <option value="gm">Gambia (+220)</option>
                                <option value="ge">Georgia (+995)</option>
                                <option value="de">Germany (+49)</option>
                                <option value="gh">Ghana (+233)</option>
                                <option value="gr">Greece (+30)</option>
                                <option value="gd">Grenada (+1-473)</option>
                                <option value="gt">Guatemala (+502)</option>
                                <option value="gn">Guinea (+224)</option>
                                <option value="gw">Guinea-Bissau (+245)</option>
                                <option value="gy">Guyana (+592)</option>
                                <option value="ht">Haiti (+509)</option>
                                <option value="hn">Honduras (+504)</option>
                                <option value="hu">Hungary (+36)</option>
                                <option value="is">Iceland (+354)</option>
                                <option value="in">India (+91)</option>
                                <option value="id">Indonesia (+62)</option>
                                <option value="ir">Iran (+98)</option>
                                <option value="iq">Iraq (+964)</option>
                                <option value="ie">Ireland (+353)</option>
                                <option value="il">Israel (+972)</option>
                                <option value="it">Italy (+39)</option>
                                <option value="jm">Jamaica (+1-876)</option>
                                <option value="jp">Japan (+81)</option>
                                <option value="jo">Jordan (+962)</option>
                                <option value="kz">Kazakhstan (+7)</option>
                                <option value="ke">Kenya (+254)</option>
                                <option value="ki">Kiribati (+686)</option>
                                <option value="kw">Kuwait (+965)</option>
                                <option value="kg">Kyrgyzstan (+996)</option>
                                <option value="la">Laos (+856)</option>
                                <option value="lv">Latvia (+371)</option>
                                <option value="lb">Lebanon (+961)</option>
                                <option value="ls">Lesotho (+266)</option>
                                <option value="lr">Liberia (+231)</option>
                                <option value="ly">Libya (+218)</option>
                                <option value="li">Liechtenstein (+423)</option>
                                <option value="lt">Lithuania (+370)</option>
                                <option value="lu">Luxembourg (+352)</option>
                                <option value="mg">Madagascar (+261)</option>
                                <option value="mw">Malawi (+265)</option>
                                <option value="my">Malaysia (+60)</option>
                                <option value="mv">Maldives (+960)</option>
                                <option value="ml">Mali (+223)</option>
                                <option value="mt">Malta (+356)</option>
                                <option value="mh">Marshall Islands (+692)</option>
                                <option value="mr">Mauritania (+222)</option>
                                <option value="mu">Mauritius (+230)</option>
                                <option value="mx">Mexico (+52)</option>
                                <option value="fm">Micronesia (+691)</option>
                                <option value="md">Moldova (+373)</option>
                                <option value="mc">Monaco (+377)</option>
                                <option value="mn">Mongolia (+976)</option>
                                <option value="me">Montenegro (+382)</option>
                                <option value="ma">Morocco (+212)</option>
                                <option value="mz">Mozambique (+258)</option>
                                <option value="mm">Myanmar (+95)</option>
                                <option value="na">Namibia (+264)</option>
                                <option value="np">Nepal (+977)</option>
                                <option value="nl">Netherlands (+31)</option>
                                <option value="nz">New Zealand (+64)</option>
                                <option value="ni">Nicaragua (+505)</option>
                                <option value="ne">Niger (+227)</option>
                                <option value="ng">Nigeria (+234)</option>
                                <option value="no">Norway (+47)</option>
                                <option value="om">Oman (+968)</option>
                                <option value="pk">Pakistan (+92)</option>
                                <option value="pw">Palau (+680)</option>
                                <option value="pa">Panama (+507)</option>
                                <option value="pg">Papua New Guinea (+675)</option>
                                <option value="py">Paraguay (+595)</option>
                                <option value="pe">Peru (+51)</option>
                                <option value="ph">Philippines (+63)</option>
                                <option value="pl">Poland (+48)</option>
                                <option value="pt">Portugal (+351)</option>
                                <option value="qa">Qatar (+974)</option>
                                <option value="ro">Romania (+40)</option>
                                <option value="ru">Russia (+7)</option>
                                <option value="rw">Rwanda (+250)</option>
                                <option value="sa">Saudi Arabia (+966)</option>
                                <option value="sn">Senegal (+221)</option>
                                <option value="rs">Serbia (+381)</option>
                                <option value="sc">Seychelles (+248)</option>
                                <option value="sl">Sierra Leone (+232)</option>
                                <option value="sg">Singapore (+65)</option>
                                <option value="sk">Slovakia (+421)</option>
                                <option value="si">Slovenia (+386)</option>
                                <option value="sb">Solomon Islands (+677)</option>
                                <option value="so">Somalia (+252)</option>
                                <option value="za">South Africa (+27)</option>
                                <option value="kr">South Korea (+82)</option>
                                <option value="ss">South Sudan (+211)</option>
                                <option value="es">Spain (+34)</option>
                                <option value="lk">Sri Lanka (+94)</option>
                                <option value="sd">Sudan (+249)</option>
                                <option value="sr">Suriname (+597)</option>
                                <option value="sz">Swaziland (+268)</option>
                                <option value="se">Sweden (+46)</option>
                                <option value="ch">Switzerland (+41)</option>
                                <option value="sy">Syria (+963)</option>
                                <option value="tw">Taiwan (+886)</option>
                                <option value="tj">Tajikistan (+992)</option>
                                <option value="tz">Tanzania (+255)</option>
                                <option value="th">Thailand (+66)</option>
                                <option value="tg">Togo (+228)</option>
                                <option value="to">Tonga (+676)</option>
                                <option value="tt">Trinidad and Tobago (+1-868)</option>
                                <option value="tn">Tunisia (+216)</option>
                                <option value="tr">Turkey (+90)</option>
                                <option value="tm">Turkmenistan (+993)</option>
                                <option value="ug">Uganda (+256)</option>
                                <option value="ua">Ukraine (+380)</option>
                                <option value="ae">United Arab Emirates (+971)</option>
                                <option value="gb">United Kingdom (+44)</option>
                                <option value="uy">Uruguay (+598)</option>
                                <option value="uz">Uzbekistan (+998)</option>
                                <option value="vu">Vanuatu (+678)</option>
                                <option value="ve">Venezuela (+58)</option>
                                <option value="vn">Vietnam (+84)</option>
                                <option value="ye">Yemen (+967)</option>
                                <option value="zm">Zambia (+260)</option>
                                <option value="zw">Zimbabwe (+263)</option>
                            </select>
                            <input type="text" class="form-control @error('whatsapp_number') is-invalid @enderror" 
                                   id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number') }}" 
                                   placeholder="Enter phone number" required>
                        </div>
                         @error('whatsapp_number')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>
                    
                                                             <div class="col-md-6 mb-4">
                        <label for="country" class="form-label required-field">Country</label>
                         <input type="text" class="form-control @error('country') is-invalid @enderror" 
                                id="country" name="country" value="{{ old('country') }}" 
                                placeholder="Provide the country where you will" required>
                         @error('country')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="preferred_language" class="form-label required-field">Preferred Language</label>
                        <select class="form-select @error('preferred_language') is-invalid @enderror" 
                                id="preferred_language" name="preferred_language" required>
                            <option value="">Select language</option>
                            <option value="English" {{ old('preferred_language') == 'English' ? 'selected' : '' }}>English</option>
                            <option value="Français" {{ old('preferred_language') == 'Français' ? 'selected' : '' }}>Français</option>
                            <option value="عربي" {{ old('preferred_language') == 'عربي' ? 'selected' : '' }}>عربي</option>
                            <option value="Español" {{ old('preferred_language') == 'Español' ? 'selected' : '' }}>Español</option>
                            <option value="Português" {{ old('preferred_language') == 'Português' ? 'selected' : '' }}>Português</option>
                        </select>
                        @error('preferred_language')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 2: About Your Business & Audience -->
            <div class="form-section">
                <h3><i class="fas fa-briefcase me-2"></i>About Your Business & Audience</h3>
                
                <div class="mb-3">
                    <label class="form-label required-field">You working with the Cash on Delivery business model?</label>
                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('cod_business') is-invalid @enderror" 
                                       type="radio" name="cod_business" id="cod_yes" value="yes" 
                                       {{ old('cod_business') == 'yes' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="cod_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('cod_business') is-invalid @enderror" 
                                       type="radio" name="cod_business" id="cod_no" value="no" 
                                       {{ old('cod_business') == 'no' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="cod_no">No</label>
                            </div>
                        </div>
                        @error('cod_business')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    
                <div class="mb-3">
                    <label for="community_size" class="form-label required-field">Size of your community</label>
                        <select class="form-select @error('community_size') is-invalid @enderror" 
                                id="community_size" name="community_size" required>
                            <option value="">Select size</option>
                            <option value="Less than 1,000" {{ old('community_size') == 'Less than 1,000' ? 'selected' : '' }}>Less than 1,000</option>
                            <option value="1,000 – 10,000" {{ old('community_size') == '1,000 – 10,000' ? 'selected' : '' }}>1,000 – 10,000</option>
                            <option value="10,000 – 50,000" {{ old('community_size') == '10,000 – 50,000' ? 'selected' : '' }}>10,000 – 50,000</option>
                            <option value="50,000+" {{ old('community_size') == '50,000+' ? 'selected' : '' }}>50,000+</option>
                        </select>
                        @error('community_size')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label required-field">What best describes you?</label>
                    <div class="mt-2">
                        <div class="form-check">
                            <input class="form-check-input @error('business_type') is-invalid @enderror" 
                                   type="radio" name="business_type" id="shopify_agency" value="Shopify Agency" 
                                   {{ old('business_type') == 'Shopify Agency' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="shopify_agency">Shopify Agency</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('business_type') is-invalid @enderror" 
                                   type="radio" name="business_type" id="influencer" value="E-commerce Influencer / Content Creator" 
                                   {{ old('business_type') == 'E-commerce Influencer / Content Creator' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="influencer">E-commerce Influencer / Content Creator</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('business_type') is-invalid @enderror" 
                                   type="radio" name="business_type" id="trainer" value="Trainer / Educator in E-commerce" 
                                   {{ old('business_type') == 'Trainer / Educator in E-commerce' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="trainer">Trainer / Educator in E-commerce</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('business_type') is-invalid @enderror" 
                                   type="radio" name="business_type" id="community_owner" value="Community Owner (FB group, Telegram, Discord…)" 
                                   {{ old('business_type') == 'Community Owner (FB group, Telegram, Discord…)' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="community_owner">Community Owner (FB group, Telegram, Discord…)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('business_type') is-invalid @enderror" 
                                   type="radio" name="business_type" id="other" value="other" 
                                   {{ old('business_type') == 'other' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                    @error('business_type')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3" id="other_business_type_div" style="display: none;">
                    <label for="other_business_type" class="form-label">Please specify</label>
                    <input type="text" class="form-control @error('other_business_type') is-invalid @enderror" 
                           id="other_business_type" name="other_business_type" value="{{ old('other_business_type') }}" 
                           placeholder="Please describe your business type">
                    @error('other_business_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Section 3: Promotion Channels -->
            <div class="form-section">
                <h3><i class="fas fa-share-alt me-2"></i>Promotion Channels</h3>
                
                <div class="mb-3">
                    <label class="form-label required-field">Where do you plan to promote Leadform?</label>
                    <div class="checkbox-group">
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="youtube" value="YouTube" 
                                   {{ in_array('YouTube', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="youtube">YouTube</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="instagram" value="Instagram" 
                                   {{ in_array('Instagram', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="instagram">Instagram</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="facebook" value="Facebook" 
                                   {{ in_array('Facebook', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="facebook">Facebook</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="tiktok" value="TikTok" 
                                   {{ in_array('TikTok', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="tiktok">TikTok</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="twitter" value="X (Twitter)" 
                                   {{ in_array('X (Twitter)', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="twitter">X (Twitter)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="linkedin" value="LinkedIn" 
                                   {{ in_array('LinkedIn', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="linkedin">LinkedIn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="website" value="Website / Blog" 
                                   {{ in_array('Website / Blog', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="website">Website / Blog</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="email" value="Email Marketing" 
                                   {{ in_array('Email Marketing', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="email">Email Marketing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('promotion_channels') is-invalid @enderror" 
                                   type="checkbox" name="promotion_channels[]" id="other_channels" value="other" 
                                   {{ in_array('other', old('promotion_channels', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="other_channels">Other</label>
                        </div>
                    </div>
                    @error('promotion_channels')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Channel Details Sections -->
                <div id="channel-details-container">
                    <!-- YouTube Channel Details -->
                    <div id="youtube-details" class="channel-details mb-3" style="display: none;">
                        <div class="card">
                                                         <div class="card-header" style="background-color: #FF0000;">
                                 <h5 class="mb-0" style="color: white;"><i class="fab fa-youtube me-2"></i>YouTube Channel Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="youtube_channel_name" class="form-label">Channel Name</label>
                                        <input type="text" class="form-control" id="youtube_channel_name" 
                                               name="youtube_channel_name" value="{{ old('youtube_channel_name') }}" 
                                               placeholder="Your YouTube channel name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="youtube_followers" class="form-label">Number of Subscribers</label>
                                        <input type="number" class="form-control" id="youtube_followers" 
                                               name="youtube_followers" value="{{ old('youtube_followers') }}" 
                                               placeholder="e.g., 10000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                         <!-- Instagram Channel Details -->
                     <div id="instagram-details" class="channel-details mb-3" style="display: none;">
                         <div class="card">
                             <div class="card-header" style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);">
                                 <h5 class="mb-0" style="color: white;"><i class="fab fa-instagram me-2"></i>Instagram Account Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="instagram_username" class="form-label">Instagram Username</label>
                                        <input type="text" class="form-control" id="instagram_username" 
                                               name="instagram_username" value="{{ old('instagram_username') }}" 
                                               placeholder="@yourusername">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="instagram_followers" class="form-label">Number of Followers</label>
                                        <input type="number" class="form-control" id="instagram_followers" 
                                               name="instagram_followers" value="{{ old('instagram_followers') }}" 
                                               placeholder="e.g., 5000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                         <!-- TikTok Channel Details -->
                     <div id="tiktok-details" class="channel-details mb-3" style="display: none;">
                         <div class="card">
                             <div class="card-header" style="background: linear-gradient(45deg, #000000, #25F4EE, #FE2C55);">
                                 <h5 class="mb-0" style="color: white;"><i class="fab fa-tiktok me-2"></i>TikTok Account Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tiktok_username" class="form-label">TikTok Username</label>
                                        <input type="text" class="form-control" id="tiktok_username" 
                                               name="tiktok_username" value="{{ old('tiktok_username') }}" 
                                               placeholder="@yourusername">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="tiktok_followers" class="form-label">Number of Followers</label>
                                        <input type="number" class="form-control" id="tiktok_followers" 
                                               name="tiktok_followers" value="{{ old('tiktok_followers') }}" 
                                               placeholder="e.g., 8000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Facebook Channel Details -->
                    <div id="facebook-details" class="channel-details mb-3" style="display: none;">
                        <div class="card">
                                                         <div class="card-header" style="background-color: #1877F2;">
                                 <h5 class="mb-0" style="color: white;"><i class="fab fa-facebook me-2"></i>Facebook Page Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="facebook_page_name" class="form-label">Page Name</label>
                                        <input type="text" class="form-control" id="facebook_page_name" 
                                               name="facebook_page_name" value="{{ old('facebook_page_name') }}" 
                                               placeholder="Your Facebook page name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="facebook_followers" class="form-label">Number of Followers</label>
                                        <input type="number" class="form-control" id="facebook_followers" 
                                               name="facebook_followers" value="{{ old('facebook_followers') }}" 
                                               placeholder="e.g., 3000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                         <!-- Twitter Channel Details -->
                     <div id="twitter-details" class="channel-details mb-3" style="display: none;">
                         <div class="card">
                             <div class="card-header" style="background-color: #000000;">
                                 <h5 class="mb-0" style="color: white;"><i class="fab fa-twitter me-2"></i>X (Twitter) Account Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="twitter_username" class="form-label">Twitter Username</label>
                                        <input type="text" class="form-control" id="twitter_username" 
                                               name="twitter_username" value="{{ old('twitter_username') }}" 
                                               placeholder="@yourusername">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="twitter_followers" class="form-label">Number of Followers</label>
                                        <input type="number" class="form-control" id="twitter_followers" 
                                               name="twitter_followers" value="{{ old('twitter_followers') }}" 
                                               placeholder="e.g., 2000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LinkedIn Channel Details -->
                    <div id="linkedin-details" class="channel-details mb-3" style="display: none;">
                        <div class="card">
                                                         <div class="card-header" style="background-color: #0A66C2;">
                                 <h5 class="mb-0" style="color: white;"><i class="fab fa-linkedin me-2"></i>LinkedIn Profile Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="linkedin_profile_name" class="form-label">Profile Name</label>
                                        <input type="text" class="form-control" id="linkedin_profile_name" 
                                               name="linkedin_profile_name" value="{{ old('linkedin_profile_name') }}" 
                                               placeholder="Your LinkedIn profile name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="linkedin_connections" class="form-label">Number of Connections</label>
                                        <input type="number" class="form-control" id="linkedin_connections" 
                                               name="linkedin_connections" value="{{ old('linkedin_connections') }}" 
                                               placeholder="e.g., 1500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                         <!-- Website/Blog Details -->
                     <div id="website-details" class="channel-details mb-3" style="display: none;">
                         <div class="card">
                             <div class="card-header bg-success">
                                 <h5 class="mb-0" style="color: white;"><i class="fas fa-globe me-2"></i>Website / Blog Details</h5>
                             </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="website_url" class="form-label">Website URL</label>
                                        <input type="url" class="form-control" id="website_url" 
                                               name="website_url" value="{{ old('website_url') }}" 
                                               placeholder="https://yourwebsite.com">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="website_monthly_visitors" class="form-label">Monthly Visitors</label>
                                        <input type="number" class="form-control" id="website_monthly_visitors" 
                                               name="website_monthly_visitors" value="{{ old('website_monthly_visitors') }}" 
                                               placeholder="e.g., 5000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3" id="other_channels_div" style="display: none;">
                    <label for="other_channels_text" class="form-label">Please specify</label>
                    <input type="text" class="form-control @error('other_channels') is-invalid @enderror" 
                           id="other_channels_text" name="other_channels" value="{{ old('other_channels') }}" 
                           placeholder="Please specify other promotion channels">
                    @error('other_channels')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

                         <!-- Submit Button -->
             <div class="text-center">
                 <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse btn-sm">
                     <span class="icon-reverse-wrapper">
                         <span class="btn-text">Submit </span>
                         <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                         <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                     </span>
                 </button>
             </div>
        </form>
    </div>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Select2 CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>
        // Format state function for Select2 with flags
        function formatState (state) {
            if (!state.id) {
                return state.text;
            }
            var baseUrl = "https://flagcdn.com/w20";
            var $state = $(
                '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" style="width: 20px; height: 15px; margin-right: 8px;" /> ' + state.text + '</span>'
            );
            return $state;
        };

        // Show/hide "Other" text fields and channel details based on selection
        document.addEventListener('DOMContentLoaded', function() {
            const otherBusinessType = document.getElementById('other');
            const otherBusinessTypeDiv = document.getElementById('other_business_type_div');
            const otherChannels = document.getElementById('other_channels');
            const otherChannelsDiv = document.getElementById('other_channels_div');
            
            // Channel checkboxes
            const youtubeCheckbox = document.getElementById('youtube');
            const instagramCheckbox = document.getElementById('instagram');
            const facebookCheckbox = document.getElementById('facebook');
            const tiktokCheckbox = document.getElementById('tiktok');
            const twitterCheckbox = document.getElementById('twitter');
            const linkedinCheckbox = document.getElementById('linkedin');
            const websiteCheckbox = document.getElementById('website');
            
            // Channel detail sections
            const youtubeDetails = document.getElementById('youtube-details');
            const instagramDetails = document.getElementById('instagram-details');
            const facebookDetails = document.getElementById('facebook-details');
            const tiktokDetails = document.getElementById('tiktok-details');
            const twitterDetails = document.getElementById('twitter-details');
            const linkedinDetails = document.getElementById('linkedin-details');
            const websiteDetails = document.getElementById('website-details');
            
            // Business type "Other" field
            otherBusinessType.addEventListener('change', function() {
                if (this.checked) {
                    otherBusinessTypeDiv.style.display = 'block';
                    document.getElementById('other_business_type').required = true;
                } else {
                    otherBusinessTypeDiv.style.display = 'none';
                    document.getElementById('other_business_type').required = false;
                }
            });
            
            // Promotion channels "Other" field
            otherChannels.addEventListener('change', function() {
                if (this.checked) {
                    otherChannelsDiv.style.display = 'block';
                    document.getElementById('other_channels_text').required = true;
                } else {
                    otherChannelsDiv.style.display = 'none';
                    document.getElementById('other_channels_text').required = false;
                }
            });
            
            // YouTube channel details
            youtubeCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    youtubeDetails.style.display = 'block';
                } else {
                    youtubeDetails.style.display = 'none';
                }
            });
            
            // Instagram channel details
            instagramCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    instagramDetails.style.display = 'block';
                } else {
                    instagramDetails.style.display = 'none';
                }
            });
            
            // Facebook channel details
            facebookCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    facebookDetails.style.display = 'block';
                } else {
                    facebookDetails.style.display = 'none';
                }
            });
            
            // TikTok channel details
            tiktokCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    tiktokDetails.style.display = 'block';
                } else {
                    tiktokDetails.style.display = 'none';
                }
            });
            
            // Twitter channel details
            twitterCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    twitterDetails.style.display = 'block';
                } else {
                    twitterDetails.style.display = 'none';
                }
            });
            
            // LinkedIn channel details
            linkedinCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    linkedinDetails.style.display = 'block';
                } else {
                    linkedinDetails.style.display = 'none';
                }
            });
            
            // Website details
            websiteCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    websiteDetails.style.display = 'block';
                } else {
                    websiteDetails.style.display = 'none';
                }
            });
            
            // Check on page load if fields were previously selected
            if (otherBusinessType.checked) {
                otherBusinessTypeDiv.style.display = 'block';
                document.getElementById('other_business_type').required = true;
            }
            
            if (otherChannels.checked) {
                otherChannelsDiv.style.display = 'block';
                document.getElementById('other_channels_text').required = true;
            }
            
            if (youtubeCheckbox.checked) {
                youtubeDetails.style.display = 'block';
            }
            
            if (instagramCheckbox.checked) {
                instagramDetails.style.display = 'block';
            }
            
            if (facebookCheckbox.checked) {
                facebookDetails.style.display = 'block';
            }
            
            if (tiktokCheckbox.checked) {
                tiktokDetails.style.display = 'block';
            }
            
            if (twitterCheckbox.checked) {
                twitterDetails.style.display = 'block';
            }
            
            if (linkedinCheckbox.checked) {
                linkedinDetails.style.display = 'block';
            }
            
            if (websiteCheckbox.checked) {
                websiteDetails.style.display = 'block';
            }
        });
        
        // Initialize Select2 with flag template
        $(document).ready(function() {
            $(".js-example-templating").select2({
                templateResult: formatState,
                templateSelection: formatState,
                placeholder: "Select a country",
                allowClear: true
            });
        });
    </script>
</body>
</html>
