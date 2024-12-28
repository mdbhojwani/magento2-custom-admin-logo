<?php
/**
 * @category Mdbhojwani
 * @package Mdbhojwani_CustomAdminLogo
 * @author Manish Bhojwani <manishbhojwani3@gmail.com>
 * @github https://github.com/mdbhojwani
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace Mdbhojwani\CustomAdminLogo\Model\Config\Backend;

use Magento\Config\Model\Config\Backend\Image;

/**
 * Class AdminLoginLogo
 */
class AdminLoginLogo extends Image
{
    public const UPLOAD_DIR = 'admin/logo/login';

    /**
     * @inheritDoc
     */
    protected function _getUploadDir(): string
    {
        return $this->_mediaDirectory->getAbsolutePath(self::UPLOAD_DIR);
    }

    /**
     * @inheritDoc
     */
    protected function _addWhetherScopeInfo(): bool
    {
        return false;
    }
}
