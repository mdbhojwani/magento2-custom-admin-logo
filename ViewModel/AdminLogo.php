<?php
/**
 * @category Mdbhojwani
 * @package Mdbhojwani_CustomAdminLogo
 * @author Manish Bhojwani <manishbhojwani3@gmail.com>
 * @github https://github.com/mdbhojwani
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace Mdbhojwani\CustomAdminLogo\ViewModel;

use Mdbhojwani\CustomAdminLogo\Model\AdminLogo as AdminLogoModel;
use Magento\Framework\App\Area;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class AdminLogo
 */
class AdminLogo implements ArgumentInterface
{
    /** @var AdminLogoModel */
    private AdminLogoModel $adminLogo;

    /** @var RequestInterface */
    private RequestInterface $request;

    /**
     * @param AdminLogoModel $adminLogo
     * @param RequestInterface $request
     */
    public function __construct(
        AdminLogoModel $adminLogo,
        RequestInterface $request
    ) {
        $this->adminLogo = $adminLogo;
        $this->request = $request;
    }

    /**
     * @return AdminLogoModel
     */
    public function getAdminLogoModel(): AdminLogoModel
    {
        return $this->adminLogo;
    }

    /**
     * @return bool
     */
    public function isAdminLoginPage(): bool
    {
        return $this->request->getRouteName() === Area::AREA_ADMINHTML
            && $this->request->getControllerName() === 'auth'
            && $this->request->getActionName() === 'login';
    }
}
