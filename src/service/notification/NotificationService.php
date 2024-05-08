<?php
namespace klsheng\myinvois\service\notification;

use Exception;
use DateTime;
use klsheng\myinvois\MyInvoisClient;
use klsheng\myinvois\service\BaseService;

class NotificationService extends BaseService
{
    public const SANDBOX_API_BASE_URL = 'https://preprod-api.myinvois.hasil.gov.my/api/v1.0/notifications';
    public const PROD_API_BASE_URL = 'https://api.myinvois.hasil.gov.my/api/v1.0/notifications';

    /**
     * NotificationService constructor.
     *
     * @param MyInvoisClient    $client
     * @param bool              $prodMode
     */
    public function __construct(MyInvoisClient $client, $prodMode = false)
    {
        $baseUrl = ($prodMode) ? self::PROD_API_BASE_URL : self::SANDBOX_API_BASE_URL;

        parent::__construct($client, $baseUrl);
    }

    /**
     * This API allows ERP system to query for previously sent notifications.
     * 
     * @param DateTime|string   $dateFrom   Optional: start date and time for notifications to retrieve based on the date sent
     * @param DateTime|string   $dateTo     Optional: end date and time for notifications to retrieve based on the date sent
     * @param string            $type       Optional: type of notifications to retrieve specified as ID of the type
     * @param string            $language   Optional: used to get notifications only if they were sent out in a specific language
     * @param string            $status     Optional: used to get notifications of certain status only, e.g., only those that were not delivered. Values: pending, batched, delivered, error
     * @param string            $channel    Optional: used to get notifications delivered over certain channel only. Values: email, push
     * @param int               $pageNo     Optional: number of the page to retrieve. Typically this parameter value is derived from initial parameter less call when caller learns total amount of page of certain size
     * @param int               $pageSize   Optional: number of the packages to retrieve per page. Page size cannot exceed system configured maximum page size for this API which is 100
     * 
     * @return array
     */
    public function getNotifications($dateFrom = null, $dateTo = null, $type = null, $language = null, $status = null,
        $channel = null, $pageNo = 1, $pageSize = 20)
    {
        $dateFromString = ($dateFrom instanceof DateTime) ? $dateFrom->format('Y-m-d\TH:i:s\Z') : $dateFrom;
        $dateToString = ($dateTo instanceof DateTime) ? $dateTo->format('Y-m-d\TH:i:s\Z') : $dateTo;

        $params = [
            'dateFrom' => $dateFromString,
            'dateTo' => $dateToString,
            'type' => $type,
            'language' => $language,
            'status' => $status,
            'channel' => $channel,
            'pageNo' => $pageNo,
            'pageSize' => $pageSize,
        ];
        $query = '?' . http_build_query($params);

        print_r($query);
        die;

        $url = $this->getBaseUrl() . '/taxpayer' . $query;

        $response = $this->getClient()->request('GET', $url);
        return $response;
    }
}
