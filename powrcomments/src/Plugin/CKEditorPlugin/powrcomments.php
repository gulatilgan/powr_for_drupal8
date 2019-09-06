<?php

namespace Drupal\powrcomments\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrcomments" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrcomments",
 *   label = @Translation("powrcomments Plugin")
 * )
 */
class powrcomments extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrcomments') . '/js/plugins/powrcomments/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_comments_icon = drupal_get_path('module', 'powrcomments') . '/js/plugins/powrcomments/icons/comments.png';
    $powr_icon = drupal_get_path('module', 'powrcomments') . '/js/plugins/powrcomments/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_comments' => [
        'label' => t('POWr Comments'),
        'image' => $powr_comments_icon,
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
