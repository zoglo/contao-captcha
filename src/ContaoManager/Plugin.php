<?php

declare(strict_types=1);

namespace Zoglo\ContaoCaptcha\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\NewsletterBundle\NewsletterBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Zoglo\ContaoCaptcha\ContaoCaptcha;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class Plugin implements BundlePluginInterface, RoutingPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoCaptcha::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setLoadAfter([NewsletterBundle::class])
                ->setReplace(['contao-captcha']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        return $resolver
            ->resolve(__DIR__.'/../../config/routes.yaml')
            ->load(__DIR__.'/../../config/routes.yaml')
            ;
    }
}
