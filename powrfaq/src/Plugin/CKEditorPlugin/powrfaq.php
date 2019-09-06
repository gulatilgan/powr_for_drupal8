<?php

namespace Drupal\powrfaq\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrfaq" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrfaq",
 *   label = @Translation("powrfaq Plugin")
 * )
 */
class powrfaq extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrfaq') . '/js/plugins/powrfaq/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_faq_icon = drupal_get_path('module', 'powrfaq') . '/js/plugins/powrfaq/icons/faq.png';
    $powr_icon = drupal_get_path('module', 'powrfaq') . '/js/plugins/powrfaq/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_faq' => [
        'label' => t('POWr FAQ'),
        'image' => $powr_faq_icon,
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
