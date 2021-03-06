<?php

namespace gpustat\lib;

/**
 * Class Error
 * @package gpustat\lib
 */
class Error
{
    // Unknown Errors Placeholder
    const UNKNOWN                   = ['code' => 100, 'message' => 'An unkown error occurred'];
    // Configuration Errors
    const CONFIG_SETTINGS_NOT_VALID = ['code' => 200, 'message' => 'Configuration file contains invalid settings.'];
    // Vendor Utility Errors
    const VENDOR_UTILITY_NOT_FOUND  = ['code' => 300, 'message' => 'Vendor utility not found.'];
    const VENDOR_DATA_NOT_RETURNED  = ['code' => 300, 'message' => 'Vendor command returned no data.'];
    // JSON Response Errors
    const BAD_ARRAY_DATA            = ['code' => 400, 'message' => 'Bad array data received.'];

    /**
     * Error constructor.
     *
     * @param array $error
     * @param string $extra_info
     */
    public function __construct(array $error = self::UNKNOWN, string $extra_info = '')
    {
        die('Error' . ES . $error['code'] . ':' . ES . $error['message'] . $extra_info);
    }
}