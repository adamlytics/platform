<?php declare(strict_types=1);

namespace Shopware\Core\Content\Product\SalesChannel\Listing;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\Request;

/**
 * This route is used for the product listing in the cms pages
 */
interface ProductListingRouteInterface
{
    public function load(string $categoryId, Request $request, SalesChannelContext $salesChannelContext): ProductListingRouteResponse;
}
