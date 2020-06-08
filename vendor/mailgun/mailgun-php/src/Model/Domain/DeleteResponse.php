<?php

declare(strict_types=1);

/*
 * Copyright (C) 2013 Mailgun
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Mailgun\Model\Domain;

use Mailgun\Model\ApiResponse;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class DeleteResponse implements ApiResponse
{
    private $message;
    private $error;

    private function __construct()
    {
    }

    public static function create(array $data): self
    {
        $model = new self();
        $model->message = $data['message'] ?? null;
        $model->error = $data['error'] ?? null;

        return $model;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getError(): ?string
    {
        return $this->error;
    }
}
