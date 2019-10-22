<?php

declare(strict_types=1);

/**
 * This file is part of Narrowspark Framework.
 *
 * (c) Daniel Bannert <d.bannert@anolilab.de>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Viserio\Bridge\Twig\Tests\Provider\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class TwigBridgeServiceProviderContainerTestProviderWithAllExtensions extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * {@inheritdoc}
     */
    protected $methodMapping = [
        \Symfony\Component\Console\CommandLoader\CommandLoaderInterface::class => 'getce817e8bdc75399a693ba45b876c457a0f7fd422258f7d4eabc553987c2fbd31',
        \Twig\Environment::class => 'get8d9ff7a81f29c15daa148bf17605b436a0f079af45d4fe0663dc18bfb7cc9691',
        \Viserio\Bridge\Twig\Command\DebugCommand::class => 'get82bd7182fb48bedbde7fdb8ea705cf3720cdc161ca8374d6d8c750d55f85d419',
        \Viserio\Bridge\Twig\Command\LintCommand::class => 'getf32036d73b7c99ae4b0444626f14d4a6c18aa429903389f6fe326667f7ecec32',
        \Viserio\Bridge\Twig\Extension\ConfigExtension::class => 'geta72d1fba9800d932b1f0c59f75600fe9e8f1fd2696f065e5f69138d5c2638dae',
        \Viserio\Bridge\Twig\Extension\SessionExtension::class => 'get1f1147d23896bcdc75963f9a5c6ed7cf81e12942876ccd1f58a386a7edf79b41',
        \Viserio\Bridge\Twig\Extension\TranslatorExtension::class => 'get1d0d0383d495697b8928cf9fdffa849c0a5ff16e8613700d3c711a38db24421b',
        \Viserio\Component\Console\Application::class => 'get206058a713a7172158e11c9d996f6a067c294ab0356ae6697060f162e057445a',
        'console.command.ids' => 'getdbce155f9c0e95dbd4bfbfaadab27eb79915789fa80c6c65068ccf60c9ef9e18',
    ];

    /**
     * {@inheritdoc}
     */
    protected $tags = [
        'console.command' => [
            0 => \Viserio\Bridge\Twig\Command\DebugCommand::class,
            1 => \Viserio\Bridge\Twig\Command\LintCommand::class,
        ],
        'twig.extensions' => [
            0 => \Viserio\Bridge\Twig\Extension\SessionExtension::class,
            1 => \Viserio\Bridge\Twig\Extension\TranslatorExtension::class,
            2 => \Viserio\Bridge\Twig\Extension\ConfigExtension::class,
        ],
    ];

    /**
     * {@inheritdoc}
     */
    protected $aliases = [
        \Symfony\Component\Console\Application::class => \Viserio\Component\Console\Application::class,
        'cerebro' => \Viserio\Component\Console\Application::class,
        'console' => \Viserio\Component\Console\Application::class,
    ];

    /**
     * {@inheritdoc}
     */
    protected $syntheticIds = [
        \Twig\Lexer::class => true,
        \Viserio\Contract\Config\Repository::class => true,
        \Viserio\Contract\Session\Store::class => true,
        \Viserio\Contract\Translation\TranslationManager::class => true,
    ];

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return [
            \Psr\Container\ContainerInterface::class => true,
            \Viserio\Contract\Container\Factory::class => true,
            \Viserio\Contract\Container\TaggedContainer::class => true,
            'container' => true,
            'service_container' => true,
        ];
    }

    /**
     * @return \Viserio\Component\Console\CommandLoader\IteratorCommandLoader
     */
    protected function getce817e8bdc75399a693ba45b876c457a0f7fd422258f7d4eabc553987c2fbd31(): \Viserio\Component\Console\CommandLoader\IteratorCommandLoader
    {
        return $this->services[\Symfony\Component\Console\CommandLoader\CommandLoaderInterface::class] = new \Viserio\Component\Console\CommandLoader\IteratorCommandLoader(new \Viserio\Component\Container\RewindableGenerator(function () {
            yield 'twig:debug' => ($this->services[\Viserio\Bridge\Twig\Command\DebugCommand::class] ?? $this->get82bd7182fb48bedbde7fdb8ea705cf3720cdc161ca8374d6d8c750d55f85d419());

            yield 'lint:twig' => ($this->services[\Viserio\Bridge\Twig\Command\LintCommand::class] ?? $this->getf32036d73b7c99ae4b0444626f14d4a6c18aa429903389f6fe326667f7ecec32());
        }, 2));
    }

    /**
     * @return \Twig\Environment
     */
    protected function get8d9ff7a81f29c15daa148bf17605b436a0f079af45d4fe0663dc18bfb7cc9691(): \Twig\Environment
    {
        $this->services[\Twig\Environment::class] = $instance = new \Twig\Environment(new \Twig\Loader\ArrayLoader());

        $instance->addExtension(new \Viserio\Bridge\Twig\Extension\StrExtension());
        $instance->addExtension(($this->services[\Viserio\Bridge\Twig\Extension\SessionExtension::class] ?? $this->get1f1147d23896bcdc75963f9a5c6ed7cf81e12942876ccd1f58a386a7edf79b41()));
        $instance->addExtension(($this->services[\Viserio\Bridge\Twig\Extension\TranslatorExtension::class] ?? $this->get1d0d0383d495697b8928cf9fdffa849c0a5ff16e8613700d3c711a38db24421b()));
        $instance->addExtension(($this->services[\Viserio\Bridge\Twig\Extension\ConfigExtension::class] ?? $this->geta72d1fba9800d932b1f0c59f75600fe9e8f1fd2696f065e5f69138d5c2638dae()));

        return $instance;
    }

    /**
     * @return \Viserio\Bridge\Twig\Command\DebugCommand
     */
    protected function get82bd7182fb48bedbde7fdb8ea705cf3720cdc161ca8374d6d8c750d55f85d419(): \Viserio\Bridge\Twig\Command\DebugCommand
    {
        $this->services[\Viserio\Bridge\Twig\Command\DebugCommand::class] = $instance = new \Viserio\Bridge\Twig\Command\DebugCommand(($this->services[\Twig\Environment::class] ?? $this->get8d9ff7a81f29c15daa148bf17605b436a0f079af45d4fe0663dc18bfb7cc9691()));

        $instance->setName('twig:debug');

        return $instance;
    }

    /**
     * @return \Viserio\Bridge\Twig\Command\LintCommand
     */
    protected function getf32036d73b7c99ae4b0444626f14d4a6c18aa429903389f6fe326667f7ecec32(): \Viserio\Bridge\Twig\Command\LintCommand
    {
        $this->services[\Viserio\Bridge\Twig\Command\LintCommand::class] = $instance = new \Viserio\Bridge\Twig\Command\LintCommand(($this->services[\Twig\Environment::class] ?? $this->get8d9ff7a81f29c15daa148bf17605b436a0f079af45d4fe0663dc18bfb7cc9691()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * @return \Viserio\Bridge\Twig\Extension\ConfigExtension
     */
    protected function geta72d1fba9800d932b1f0c59f75600fe9e8f1fd2696f065e5f69138d5c2638dae(): \Viserio\Bridge\Twig\Extension\ConfigExtension
    {
        return $this->services[\Viserio\Bridge\Twig\Extension\ConfigExtension::class] = new \Viserio\Bridge\Twig\Extension\ConfigExtension(($this->services[\Viserio\Contract\Config\Repository::class] ?? $this->get(\Viserio\Contract\Config\Repository::class)));
    }

    /**
     * @return \Viserio\Bridge\Twig\Extension\SessionExtension
     */
    protected function get1f1147d23896bcdc75963f9a5c6ed7cf81e12942876ccd1f58a386a7edf79b41(): \Viserio\Bridge\Twig\Extension\SessionExtension
    {
        return $this->services[\Viserio\Bridge\Twig\Extension\SessionExtension::class] = new \Viserio\Bridge\Twig\Extension\SessionExtension(($this->services[\Viserio\Contract\Session\Store::class] ?? $this->get(\Viserio\Contract\Session\Store::class)));
    }

    /**
     * @return \Viserio\Bridge\Twig\Extension\TranslatorExtension
     */
    protected function get1d0d0383d495697b8928cf9fdffa849c0a5ff16e8613700d3c711a38db24421b(): \Viserio\Bridge\Twig\Extension\TranslatorExtension
    {
        return $this->services[\Viserio\Bridge\Twig\Extension\TranslatorExtension::class] = new \Viserio\Bridge\Twig\Extension\TranslatorExtension(($this->services[\Viserio\Contract\Translation\TranslationManager::class] ?? $this->get(\Viserio\Contract\Translation\TranslationManager::class)));
    }

    /**
     * @return \Viserio\Component\Console\Application
     */
    protected function get206058a713a7172158e11c9d996f6a067c294ab0356ae6697060f162e057445a(): \Viserio\Component\Console\Application
    {
        $this->services[\Viserio\Component\Console\Application::class] = $instance = new \Viserio\Component\Console\Application();

        $instance->setContainer($this);

        if ($this->has(\Symfony\Component\Console\CommandLoader\CommandLoaderInterface::class)) {
            $instance->setCommandLoader(($this->services[\Symfony\Component\Console\CommandLoader\CommandLoaderInterface::class] ?? $this->getce817e8bdc75399a693ba45b876c457a0f7fd422258f7d4eabc553987c2fbd31()));
        }

        return $instance;
    }

    /**
     * @return array
     */
    protected function getdbce155f9c0e95dbd4bfbfaadab27eb79915789fa80c6c65068ccf60c9ef9e18(): array
    {
        return [];
    }
}