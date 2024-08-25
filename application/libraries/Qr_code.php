<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class Qr_code {

    
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        // Ensure Composer's autoload is included
        require_once(FCPATH . '/vendor/autoload.php');
    }

    public function generate($text, $filename = null, $size = 300, $margin = 10) {
        $tempDir = FCPATH . 'uploads/ttd/'; // Directory to save QR code

        if (!file_exists($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        if ($filename === null) {
            $filename = uniqid() . '.png';
        }

        $filePath = $tempDir . $filename;

        // QR Code options
        $options = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'imageBase64' => false,
            'scale' => 1,
            'size' => $size,
            'margin' => $margin,
        ]);

        $qrcode = new QRCode($options);
        $qrcode->render($text, $filePath);

        return $filePath;
    }
}
