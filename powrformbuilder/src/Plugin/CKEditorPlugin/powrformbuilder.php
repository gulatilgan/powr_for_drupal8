<?php

namespace Drupal\powrformbuilder\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrformbuilder" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrformbuilder",
 *   label = @Translation("powrformbuilder Plugin")
 * )
 */
class powrformbuilder extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrformbuilder') . '/js/plugins/powrformbuilder/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_formbuilder_icon = drupal_get_path('module', 'powrformbuilder') . '/js/plugins/powrformbuilder/icons/formbuilder.png';
    $powr_icon = drupal_get_path('module', 'powrformbuilder') . '/js/plugins/powrformbuilder/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_formbuilder' => [
        'label' => t('POWr Form Builder'),
        'image' => $powr_formbuilder_icon,
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
