<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;

class GoogleSheetsController extends Controller
{
    protected $googleSheets;

    public function __construct(GoogleSheetsService $googleSheets)
    {
        $this->googleSheets = $googleSheets;
    }

    public function readSheet()
    {
        $spreadsheetId = '1hOxfhT5sBL8m-GvKsCK98Fa5mrb-bhTkuFSO2Heow7g';
        $range = 'List'; // ช่วงข้อมูลที่ต้องการอ่าน

        $data = $this->googleSheets->getSheetData($spreadsheetId, $range);

        return response()->json($data);
    }

    public function search(Request $request)
    {
        $spreadsheetId = '1hOxfhT5sBL8m-GvKsCK98Fa5mrb-bhTkuFSO2Heow7g'; // ใส่ Google Sheet ID ของคุณ
        $range = 'List!A2:J'; // ดึงคอลัมน์ A ถึง J

        // ดึงข้อมูลทั้งหมดจาก Google Sheets
        $data = $this->googleSheets->readSheet($spreadsheetId, $range);

        // ตัวแปรค้นหา
        $searchTerm = strtolower($request->get('name')); // รับคำค้นหาจาก input

        // ตรวจสอบว่ามีคำค้นหาหรือไม่
        if ($searchTerm) {
            // กรองข้อมูลตามคำค้นหาในทุกสถานะของ `$row[8]`
            $filteredData = array_filter($data, function ($row) use ($searchTerm) {
                $fullName = strtolower($row[4] ?? '') . ' ' . strtolower($row[5] ?? ''); // รวมชื่อและนามสกุล
                return strpos($fullName, $searchTerm) !== false; // ค้นหาในชื่อและนามสกุล
            });
        } else {
            // ถ้าไม่มีคำค้นหา ให้แสดงเฉพาะ `$row[8] == '1'` (ข้อมูลที่ลงทะเบียนแล้ว)
            $filteredData = array_filter($data, function ($row) {
                return isset($row[8]) && $row[8] == '1';
            });
        }

        // นับจำนวนผู้ลงทะเบียนทั้งหมด
        $allRegistered = array_filter($data, function ($row) {
            return isset($row[8]) && $row[8] == '1';
        });

        // ส่งผลลัพธ์กลับไปที่ View
        return view('welcome', [
            'results' => $filteredData, // ผลลัพธ์ที่กรองแล้ว
            'registeredCount' => count($allRegistered), // จำนวนผู้ลงทะเบียนทั้งหมด
            'searchTerm' => $searchTerm
        ]);
    }


    public function checkin(Request $request)
{
    $spreadsheetId = '1hOxfhT5sBL8m-GvKsCK98Fa5mrb-bhTkuFSO2Heow7g'; // Google Sheet ID
    $rowIndex = $request->input('rowIndex'); // รับ Row Index จาก AJAX

    try {
        // อัปเดตข้อมูลใน Google Sheet (เปลี่ยนคอลัมน์ I ให้เป็น 1)
        $this->googleSheets->updateCell(
            $spreadsheetId,
            "I$rowIndex", // อัปเดตคอลัมน์ I ของแถวที่กำหนด
            '1'
        );

        // ดึงข้อมูลใหม่ทั้งหมดเพื่ออัปเดตจำนวนผู้ลงทะเบียน
        $data = $this->googleSheets->readSheet($spreadsheetId, 'List!A2:J');
        $registeredCount = count(array_filter($data, function ($row) {
            return isset($row[8]) && $row[8] == '1';
        }));

        return response()->json([
            'success' => true,
            'message' => 'Check-in สำเร็จ!',
            'registeredCount' => $registeredCount, // ส่งจำนวนผู้ลงทะเบียนกลับไป
        ]);


    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()]);
    }
}


    public function writeSheet(Request $request)
    {
        $spreadsheetId = '1hOxfhT5sBL8m-GvKsCK98Fa5mrb-bhTkuFSO2Heow7g';
        $range = 'Sheet1'; // ช่วงข้อมูลที่ต้องการเขียน

        $values = [
            [$request->input('name'), $request->input('email'), now()]
        ];

        $this->googleSheets->appendSheetData($spreadsheetId, $range, $values);

        return response()->json(['message' => 'Data added to Google Sheets']);
    }
}
