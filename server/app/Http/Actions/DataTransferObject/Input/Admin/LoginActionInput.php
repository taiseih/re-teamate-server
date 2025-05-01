<?php

declare(strict_types=1);

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class LoginActionInput extends Data
{
    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {}
};
