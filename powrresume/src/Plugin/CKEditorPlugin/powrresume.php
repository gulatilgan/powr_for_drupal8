<?php

namespace Drupal\powrresume\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrresume" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrresume",
 *   label = @Translation("powrresume Plugin")
 * )
 */
class powrresume extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrresume') . '/js/plugins/powrresume/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_resume_icon = drupal_get_path('module', 'powrresume') . '/js/plugins/powrresume/icons/resume.png';
    $powr_icon = drupal_get_path('module', 'powrresume') . '/js/plugins/powrresume/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_resume' => [
        'label' => t('POWr Resume'),
        'image' => $powr_resume_icon,
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
