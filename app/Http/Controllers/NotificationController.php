<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __invoke(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'type' => 'required|string',
        ]);

        $response = $this->sendMessage($request);
    }


    protected function sendMessage($requestData) {
            $content      = [
                "en" => $requestData->title,
            ];

            $fields = array(
                'app_id' => env('ONE_SIGNAL_APP_ID'),
                'included_segments' => [env('ONE_SIGNAL_SEGMENT')],
                'contents' => $content,
                'data' => [
                    'type' => $requestData->type,
                    'id' => $requestData->id,
                ],
            );

            $fields = json_encode($fields);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                [
                    'Content-Type: application/json; charset=utf-8',
                    'Authorization: Basic ' . env('ONE_SIGNAL_KEY'),
                ]
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        }
}
