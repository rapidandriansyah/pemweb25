<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Product as ModelProduct;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Product extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total of Product', ModelProduct::count())
            ->description('Total of Product')
            ->color('danger')
            ->icon('heroicon-o-shopping-bag')
        ];
    }
}
