<?php

namespace Drupal\powrrecommendedproducts\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrrecommendedproducts" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrrecommendedproducts",
 *   label = @Translation("powrrecommendedproducts Plugin")
 * )
 */
class powrrecommendedproducts extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrrecommendedproducts') . '/js/plugins/powrrecommendedproducts/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_recommendedproducts_icon = drupal_get_path('module', 'powrrecommendedproducts') . '/js/plugins/powrrecommendedproducts/icons/recommendedproducts.png';
    $powr_icon = drupal_get_path('module', 'powrrecommendedproducts') . '/js/plugins/powrrecommendedproducts/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_recommendedproducts' => [
        'label' => t('POWr Recommended Products'),
        'image' => $powr_recommendedproducts_icon,
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
