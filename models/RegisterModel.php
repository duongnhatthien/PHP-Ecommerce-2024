<?php
namespace app\models;
use app\core\Model;
class RegisterModel extends Model
{

    public string $email;
    public string $password;
    public string $cpassword;

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, self::RULE_REQUIRE_DIGIT, self::RULE_REQUIRE_LOWERCASE, self::RULE_REQUIRE_SPECIAL_CHAR, self::RULE_REQUIRE_UPPERCASE, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'cpassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, "match" => "password"]],
        ];
    }
}