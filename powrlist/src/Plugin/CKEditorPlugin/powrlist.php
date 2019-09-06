<?php

namespace Drupal\powrlist\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrlist" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrlist",
 *   label = @Translation("powrlist Plugin")
 * )
 */
class powrlist extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrlist') . '/js/plugins/powrlist/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_list_icon = drupal_get_path('module', 'powrlist') . '/js/plugins/powrlist/icons/list.png';
    $powr_icon = drupal_get_path('module', 'powrlist') . '/js/plugins/powrlist/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_list' => [
        'label' => t('POWr List'),
        'image' => $powr_list_icon,
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
