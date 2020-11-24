<?php

namespace Sunnysideup\SortableListView;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\GridField\GridField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class SortableCMSMainListView extends Extension
{
    public function updateListView($listView)
    {
        $fields = $listView->Fields();
        if ($fields) {
            $field = $fields->dataFieldByName('Page');
            if ($field && $field instanceof GridField) {
                $config = $field->getConfig();
                if ($config) {
                    $config->addComponent(new GridFieldSortableRows('Sort'));
                }
            }
        }
    }
}
