<?php
namespace UpAssist\Neos\News\NodeTypePostprocessor;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Neos.Neos".            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use \Neos\Flow\Annotations as Flow;
use \Neos\ContentRepository\Domain\Model\NodeType;

/**
 * This Processor updates the PluginViews NodeType with the existing
 * Plugins and it's corresponding available Views
 */
class ArticleNodeTypePostprocessor implements \Neos\ContentRepository\NodeTypePostprocessor\NodeTypePostprocessorInterface
{

    /**
     * Returns the processed Configuration
     *
     * @param \Neos\ContentRepository\Domain\Model\NodeType $nodeType (uninitialized) The node type to process
     * @param array $configuration input configuration
     * @param array $options The processor options
     * @return void
     */
    public function process(NodeType $nodeType, array &$configuration, array $options)
    {
        $now = new \DateTime();
        $configuration['properties']['publicationDate']['defaultValue'] = $now->format('d-m-Y');
    }
}
