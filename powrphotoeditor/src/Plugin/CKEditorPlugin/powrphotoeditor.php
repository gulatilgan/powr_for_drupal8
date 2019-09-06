<?php

namespace Drupal\powrphotoeditor\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrphotoeditor" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrphotoeditor",
 *   label = @Translation("powrphotoeditor Plugin")
 * )
 */
class powrphotoeditor extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrphotoeditor') . '/js/plugins/powrphotoeditor/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_photoeditor_icon = drupal_get_path('module', 'powrphotoeditor') . '/js/plugins/powrphotoeditor/icons/photoeditor.png';
    $powr_icon = drupal_get_path('module', 'powrphotoeditor') . '/js/plugins/powrphotoeditor/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_photoeditor' => [
        'label' => t('POWr Photo Editor'),
        'image' => $powr_photoeditor_icon,
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
