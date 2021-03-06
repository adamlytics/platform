<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Test\Api\Context;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Api\Context\AdminApiSource;

class AdminApiSourceTest extends TestCase
{
    public function testPermissions(): void
    {
        $apiSource = new AdminApiSource(null, null);
        $apiSource->addPermissions([
            ['resource' => 'product', 'privilege' => 'list'],
            ['resource' => 'order', 'privilege' => 'delete'],
        ]);

        static::assertTrue($apiSource->isAllowed('product', 'list'));
        static::assertTrue($apiSource->isAllowed('order', 'delete'));

        static::assertFalse($apiSource->isAllowed('product', 'delete'));
        static::assertFalse($apiSource->isAllowed('order', 'list'));
    }
}
