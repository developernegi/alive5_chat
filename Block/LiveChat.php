<?php

namespace Alive5\LiveChat\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class LiveChat
 * @package Alive5\LiveChat\Block
 */
class LiveChat extends Template
{
    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * LiveChat constructor.
     * @param Template\Context $context
     * @param ScopeConfigInterface $scopeConfig
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ){
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isEnabled(){
        return $this->_scopeConfig->getValue('alive5_livechat/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getWidgetId(){
        return $this->_scopeConfig->getValue('alive5_livechat/general/widget_id', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}