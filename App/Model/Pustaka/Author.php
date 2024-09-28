<?php

namespace App\Model\Pustaka;

class Author {
    public string $name;
    public string $description;

    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type): array {
        if ($type === 'summary') {
            return [
                'name' => $this->name
            ];
        }
        else if ($type === 'full') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
        else {
            return [];
        }
    }
}