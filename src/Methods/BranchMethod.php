<?php

namespace ZpgRtf\Methods;

use League\JsonGuard\Validator;
use League\JsonReference\Dereferencer;
use ZpgRtf\Objects\BranchObject;

/**
 * The branch method allows you to update a branch.
 */
class BranchMethod extends AbstractMethod
{
    /** @var string */
    const UPDATE_SCHEMA = 'http://realtime-listings.webservices.zpg.co.uk/docs/v1.2/schemas/branch/update.json';

    /**
     * @return \GuzzleHttp\Psr7\Response
     */
    public function update(BranchObject $branchObject)
    {
        return $this->validateAndSend(self::UPDATE_SCHEMA, 'branch/update', $branchObject);
    }
}
