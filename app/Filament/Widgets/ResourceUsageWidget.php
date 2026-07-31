<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class ResourceUsageWidget extends Widget
{
    protected static string $view = 'filament.widgets.resource-usage-widget';

    protected int | string | array $columnSpan = 1;
}
