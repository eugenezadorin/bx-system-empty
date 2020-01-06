<?php

namespace Machaon\Components;

use \CBitrixComponent;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * Компонент-пустышка. Просто подключает определенный шаблон.
 * Удобно использовать для фронтенд-компонентов, когда вся логика в js, а данные берутся из внешних источников.
 */
class SystemEmptyComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
