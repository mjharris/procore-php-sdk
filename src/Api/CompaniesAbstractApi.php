<?php

declare(strict_types=1);

namespace MJHarris\Procore\Api;

use MJHarris\Procore\Client;
use MJHarris\Procore\Exception\ConfigurationException;

abstract class CompaniesAbstractApi extends AbstractApi
{
    public function __construct(Client $client, int $perPage = null, int $page = null)
    {
        if (! $client->getCompanyId()) {
            throw new ConfigurationException('Please set a company for this endpoint.');
        }
        parent::__construct($client, $perPage, $page);
    }
}
