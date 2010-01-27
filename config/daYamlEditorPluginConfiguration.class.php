<?php

/**
 * daYamlEditorPlugin configuration.
 * 
 * @package     daYamlEditorPlugin
 * @subpackage  config
 * @author      dalexandre
 */
class daYamlEditorPluginConfiguration extends sfPluginConfiguration
{
  const VERSION = '0.1.2-BETA';

  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    if ($this->configuration instanceof sfApplicationConfiguration)
    {
      $this->configuration->getConfigCache()->registerConfigHandler('config/daYamlEditor.yml', 'daYamlEditorConfigHandler');
    }
  }
}
