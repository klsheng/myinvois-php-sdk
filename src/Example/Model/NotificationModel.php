<?php

namespace Klsheng\Myinvois\Example\Model;

use Klsheng\Myinvois\Model\AbstractModel;

class NotificationModel extends AbstractModel
{
    public $notificationId;
    public $receivedDateTime;
    public $deliveredDateTime;
    public $typeId;
    public $typeName;
    public $finalMessage;
    public $channel;
    public $address;
    public $language;
    public $status;
    public $deliveryAttempts = [];

    public function load($data)
    {
        if(!parent::load($data)) {
            return false;
        }

        $this->loadDeliveryAttemptModels();

        return true;
    }

    private function loadDeliveryAttemptModels()
    {
        $models = [];
        if(!empty($this->deliveryAttempts)) {
            foreach($this->deliveryAttempts as $item) {
                $model = new DeliveryAttemptModel();
                $model->load($item);
                $models[] = $model;
            }
        }

        $this->deliveryAttempts = $models;
    }
}
