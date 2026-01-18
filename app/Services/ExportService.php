<?php

namespace App\Services;

use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;

class ExportService
{
    /**
     * Export data to PDF
     */
    public function exportToPdf($data, $title, $headers, $filename = null)
    {
        $filename = $filename ?? $title . '_' . date('Y-m-d') . '.pdf';
        
        $html = $this->generatePdfHtml($data, $title, $headers);
        
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        return Response::streamDownload(function () use ($dompdf) {
            echo $dompdf->output();
        }, $filename, [
            'Content-Type' => 'application/pdf',
        ]);
    }
    
    /**
     * Export data to Excel
     */
    public function exportToExcel($data, $title, $headers, $filename = null)
    {
        $filename = $filename ?? $title . '_' . date('Y-m-d') . '.xlsx';
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle($title);
        
        // Set headers
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '1', $header);
            $sheet->getStyle($col . '1')->getFont()->setBold(true);
            $col++;
        }
        
        // Set data
        $row = 2;
        foreach ($data as $item) {
            $col = 'A';
            foreach ($headers as $key => $header) {
                $value = is_array($item) ? ($item[$key] ?? $item[$header] ?? '') : ($item->$key ?? '');
                $sheet->setCellValue($col . $row, $value);
                $col++;
            }
            $row++;
        }
        
        // Auto-size columns
        foreach (range('A', $col) as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }
        
        $writer = new Xlsx($spreadsheet);
        
        return Response::streamDownload(function () use ($writer) {
            $writer->save('php://output');
        }, $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * Export data to Word
     */
    public function exportToWord($data, $title, $headers, $filename = null)
    {
        $filename = $filename ?? $title . '_' . date('Y-m-d') . '.docx';
        
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        
        // Add title
        $section->addText($title, ['bold' => true, 'size' => 16]);
        $section->addTextBreak(1);
        
        // Add table
        $table = $section->addTable(['borderSize' => 6, 'borderColor' => '000000']);
        
        // Add header row
        $table->addRow();
        foreach ($headers as $header) {
            $table->addCell(2000)->addText($header, ['bold' => true]);
        }
        
        // Add data rows
        foreach ($data as $item) {
            $table->addRow();
            foreach ($headers as $key => $header) {
                $value = is_array($item) ? ($item[$key] ?? $item[$header] ?? '') : ($item->$key ?? '');
                $table->addCell(2000)->addText((string)$value);
            }
        }
        
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        
        return Response::streamDownload(function () use ($objWriter) {
            $objWriter->save('php://output');
        }, $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ]);
    }
    
    /**
     * Generate PDF HTML
     */
    private function generatePdfHtml($data, $title, $headers)
    {
        $html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>' . htmlspecialchars($title) . '</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 10px; }
        h1 { color: #1E3A5F; font-size: 18px; margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { background-color: #1E3A5F; color: white; padding: 8px; text-align: left; border: 1px solid #ddd; }
        td { padding: 6px; border: 1px solid #ddd; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .header { text-align: center; margin-bottom: 20px; }
        .footer { margin-top: 20px; font-size: 8px; color: #666; text-align: center; }
    </style>
</head>
<body>
    <div class="header">
        <h1>S2E LOGISTICS</h1>
        <h2>' . htmlspecialchars($title) . '</h2>
        <p>Generated on: ' . date('Y-m-d H:i:s') . '</p>
    </div>
    <table>
        <thead>
            <tr>';
        
        foreach ($headers as $header) {
            $html .= '<th>' . htmlspecialchars($header) . '</th>';
        }
        
        $html .= '</tr>
        </thead>
        <tbody>';
        
        foreach ($data as $item) {
            $html .= '<tr>';
            foreach ($headers as $key => $header) {
                $value = is_array($item) ? ($item[$key] ?? $item[$header] ?? '') : ($item->$key ?? '');
                $html .= '<td>' . htmlspecialchars((string)$value) . '</td>';
            }
            $html .= '</tr>';
        }
        
        $html .= '</tbody>
    </table>
    <div class="footer">
        <p>&copy; ' . date('Y') . ' S2E Logistics. All rights reserved.</p>
    </div>
</body>
</html>';
        
        return $html;
    }
}

