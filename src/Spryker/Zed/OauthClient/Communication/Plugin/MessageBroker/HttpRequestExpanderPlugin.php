<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OauthClient\Communication\Plugin\MessageBroker;

use Generated\Shared\Transfer\MessageAttributesTransfer;
use Generated\Shared\Transfer\HttpRequestTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\HttpChannelMessageConsumerRequestExpanderPluginInterface;

/**
 * @method \Spryker\Zed\OauthClient\Business\OauthClientFacadeInterface getFacade()
 * @method \Spryker\Zed\OauthClient\OauthClientConfig getConfig()
 */
class HttpRequestExpanderPlugin extends AbstractPlugin implements HttpChannelMessageConsumerRequestExpanderPluginInterface
{
    /**
     * {@inheritDoc}
     * - Retrieves an access token from an access token provider by AccessTokenRequestTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\HttpRequestTransfer $httpRequestTransfer
     *
     * @return \Generated\Shared\Transfer\HttpRequestTransfer
     */
    public function expand(HttpRequestTransfer $httpRequestTransfer): HttpRequestTransfer
    {
        return $this->getFacade()->expandHttpRequest($httpRequestTransfer);
    }
}
