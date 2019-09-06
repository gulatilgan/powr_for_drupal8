<?php

namespace Drupal\powrphotofilter\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrphotofilter" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrphotofilter",
 *   label = @Translation("powrphotofilter Plugin")
 * )
 */
class powrphotofilter extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrphotofilter') . '/js/plugins/powrphotofilter/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_photofilter_icon = drupal_get_path('module', 'powrphotofilter') . '/js/plugins/powrphotofilter/icons/photofilter.png';
    $powr_icon = drupal_get_path('module', 'powrphotofilter') . '/js/plugins/powrphotofilter/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_photofilter' => [
        'label' => t('POWr Photo Filter'),
        'image' => $powr_photofilter_icon,
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
