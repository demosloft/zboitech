<?php
namespace MailPoetVendor\Carbon\Exceptions;
if (!defined('ABSPATH')) exit;
use Exception;
use InvalidArgumentException as BaseInvalidArgumentException;
class ParseErrorException extends BaseInvalidArgumentException implements InvalidArgumentException
{
 public function __construct($expected, $actual, $help = '', $code = 0, Exception $previous = null)
 {
 $actual = $actual === '' ? 'data is missing' : "get '{$actual}'";
 parent::__construct(\trim("Format expected {$expected} but {$actual}\n{$help}"), $code, $previous);
 }
}
