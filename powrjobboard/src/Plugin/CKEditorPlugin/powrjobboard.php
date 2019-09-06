<?php

namespace Drupal\powrjobboard\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrjobboard" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrjobboard",
 *   label = @Translation("powrjobboard Plugin")
 * )
 */
class powrjobboard extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrjobboard') . '/js/plugins/powrjobboard/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_jobboard_icon = drupal_get_path('module', 'powrjobboard') . '/js/plugins/powrjobboard/icons/jobboard.png';
    $powr_icon = drupal_get_path('module', 'powrjobboard') . '/js/plugins/powrjobboard/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_jobboard' => [
        'label' => t('POWr Job Board'),
        'image' => $powr_jobboard_icon,
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
