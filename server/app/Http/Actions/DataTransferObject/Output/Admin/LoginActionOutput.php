<?php

namespace app\Http\Actions\DataTransferObject\Output\Admin;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class LoginActionOutput extends Data
{
    // NOTE:ここ情報追加
    public function __construct(
        public readonly string $token
    ) {}
}
