<?php

namespace inquid\envia;

use inquid\envia\models\Track;

/**
 * This is just an example.
 */
class EnviaHandler extends HttpClientV3
{
    /**
     * @return array|Track[]|Error
     */
    public function getTracking($trackingNumbers)
    {
        try {
            return $this->sendRequest('post', 'generaltrack', ['trackingNumbers' => $trackingNumbers]);
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }
}
