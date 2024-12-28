<?php
/**
 * @category Mdbhojwani
 * @package Mdbhojwani_CustomAdminLogo
 * @author Manish Bhojwani <manishbhojwani3@gmail.com>
 * @github https://github.com/mdbhojwani
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace Mdbhojwani\CustomAdminLogo\Scope;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 */
class Config
{
    private const XML_PATH_LOGIN_LOGO = 'admin/mdbhojwani_admin_logos/login';
    private const XML_PATH_MENU_LOGO = 'admin/mdbhojwani_admin_logos/menu';

    /** @var ScopeConfigInterface */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return string|null
     */
    public function getAdminLoginLogoFileName(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_LOGIN_LOGO, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string|null
     */
    public function getAdminMenuLogoFileName(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_MENU_LOGO, ScopeInterface::SCOPE_STORE);
    }
}
