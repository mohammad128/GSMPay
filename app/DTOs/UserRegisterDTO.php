<?php

namespace App\DTOs;

readonly class UserRegisterDTO
{
    public function __construct(
        public string $mobile,
        public string $password,
    ) {}

    public function toArray(): array
    {
        return [
            'mobile' => $this->mobile,
            'password' => $this->password,
        ];
    }

    public static function fromRequest(array $data): UserRegisterDTO
    {
        return new UserRegisterDTO(
            mobile: $data['mobile'],
            password: $data['password']
        );
    }
}
