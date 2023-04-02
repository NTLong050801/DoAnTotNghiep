<?php



namespace App\Handlers;

use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class ProcessWebhookJob extends SpatieProcessWebhookJob
{
    public function handle()
    {
        // $this->webhookCall // contains an instance of `WebhookCall`
        Logger('12312');
            Log::info($this->webhookCall);
        // perform the work here
    }
}