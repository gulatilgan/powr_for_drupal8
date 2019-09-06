<?php

namespace Drupal\powreventgallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powreventgallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powreventgallery",
 *   label = @Translation("powreventgallery Plugin")
 * )
 */
class powreventgallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'powreventgallery') . '/js/plugins/powreventgallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_eventgallery_icon = drupal_get_path('module', 'powreventgallery') . '/js/plugins/powreventgallery/icons/eventgallery.png';
    $powr_icon = drupal_get_path('module', 'powreventgallery') . '/js/plugins/powreventgallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_eventgallery' => [
        'label' => t('POWr Event Gallery'),
        'image' => $powr_eventgallery_icon,
      ]
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
