<?php

namespace Espl\CartProductPrice\Plugin;

class Cart
{
  public function aroundAddProduct(\Magento\Checkout\Model\Cart $subject, \Closure $proceed, $productInfo, $requestInfo = null)
  {
    $additionalCost = 50;
    $productInfo['price'] = $productInfo['price'] + $additionalCost;
    $result = $proceed($productInfo, $requestInfo);
    return $result;
  }
}
