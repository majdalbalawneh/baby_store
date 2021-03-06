<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
use MailPoetVendor\Symfony\Component\Validator\Exception\InvalidArgumentException;
class Uuid extends Constraint
{
 public const TOO_SHORT_ERROR = 'aa314679-dac9-4f54-bf97-b2049df8f2a3';
 public const TOO_LONG_ERROR = '494897dd-36f8-4d31-8923-71a8d5f3000d';
 public const INVALID_CHARACTERS_ERROR = '51120b12-a2bc-41bf-aa53-cd73daf330d0';
 public const INVALID_HYPHEN_PLACEMENT_ERROR = '98469c83-0309-4f5d-bf95-a496dcaa869c';
 public const INVALID_VERSION_ERROR = '21ba13b4-b185-4882-ac6f-d147355987eb';
 public const INVALID_VARIANT_ERROR = '164ef693-2b9d-46de-ad7f-836201f0c2db';
 protected static $errorNames = [self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR', self::TOO_LONG_ERROR => 'TOO_LONG_ERROR', self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR', self::INVALID_HYPHEN_PLACEMENT_ERROR => 'INVALID_HYPHEN_PLACEMENT_ERROR', self::INVALID_VERSION_ERROR => 'INVALID_VERSION_ERROR', self::INVALID_VARIANT_ERROR => 'INVALID_VARIANT_ERROR'];
 // Possible versions defined by RFC 4122
 public const V1_MAC = 1;
 public const V2_DCE = 2;
 public const V3_MD5 = 3;
 public const V4_RANDOM = 4;
 public const V5_SHA1 = 5;
 public $message = 'This is not a valid UUID.';
 public $strict = \true;
 public $versions = [self::V1_MAC, self::V2_DCE, self::V3_MD5, self::V4_RANDOM, self::V5_SHA1];
 public $normalizer;
 public function __construct($options = null)
 {
 parent::__construct($options);
 if (null !== $this->normalizer && !\is_callable($this->normalizer)) {
 throw new InvalidArgumentException(\sprintf('The "normalizer" option must be a valid callable ("%s" given).', \is_object($this->normalizer) ? \get_class($this->normalizer) : \gettype($this->normalizer)));
 }
 }
}
