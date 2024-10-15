<?php

namespace App\Services;

use Illuminate\Support\Facades\Log as LaravelLog;

class Log
{
    public static function info($message, array $context = [])
    {
        LaravelLog::info($message, $context);
    }

    public static function error($message, array $context = [])
    {
        LaravelLog::error($message, $context);
    }

    public static function debug($message, array $context = [])
    {
        LaravelLog::debug($message, $context);
    }

    public static function warning($message, array $context = [])
    {
        LaravelLog::warning($message, $context);
    }

    public static function custom($level, $message, array $context = [])
    {
        LaravelLog::log($level, $message, $context);
    }
}
