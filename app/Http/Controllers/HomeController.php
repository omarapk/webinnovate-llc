<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function artDesignSchool()
    {
        return view('home/artDesignSchool');
    }

    public function checkout()
    {
        return view('home/checkout');
    }

    public function classicLms()
    {
        return view('home/classicLms');
    }

    public function coaching()
    {
        return view('home/coaching');
    }

    public function courseSchool()
    {
        return view('home/courseSchool');
    }

    public function gymCoaching()
    {
        return view('home/gymCoaching');
    }

    public function healthWellnessInstitute()
    {
        return view('home/healthWellnessInstitute');
    }

    public function homeElegant()
    {
        return view('home/homeElegant');
    }

    public function homeTechnology()
    {
        return view('home/homeTechnology');
    }

    public function instructorCourse()
    {
        return view('home/instructorCourse');
    }

    public function instructorPortfolio()
    {
        return view('home/instructorPortfolio');
    }

    public function instructorsCoaches()
    {
        return view('home/instructorsCoaches');
    }

    public function islamicCenter()
    {
        return view('home/islamicCenter');
    }

    public function kindergarten()
    {
        return view('home/kindergarten');
    }

    public function languageAcademy()
    {
        return view('home/languageAcademy');
    }

    public function lifeCoach()
    {
        return view('home/lifeCoach');
    }

    public function mainDemo()
    {
        return view('home/mainDemo');
    }

    public function marketplace()
    {
        return view('home/marketplace');
    }

    public function modernUniversity()
    {
        return view('home/modernUniversity');
    }

    public function multilingual()
    {
        // Fetch Instagram posts from Save Insta API
        $instagramPosts = $this->getInstagramPosts();
        
        // Debug mode - set to true to see API response details
        $debugMode = false;
        
        return view('home/multilingual', compact('instagramPosts', 'debugMode'));
    }

    /**
     * Fetch Instagram posts from Save Insta API
     */
    public function getInstagramPosts()
    {
        // Try multiple API approaches
        $posts = $this->trySaveInstaAPI();
        
        if (empty($posts)) {
            \Log::info('Save Insta API failed, using sample data');
            return $this->getSampleInstagramPosts();
        }
        
        return $posts;
    }

    /**
     * Try the Save Insta API with different approaches
     */
    private function trySaveInstaAPI()
    {
        $approaches = [
            'approach1' => [
                'url' => 'https://save-insta1.p.rapidapi.com/media',
                'method' => 'POST',
                'data' => ['url' => 'https://www.instagram.com/leadform.cod/']
            ],
            'approach2' => [
                'url' => 'https://save-insta1.p.rapidapi.com/profileposts',
                'method' => 'POST',
                'data' => ['username' => 'leadform.cod']
            ]
        ];

        foreach ($approaches as $name => $config) {
            try {
                \Log::info("Trying API approach: {$name} with URL: {$config['url']}");
                $response = $this->makeAPICall($config['url'], $config['method'], $config['data']);
                
                if ($response) {
                    \Log::info("API {$name} succeeded with " . count($response) . " items");
                    return $response;
                } else {
                    \Log::warning("API {$name} returned no data");
                }
            } catch (\Exception $e) {
                \Log::error("API {$name} failed: " . $e->getMessage());
            }
        }
        
        return [];
    }

    /**
     * Make API call with proper error handling
     */
    private function makeAPICall($url, $method, $data)
    {
        $curl = curl_init();

        $headers = [
            "Content-Type: application/json",
            "x-rapidapi-host: save-insta1.p.rapidapi.com",
            "x-rapidapi-key: 84b766dbf1msh7ff097ef775056fp1cad81jsna3c8d3d67338"
        ];

        $curlOptions = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ];

        if ($method === 'POST') {
            $curlOptions[CURLOPT_POSTFIELDS] = json_encode($data);
        }

        curl_setopt_array($curl, $curlOptions);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if ($err) {
            \Log::error('cURL Error: ' . $err);
            return null;
        }

        if ($httpCode !== 200) {
            \Log::error("HTTP Error {$httpCode}: {$response}");
            return null;
        }

        $data = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            \Log::error('JSON decode error: ' . json_last_error_msg());
            return null;
        }

        // Log response for debugging
        \Log::info('API Response keys: ' . json_encode(array_keys($data ?? [])));
        
        // Try different response structures
        $possibleKeys = ['posts', 'data', 'result', 'items', 'content', 'media', 'videos', 'images'];
        
        foreach ($possibleKeys as $key) {
            if (isset($data[$key]) && is_array($data[$key]) && !empty($data[$key])) {
                return $data[$key];
            }
        }
        
        // If data is directly an array of posts
        if (is_array($data) && !empty($data) && isset($data[0])) {
            return $data;
        }
        
        // For /media endpoint, the response might be a single object or different structure
        if (isset($data['url']) || isset($data['download_url']) || isset($data['media_url'])) {
            // Single media item, wrap it in an array
            return [$data];
        }
        
        return null;
    }

    /**
     * Get sample Instagram posts for testing when API fails
     */
    private function getSampleInstagramPosts()
    {
        return [
            [
                'display_url' => 'https://via.placeholder.com/400x400/FF6B6B/FFFFFF?text=Instagram+Post+1',
                'permalink' => 'https://www.instagram.com/leadform.cod/',
                'caption' => 'Amazing coding tutorial! Learn how to build modern web applications with the latest technologies. #coding #webdevelopment #programming',
                'like_count' => 1250,
                'comment_count' => 89,
                'taken_at_timestamp' => time() - 3600 // 1 hour ago
            ],
            [
                'display_url' => 'https://via.placeholder.com/400x400/4ECDC4/FFFFFF?text=Instagram+Post+2',
                'permalink' => 'https://www.instagram.com/leadform.cod/',
                'caption' => 'Check out this awesome project we just completed! Full-stack development with React and Laravel. #react #laravel #fullstack',
                'like_count' => 890,
                'comment_count' => 45,
                'taken_at_timestamp' => time() - 7200 // 2 hours ago
            ],
            [
                'display_url' => 'https://via.placeholder.com/400x400/45B7D1/FFFFFF?text=Instagram+Post+3',
                'permalink' => 'https://www.instagram.com/leadform.cod/',
                'caption' => 'New tutorial alert! Learn how to integrate APIs into your applications. Step-by-step guide coming soon! #api #tutorial #coding',
                'like_count' => 2100,
                'comment_count' => 156,
                'taken_at_timestamp' => time() - 10800 // 3 hours ago
            ],
            [
                'display_url' => 'https://via.placeholder.com/400x400/96CEB4/FFFFFF?text=Instagram+Post+4',
                'permalink' => 'https://www.instagram.com/leadform.cod/',
                'caption' => 'Working on some exciting new features! Can\'t wait to share them with you all. Stay tuned for updates! #development #features',
                'like_count' => 567,
                'comment_count' => 23,
                'taken_at_timestamp' => time() - 14400 // 4 hours ago
            ],
            [
                'display_url' => 'https://via.placeholder.com/400x400/FFEAA7/FFFFFF?text=Instagram+Post+5',
                'permalink' => 'https://www.instagram.com/leadform.cod/',
                'caption' => 'Behind the scenes of our latest project! The team is working hard to deliver amazing results. #teamwork #project #development',
                'like_count' => 1340,
                'comment_count' => 67,
                'taken_at_timestamp' => time() - 18000 // 5 hours ago
            ],
            [
                'display_url' => 'https://via.placeholder.com/400x400/DDA0DD/FFFFFF?text=Instagram+Post+6',
                'permalink' => 'https://www.instagram.com/leadform.cod/',
                'caption' => 'Code review time! Always important to maintain clean and efficient code. What\'s your coding best practice? #codereview #bestpractices',
                'like_count' => 789,
                'comment_count' => 34,
                'taken_at_timestamp' => time() - 21600 // 6 hours ago
            ]
        ];
    }

    public function onlineAcademy()
    {
        return view('home/onlineAcademy');
    }

    public function onlineCourse()
    {
        return view('home/onlineCourse');
    }

    public function onlineSchool()
    {
        return view('home/onlineSchool');
    }

    public function singleCourse()
    {
        return view('home/singleCourse');
    }

    public function udemyAffiliate()
    {
        return view('home/udemyAffiliate');
    }

    public function universityClassic()
    {
        return view('home/universityClassic');
    }

    public function universityStatus()
    {
        return view('home/universityStatus');
    }

    public function wishlist()
    {
        return view('home/wishlist');
    }

}
