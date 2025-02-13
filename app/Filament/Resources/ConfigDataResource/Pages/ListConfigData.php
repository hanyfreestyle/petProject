<?php
namespace App\Filament\Resources\ConfigDataResource\Pages;

use App\Filament\Resources\ConfigDataResource;
use App\Models\ConfigData;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Components\Tab;


class ListConfigData extends ListRecords {
    protected static string $resource = ConfigDataResource::class;

    protected function getHeaderActions(): array {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTabs(): array {
        // جلب جميع القيم الفريدة لـ cat_id من قاعدة البيانات
        $categories = ConfigData::query()->select('cat_id')->distinct()->pluck('cat_id');

        // إنشاء التبويبات تلقائيًا بناءً على القيم
        $tabs = [
            'All' => Tab::make()
                ->badge(ConfigData::query()->count()),
        ];

        foreach ($categories as $category) {
            $tabs[$category] = Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('cat_id', $category))
                ->badge(ConfigData::query()->where('cat_id', $category)->count())
                ->label(ucwords(str_replace('_', ' ', $category))); // تحسين التسمية
        }

        return $tabs;
    }

    protected function getTabsContainerAttributes(): array {
        return [
            'class' => 'flex flex-wrap gap-2 justify-center', // ✅ منع الاسكرول وجعل التبويبات مرتبة
        ];
    }



}
