<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class SystemOverviewWidget extends Widget
{
    protected static string $view = 'filament.widgets.system-overview-widget';

    protected int | string | array $columnSpan = 1;
}
