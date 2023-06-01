<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GuzzleController;
use App\Models\Projects;
use App\Models\Telegram;
use Illuminate\Http\Request;
use stdClass;

class TelegramController extends Controller
{
    public function index($project_api_key)
    {

        $project = Projects::where('project_api_key', '=', $project_api_key)->first();
        $project_id = $project->id;
        $telegram_details = Telegram::where('project_id', '=', $project_id)->first();

        $msg_content = new stdClass();
        $msg_content->bot_api_key = $telegram_details->bot_api_key;
        $msg_content->channel_id = $telegram_details->channel_id;
        $msg_content->project_name = $project->project_name;
        $msg_content->domain = $project->domain_name;
        $msg_content->severity = "Info";
        $msg_content->error_msg = "Keep in mind that removing authentication from certain routes may have security implications, depending on the functionality and sensitive information involved. Make sure to evaluate the security requirements of your application and adjust the authentication and authorization mechanisms accordingly.";

        $requst = new GuzzleController();
        $response = $requst->send_alert($msg_content);

        return $response;
    }
}
