<?php

namespace Hanafalah\ModuleLabRadiology\Contracts;

interface Laboratorium extends ModuleLabRadiology
{
  public function getLaboratories(mixed $conditionals = null);
  public function booting(): self;
}
