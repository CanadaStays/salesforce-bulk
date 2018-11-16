<?php

namespace SalesforceBulk\Concerns;

use Exception;

trait HasValidXml
{
    /**
     * @param string $value XML body.
     *
     * @throws Exception
     *
     * @return string
     */
    public function disallowDoctype($value)
    {
        if (stripos(substr($value, 0, 1000), '!DOCTYPE') !== false) {
            throw new Exception("XML DOCTYPE declaration not allowed.");
        }

        return $value;
    }
}
