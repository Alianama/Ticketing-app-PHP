<?php
require_once __DIR__ . '/vendor/autoload.php';
require('koneksi.php');

$mpdf = new mPDF();

$sql = "SELECT name, kerusakan, date_update, complete FROM ticket Where complete = 0";
$result = $conn->query($sql);

$html = '<html>
<head>
    <style>
        body {
            text-align: center;
        }

        table {
            width: 80%; /* Set your preferred width */
            margin: 0 auto; /* Center the table */
            border-collapse: collapse;
            margin-bottom: 20px; /* Add margin at the bottom */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        h1 {
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>';

$html .= '<h1>Report Ticket belum Dikerjakan</h1>';
$html .= '<table>
    <tr>
        
        <th>No.</th>
        <th>Name</th>
        <th>Kerusakan</th>
        <th>Date Update</th>
        <th>Status Complete</th>
    </tr>';

if ($result->num_rows > 0) {

    $counter = 1; 

    while ($row = $result->fetch_assoc()) {
        $status = ($row['complete'] == 1) ? 'Selesai' : 'Belum Selesai';

        $html .= '<tr>
            <td>' . $counter . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['kerusakan'] . '</td>
            <td>' . $row['date_update'] . '</td>
            <td>' . $status . '</td>
        </tr>';
        
        $counter++;
    }
} else {
    $html .= '<tr><td colspan="5">No data available</td></tr>';
}
$html .= '</table>';

$html .= '<footer>Ticketing System Report by @ Ali Purnama</footer>';

$html .= '</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();


?>