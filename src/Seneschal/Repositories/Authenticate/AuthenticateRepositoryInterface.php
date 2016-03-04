<?php
/**
 * AuthenticateRepositoryInterface.php
 * Created by anonymous on 05/01/16 17:57.
 */

namespace Onderdelen\Seneschal\Repositories\Authenticate;

use Onderdelen\Seneschal\DataTransferObjects\BaseResponse;

/**
 * Interface AuthenticateRepositoryInterface
 * @package Onderdelen\Seneschal\Repositories\Authenticate
 */
interface AuthenticateRepositoryInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function store($data);

    /**
     * @return mixed
     */
    public function destroy();
}