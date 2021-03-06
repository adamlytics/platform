<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Customer\SalesChannel;

use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SalesChannel\SuccessResponse;

/**
 * This route is used to change the password of a logged-in user
 * The required fields are: "password", "newPassword" and "newPasswordConfirm"
 */
interface ChangePasswordRouteInterface
{
    public function change(RequestDataBag $requestDataBag, SalesChannelContext $context): SuccessResponse;
}
