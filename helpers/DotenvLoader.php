<?php

declare(strict_types=1);

namespace app\helpers;

use Dotenv\Dotenv;

class DotenvLoader
{
    private const ENV_FILE_LOCAL = '.env.local';
    private const ENV_FILE = '.env';

    public static function load()
    {
        $rootPath = '../';
        if (file_exists($rootPath.DIRECTORY_SEPARATOR.self::ENV_FILE)) {
            $dotenv = new Dotenv($rootPath, self::ENV_FILE);
            $dotenv->load();
        }
        if (file_exists($rootPath.DIRECTORY_SEPARATOR.self::ENV_FILE_LOCAL)) {
            $dotenv = new Dotenv($rootPath, self::ENV_FILE_LOCAL);
            $dotenv->overload();
        }
    }
}
