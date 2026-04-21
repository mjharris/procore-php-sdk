<?php

declare(strict_types=1);

namespace MJHarris\Procore\Api\Core\Company;

use MJHarris\Procore\Api\AbstractApi;
use MJHarris\Procore\Api\ApiInterface;

class Companies extends AbstractApi implements ApiInterface
{
    public function list(array $params = [], array $headers = [])
    {
        $resolver = $this->createOptionsResolver();

        return $this->get('companies', $resolver->resolve($params), $headers);
    }
}
