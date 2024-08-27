<?php
class DokumenController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('qr_code');
        $this->load->model('PengajuanModel');
    }

    public function index($id)
    {

        $data = $this->PengajuanModel->get_detail_permohonan($id);
        // Create a DateTime object from the provided string
        $date = new DateTime($data[0]->verified_date);

        // Define Indonesian month names
        $months = [
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        // Extract day, month, and year
        $day = $date->format('d');
        $month = $date->format('n'); // Numeric month without leading zeros
        $year = $date->format('Y');

        // Return formatted date
        $formattedDate = $day . ' ' . $months[$month] . ' ' . $year;

        $mpdf = new \Mpdf\Mpdf();
        $text = base_url() . 'soft-file/' . $id; // Content for QR code
        $filename = 'ttd.png'; // Filename for the QR code

        // Generate the QR code
        $filePath = $this->qr_code->generate($text, $filename);

        // Mengatur HTML untuk kop surat
        $html = '
        <html
        <head>
        <title>DOKUMEN RESMI KECAMATAN JAKABARING</title>
        <style>
        .footer {
            margin-top:100px;
            position: absolute;
            right: 30px;
            text-align: right;
        }
        .signature-container {
            display: inline-block;
            text-align: center;
            padding-top: 10px;
            position: relative;
        }
        .signature-container img {
            display: block;
            margin: 0 auto;
            width: 200px; /* Adjust size as needed */
            height: auto;
        }
        .signature {
            margin-top: 10px;
            font-size: 14px;
        }
            </style>
        </head>
        <body>
        <table>
        <tr>
        <td align="center"><img src="' . base_url('assets/frontend/img/plg.png') . '" width="15%"></td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td>          </td>
        <td align="center">
            <p><h5>PEMERINTAH KOTA PALEMBANG</h5></p>
            <p><h5>KECAMATAN JAKABARING</h5></p>
            <p>Jln. Danau OPI No. 02 RT. 058 RW. 018</p>
            <p>Kelurahan 15 Ulu Kode Pos 30257 Palembang</p>
        </td>
        </tr>
        </table>
        <hr>
        <br>
        <h3 align="center">' . $data[0]->nama_layanan . '</h3>
        <p>Yang bertanda tangan dibawah ini :</p>
        <table>
        <tr>
        <td>Nama</td><td>:</td><td>Drs. Rachmat Maulana</td>
        </tr>
        <tr>
        <td>NIP</td><td>:</td><td>19720902199201001</td>
        </tr>
        <tr>
        <td>Jabatan</td><td>:</td><td>CAMAT Jakabaring Kota Palembang</td>
        </tr>
        </table>
        <p>Dengan ini menerima permohonan ' . $data[0]->nama_layanan . ' yang telah diajukan oleh :</p>
        <table>';
        $html2 = "";
        for ($x = 0; $x < count($data); $x++) {
            if ($data[$x]->type == "1") {
                $html2 = $html2 . '<tr>
        <td>' . $data[$x]->nama_field . '</td><td>:</td><td>' . $data[$x]->value . '</td>
        </tr>';
            }
        }
        $html3 = '</table>
        <p>Demi kian surat ini dibuat untuk merespon permohonan ' . $data[0]->nama_layanan . ' yang sudah diajukan oleh pemohon.</p>
        <div class="footer">
                <div class="signature-container">
                Palembang, '.$formattedDate.'
                    <img src="' . base_url('uploads/ttd/' . 'ttd.png') . '" style="width:80px;" alt="Gambar Cap atau Logo">
                    <div class="signature">
                        Drs. Rachmat Maulana<br>
                        CAMAT Jakabaring Kota Palembang
                    </div>
                </div>
            </div>
        </body>
        </html>
        ';
        $html = $html . $html2 . $html3;
        // Menulis HTML ke PDF
        $mpdf->WriteHTML($html);

        // Output PDF
        $mpdf->Output('kop_surat.pdf', 'I'); // 'I' untuk tampilan di browser, 'D' untuk download
    }
}
