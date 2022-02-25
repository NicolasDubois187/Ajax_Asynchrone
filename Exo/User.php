<?php

declare(strict_types=1);

class USer
{
  private int $id;
  private string $name;
  private string $phone;
  private string $email;
  private string $address;


  public function __construct(
    string $p_name,
    string $p_phone,
    string $p_email,
    string $p_address,

  ) {
    $this->name = ucfirst(strtolower($p_name));
    $this->phone = $p_phone;
    $this->email = $p_email;
    $this->address = $p_address;
  }
}
public function getId(): int
{
  return $this->id;
}

public function setId(int $value): void
{
  $this->id = $value;
}
public function getName(): string
{
  return ucfirst(strtolower($this->name));
}
public function setLastname(string $name)
{
  $this->name = $name;
}