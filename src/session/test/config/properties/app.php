<?php
declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
return [
    'version' => '1.0',
    'autoInitBean' => true,
    'components' => [
        'custom' => [
            'Swoft\\Session' => BASE_PATH . '/../src',
        ],
    ],
];
