<?php namespace Catthecreator\Bitrix24Leads\Components;

use AndreiShilov\UTMSaver\Facades\UTM;
use Cms\Classes\ComponentBase;

class LeadForm extends ComponentBase
{
  const TG_CHAT_ID = -1001477757317;

  public function componentDetails()
  {
    return [
      'name' => 'LeadForm EventListener',
      'description' => 'listen onBitrix24LeadSend event'
    ];
  }

  public function defineProperties()
  {
    return [];
  }

  protected function addLeadToBitrix24($method, $data)
  {
    $http = new \GuzzleHttp\Client;
    return $http->post("https://3rim.bitrix24.ru/rest/348/wkqvdsbbfpvvsks8/$method", [
      \GuzzleHttp\RequestOptions::JSON => [
        "fields" => $data
      ]
    ]);
//    $curl = curl_init();
//    curl_setopt_array($curl, array(
//      CURLOPT_SSL_VERIFYPEER => 0,
//      CURLOPT_POST => 1,
//      CURLOPT_HEADER => 0,
//      CURLOPT_RETURNTRANSFER => 1,
//      CURLOPT_URL => ,
//      CURLOPT_POSTFIELDS => http_build_query([
//        "fields" => $data
//      ]),
//    ));
//
//    $result = curl_exec($curl);
//    curl_close($curl);
//    return $result;
  }

  protected function callTgApi($method, $params)
  {
    $tok = "448250060:AAFCRbiTpo4iJM6iG2dqPWPN4InAUF-uFCM";
    $url = "https://api.telegram.org/bot" . $tok . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, array(
      CURLOPT_URL => $url,
      CURLOPT_POST => TRUE,
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_FOLLOWLOCATION => FALSE,
      CURLOPT_HEADER => FALSE,
      CURLOPT_TIMEOUT => 10,
      CURLOPT_HTTPHEADER => array('Accept-Language: ru,en-us'),
      CURLOPT_POSTFIELDS => $params

    ));

    $response = curl_exec($ch);
    return json_decode($response);
  }

  protected function sendMessageToTelegram($chat_id, $message)
  {
//    $this->callTgApi('sendMessage', array(
//      'chat_id' => $chat_id,
//      'text' => $message
//    )); 
  }

  public function onBitrix24LeadSend()
  {
    $email = request("email");
    $phone = request("phone");
    $fio = request("name");
    $title = request("title");

    UTM::save();
    $utms = collect([
      'utm_source' => \AndreiShilov\UTMSaver\Facades\UTM::get('utm_source') ?? request()->get("utm_source", ""),
      'utm_term' => \AndreiShilov\UTMSaver\Facades\UTM::get('utm_term') ?? request()->get("utm_term", ""),
      'utm_campaign' => \AndreiShilov\UTMSaver\Facades\UTM::get('utm_campaign') ?? request()->get("utm_campaign", ""),
      'utm_medium' => \AndreiShilov\UTMSaver\Facades\UTM::get('utm_medium') ?? request()->get("utm_medium", ""),
      'utm_content' => \AndreiShilov\UTMSaver\Facades\UTM::get('utm_content') ?? request()->get("utm_content", ""),
    ]);

    try {
      //$this->sendMessageToTelegram(self::TG_CHAT_ID, "Тестовая хрень: " . \AndreiShilov\UTMSaver\Facades\UTM::get('utm_source') );

      $this->addLeadToBitrix24("crm.lead.add", [
        'TITLE' => $title,
        'NAME' => $fio,
//        'PHONE_MOBILE' => $phone,
        "PHONE" => [
          [
            "VALUE" => $phone,
            "VALUE_TYPE" => "WORK"
          ]
        ],
//        'ADDRESS' => $_SESSION['city'],
        'SOURCE_ID' => 45,
        'WEB_WORK' => 'villa-kapri.ru',

        "EMAIL" => [
          [
            "VALUE" => $email,
            "VALUE_TYPE" => "WORK"
          ]
        ],
        "ASSIGNED_BY_ID" => 611,
//        'UF_CRM_1455692465' => $_POST['text'], //сообщение
        'UF_CRM_1455692549' => $utms["utm_source"],
        'UF_CRM_1455692560' => $utms["utm_term"],
        'UF_CRM_1455692569' => $utms["utm_campaign"],
        'UF_CRM_1455692582' => $utms["utm_medium"],
//        'UF_CRM_1455692659' => session(['referer']), //источник заявки
        'UF_CRM_1456390677' => date("d.m.Y H:i:s"),
      ]);
    } catch (\Throwable $e) {
      $this->sendMessageToTelegram(self::TG_CHAT_ID, "Ошибка:\n\n" . $e->getMessage());
    }
    $this->sendMessageToTelegram(self::TG_CHAT_ID,
      "Новый лид Вилла капри:\n\n" .
       print_r(request()->all(), 1)
    );

  }
}
