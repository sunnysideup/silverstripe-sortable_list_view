<?php

class SortableCMSMainListView extends Extension
{

    function updateListView($listView)
    {
        $fields = $listView->Fields();
        if($fields) {
            $field = $fields->dataFieldByName('Page');
            if($field && $field instanceof GridField) {
                $config = $field->getConfig();
                if($config) {
                    $config->addComponent(new GridFieldSortableRows('Sort'));
                }
            }
        }
    }
}
