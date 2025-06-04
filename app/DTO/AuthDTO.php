<?php

namespace App\DTO;

use Illuminate\Http\UploadedFile;

class AuthDTO
{
    public ?string $name;
    public ?string $last_name;
    public string $phone;
    public ?UploadedFile $avatar;

    public function __construct(string $phone, ?string $name = null, ?string $last_name = null, ?UploadedFile $avatar = null)
    {
        $this->phone = $phone;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->avatar = $avatar;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['phone'], 
            $data['name'] ?? null,
            $data['last_name'] ?? null,
            $data['avatar'] ?? null
        );
    }
}
