<?php

namespace Drupal\powrmicroblog\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmicroblog" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmicroblog",
 *   label = @Translation("powrmicroblog Plugin")
 * )
 */
class powrmicroblog extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmicroblog') . '/js/plugins/powrmicroblog/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_microblog_icon = drupal_get_path('module', 'powrmicroblog') . '/js/plugins/powrmicroblog/icons/microblog.png';
    $powr_icon = drupal_get_path('module', 'powrmicroblog') . '/js/plugins/powrmicroblog/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_microblog' => [
        'label' => t('POWr Microblog'),
        'image' => $powr_microblog_icon,
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
