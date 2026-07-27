<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Affiliate Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }
        .field-value {
            background: white;
            padding: 10px;
            border-radius: 5px;
            border-left: 4px solid #667eea;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎯 New Affiliate Application</h1>
        <p>HiStudy Affiliate Program</p>
    </div>
    
    <div class="content">
        <p>A new affiliate application has been submitted. Here are the details:</p>
        
        <div class="field">
            <div class="field-label">Full Name:</div>
            <div class="field-value">{{ $formData['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email Address:</div>
            <div class="field-value">{{ $formData['email'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Phone Number:</div>
            <div class="field-value">{{ $formData['phone'] }}</div>
        </div>
        
        @if($formData['website'])
        <div class="field">
            <div class="field-label">Website/Blog:</div>
            <div class="field-value">{{ $formData['website'] }}</div>
        </div>
        @endif
        
        @if($formData['social_media'])
        <div class="field">
            <div class="field-label">Social Media Handles:</div>
            <div class="field-value">{{ $formData['social_media'] }}</div>
        </div>
        @endif
        
        @if($formData['experience'])
        <div class="field">
            <div class="field-label">Previous Affiliate Experience:</div>
            <div class="field-value">{{ $formData['experience'] }}</div>
        </div>
        @endif
        
        @if($formData['motivation'])
        <div class="field">
            <div class="field-label">Why They Want to Join:</div>
            <div class="field-value">{{ $formData['motivation'] }}</div>
        </div>
        @endif
        
        <div class="field">
            <div class="field-label">Submitted At:</div>
            <div class="field-value">{{ $formData['submitted_at'] }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This email was sent from the HiStudy affiliate application form.</p>
        <p>Please review and respond to the applicant at your earliest convenience.</p>
    </div>
</body>
</html>
