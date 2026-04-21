<?php

declare(strict_types=1);

namespace MJHarris\Procore\Api\Core\Company;

use MJHarris\Procore\Api\CompaniesAbstractApi;
use MJHarris\Procore\HttpClient\Util\UriBuilder;

class CompanyUploads extends CompaniesAbstractApi
{
    public function create(array $params = [], array $headers = [])
    {
        $uri = $this->buildUri();

        return $this->post($uri, $params, $headers);
    }

    /**
     * Build the uploads URI from the given parts.
     *
     * @param string ...$parts
     *
     * @return string
     */
    protected function buildUri(string ...$parts)
    {
        return UriBuilder::build('companies', (string) $this->getClient()->getCompanyId(), 'uploads', ...$parts);
    }
}
