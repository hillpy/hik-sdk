<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface CardInterface
{
    public function bindCards();
    public function deleteCard();
    public function lostBatchCard();
    public function unlostBatchCard();
    public function getCardBarcode();
    public function getCardList();
    public function getCardInfo();
    public function getAdvanceCardList();
    public function getCardByTimeRange();
}
