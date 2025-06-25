<?php
if (!function_exists('translateText')) {
    function translateText($text, $source = 'tr', $target = 'en') {
        $url = 'https://libretranslate.com/translate';
    
        $data = [
            'q' => $text,
            'source' => $source,
            'target' => $target,
            'format' => 'text'
        ];
    
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    
        $response = curl_exec($ch);
        curl_close($ch);
    
        $response_data = json_decode($response, true);
        return $response_data['translatedText'] ?? $text;
    }
    
}
