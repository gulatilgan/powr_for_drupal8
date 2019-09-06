<?php

namespace Drupal\powrholidaycountdown\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrholidaycountdown" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrholidaycountdown",
 *   label = @Translation("powrholidaycountdown Plugin")
 * )
 */
class powrholidaycountdown extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrholidaycountdown') . '/js/plugins/powrholidaycountdown/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_holidaycountdown_icon = drupal_get_path('module', 'powrholidaycountdown') . '/js/plugins/powrholidaycountdown/icons/holidaycountdown.png';
    $powr_icon = drupal_get_path('module', 'powrholidaycountdown') . '/js/plugins/powrholidaycountdown/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_holidaycountdown' => [
        'label' => t('POWr Holiday Countdown'),
        'image' => $powr_holidaycountdown_icon,
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
