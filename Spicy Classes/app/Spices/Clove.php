<?php

declare(strict_types=1);

namespace App\Spices;

use App\Spice;

class Clove extends Spice
{
    private string $type;

    public function getType(): string
    {
        return $this->type;
    }
}