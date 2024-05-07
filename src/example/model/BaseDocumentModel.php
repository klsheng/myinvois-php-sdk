<?php

namespace klsheng\myinvois\example\model;

use klsheng\myinvois\model\BaseModel;

abstract class BaseDocumentModel extends DocumentStatusModel
{
    public $internalId;
    public $typeName;
    public $typeVersionName;
    public $issuerTin;
    public $issuerName;
    public $receiverId;
    public $receiverName;
    public $dateTimeIssued;
    public $dateTimeReceived;
    public $documentStatusReason;
    public $cancelDateTime;
    public $rejectRequestDateTime;
    public $createdByUserId;
    public $totalSales;
    public $totalDiscount;
    public $netAmount;
    public $total;
}
