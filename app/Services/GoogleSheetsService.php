<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsService
{
    protected $client;
    protected $sheetsService;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('True Townhall 2025');
        $this->client->setAuthConfig(storage_path('app/google/credentials.json'));
        $this->client->addScope(Sheets::SPREADSHEETS);
        $this->client->setAccessType('offline');

        $this->sheetsService = new Sheets($this->client);
    }

    public function getSheetData($spreadsheetId, $range)
    {
        $response = $this->sheetsService->spreadsheets_values->get($spreadsheetId, $range);
        return $response->getValues();
    }

    public function readSheet($spreadsheetId, $range)
    {
        $response = $this->sheetsService->spreadsheets_values->get($spreadsheetId, $range);
        return $response->getValues();
    }

    public function updateCell($spreadsheetId, $range, $value)
    {
        // ใช้ Google\Service\Sheets\ValueRange แทน
        $body = new Sheets\ValueRange([
            'values' => [[$value]]
        ]);

        $params = ['valueInputOption' => 'RAW'];

        return $this->sheetsService->spreadsheets_values->update($spreadsheetId, $range, $body, $params);
    }

    public function appendSheetData($spreadsheetId, $range, $values)
    {
        $body = new Sheets\ValueRange([
            'values' => $values
        ]);
        $params = [
            'valueInputOption' => 'RAW'
        ];

        return $this->sheetsService->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    }
}
