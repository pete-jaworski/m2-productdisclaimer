<?php
namespace PiotrJaworski\ProductDisclaimer\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Install Data Setup class 
 *
 * @author Piotr Jaworski
 */
class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    
    /**
     * Block name
     */
    const BLOCK_NAME = 'piotrjaworski_disclaimer_block';
    
    
    /**
     * @var \Magento\Cms\Model\BlockFactory 
     */
    private $block;
    
    
    /**
     * Constructor
     * 
     * @param \Magento\Cms\Model\BlockFactory $block
     */
    public function __construct(\Magento\Cms\Model\BlockFactory $block)
    {
        $this->block = $block;
    }
    
    
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */      
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $cmsBlockData = [
            'title'         => 'Product Disclaimer',
            'identifier'    => self::BLOCK_NAME,
            'content'       => "<h1>Write your custom cms block content.......</h1>",
            'is_active'     => 1,
            'stores'        => [0],
            'sort_order'    => 0
        ];
 
        $this->block->create()->setData($cmsBlockData)->save();
    }    
}
