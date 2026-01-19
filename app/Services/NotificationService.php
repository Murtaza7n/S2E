<?php

namespace App\Services;

use App\Models\NotificationLog;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NotificationService
{
    public function sendSms($recipient, $message, $relatedModel = null)
    {
        try {
            // SMS Provider Integration (Twilio example)
            $response = Http::post(config('services.sms.url'), [
                'to' => $recipient,
                'message' => $message,
                'from' => config('services.sms.from'),
            ]);

            NotificationLog::create([
                'type' => 'sms',
                'recipient' => $recipient,
                'message' => $message,
                'status' => $response->successful() ? 'sent' : 'failed',
                'response' => $response->body(),
                'related_model_type' => $relatedModel ? get_class($relatedModel) : null,
                'related_model_id' => $relatedModel?->id,
            ]);

            return $response->successful();
        } catch (\Exception $e) {
            Log::error('SMS sending failed: ' . $e->getMessage());
            
            NotificationLog::create([
                'type' => 'sms',
                'recipient' => $recipient,
                'message' => $message,
                'status' => 'failed',
                'response' => $e->getMessage(),
            ]);

            return false;
        }
    }

    public function sendWhatsApp($recipient, $message, $relatedModel = null)
    {
        try {
            // WhatsApp API Integration
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.whatsapp.api_key'),
            ])->post(config('services.whatsapp.api_url'), [
                'to' => $recipient,
                'message' => $message,
            ]);

            NotificationLog::create([
                'type' => 'whatsapp',
                'recipient' => $recipient,
                'message' => $message,
                'status' => $response->successful() ? 'sent' : 'failed',
                'response' => $response->body(),
                'related_model_type' => $relatedModel ? get_class($relatedModel) : null,
                'related_model_id' => $relatedModel?->id,
            ]);

            return $response->successful();
        } catch (\Exception $e) {
            Log::error('WhatsApp sending failed: ' . $e->getMessage());
            
            NotificationLog::create([
                'type' => 'whatsapp',
                'recipient' => $recipient,
                'message' => $message,
                'status' => 'failed',
                'response' => $e->getMessage(),
            ]);

            return false;
        }
    }

    public function notifyCnStatusChange($cn, $oldStatus, $newStatus)
    {
        if ($cn->consignee_phone) {
            $message = "Your CN {$cn->cn_number} status changed from {$oldStatus} to {$newStatus}.";
            $this->sendSms($cn->consignee_phone, $message, $cn);
        }
    }

    public function notifyDelivery($cn)
    {
        if ($cn->consignee_phone) {
            $message = "Your CN {$cn->cn_number} has been delivered. Thank you for using our services.";
            $this->sendSms($cn->consignee_phone, $message, $cn);
            $this->sendWhatsApp($cn->consignee_phone, $message, $cn);
        }
    }
}

