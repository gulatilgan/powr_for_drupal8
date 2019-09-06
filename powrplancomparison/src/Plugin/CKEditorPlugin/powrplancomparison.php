<?php

namespace Drupal\powrplancomparison\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrplancomparison" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrplancomparison",
 *   label = @Translation("powrplancomparison Plugin")
 * )
 */
class powrplancomparison extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrplancomparison') . '/js/plugins/powrplancomparison/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_plancomparison_icon = drupal_get_path('module', 'powrplancomparison') . '/js/plugins/powrplancomparison/icons/plancomparison.png';
    $powr_icon = drupal_get_path('module', 'powrplancomparison') . '/js/plugins/powrplancomparison/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_plancomparison' => [
        'label' => t('POWr Plan Comparison'),
        'image' => $powr_plancomparison_icon,
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
