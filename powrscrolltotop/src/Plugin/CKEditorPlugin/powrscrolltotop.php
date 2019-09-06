<?php

namespace Drupal\powrscrolltotop\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrscrolltotop" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrscrolltotop",
 *   label = @Translation("powrscrolltotop Plugin")
 * )
 */
class powrscrolltotop extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrscrolltotop') . '/js/plugins/powrscrolltotop/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_scrolltotop_icon = drupal_get_path('module', 'powrscrolltotop') . '/js/plugins/powrscrolltotop/icons/scrolltotop.png';
    $powr_icon = drupal_get_path('module', 'powrscrolltotop') . '/js/plugins/powrscrolltotop/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_scrolltotop' => [
        'label' => t('POWr Scroll To Top'),
        'image' => $powr_scrolltotop_icon,
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
