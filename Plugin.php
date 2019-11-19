<?php namespace OnionCreative\ContentEditor;

use System\Classes\PluginBase;

/**
 * ContentEditor Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Content Editor',
            'description' => 'Front-end content editor',
            'author'      => 'Onion Creative',
            'icon'        => 'icon-edit'
        ];
    }

    public function registerComponents()
    {
        return [
            'OnionCreative\ContentEditor\Components\ContentEditor' => 'contenteditor',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Content Editor Settings',
                'description' => 'Manage main editor settings.',
                'icon'        => 'icon-cog',
                'class'       => 'OnionCreative\ContentEditor\Models\Settings',
                'order'       => 500,
                'permissions' => ['onioncreative.contenteditor.access_settings']
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'onioncreative.contenteditor.access_settings' => [
                'tab' => 'Content Editor',
                'label' => 'Access content editor settings'
            ],
        ];
    }
}
