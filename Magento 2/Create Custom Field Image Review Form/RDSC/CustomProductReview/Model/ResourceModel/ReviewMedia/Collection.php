<?php
/**
 * NOTICE OF LICENSE
 * You may not sell, distribute, sub-license, rent, lease or lend complete or portion of software to anyone.
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade to newer
 * versions in the future.
 *
 * @package   ProductReview
 * @copyright Copyright (c) 2018
 * @contacts  support
 * @license  See the LICENSE.md file in module root directory
 */

namespace RDSC\CustomProductReview\Model\ResourceModel\ReviewMedia;

/**
 * Class Collection
 *
 * @package RDSC\CustomProductReview\Model\ResourceModel\ReviewMedia
 * @author Umar Chaudhry
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * constructor
     *
     */
    protected function _construct()
    {
        $this->_init('RDSC\CustomProductReview\Model\ReviewMedia','RDSC\CustomProductReview\Model\ResourceModel\ReviewMedia');
    }
}
