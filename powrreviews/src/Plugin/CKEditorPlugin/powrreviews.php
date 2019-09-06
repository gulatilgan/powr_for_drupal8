<?php

namespace Drupal\powrreviews\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrreviews" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrreviews",
 *   label = @Translation("powrreviews Plugin")
 * )
 */
class powrreviews extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrreviews') . '/js/plugins/powrreviews/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_reviews_icon = drupal_get_path('module', 'powrreviews') . '/js/plugins/powrreviews/icons/reviews.png';
    $powr_icon = drupal_get_path('module', 'powrreviews') . '/js/plugins/powrreviews/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_reviews' => [
        'label' => t('POWr Reviews'),
        'image' => $powr_reviews_icon,
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
