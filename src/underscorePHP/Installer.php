<?php
namespace underscorePHP;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
		return '_php';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return '_php' === $packageType;
    }
}
?>