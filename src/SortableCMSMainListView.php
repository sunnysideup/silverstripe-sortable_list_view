<?php

namespace Sunnysideup\SortableListView;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\GridField\GridField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

/**
 * Class \Sunnysideup\SortableListView\SortableCMSMainListView
 *
 * @property CMSMain|SortableCMSMainListView $owner
 */
class SortableCMSMainListView extends Extension
{
    public function updateListView($listView)
    {
        $fields = $listView->Fields();
        if ($fields) {
            $field = $fields->dataFieldByName('Page');
            if ($field && $field instanceof GridField) {
                $config = $field->getConfig();
                $config->addComponent(new GridFieldSortableRows('Sort'));
            }
        }
    }
}
