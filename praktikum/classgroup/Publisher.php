<?php

class Publisher {
    public string $name;
    public string $address;
    private string $phone;

    public function __construct(string $name, string $address, string $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function showDetails(): array {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->getPhone()
        ];
    }
}
?>