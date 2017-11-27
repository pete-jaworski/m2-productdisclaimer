<?php
namespace PiotrJaworski\ProductDisclaimer\Block;

/**
 * Block class of ProductDisclaimer
 *
 * @author Piotr Jaworski
 */
class ProductDisclaimer extends \Magento\Framework\View\Element\Template
{
    
    /**
     *
     * @var \Magento\Cms\Api\BlockRepositoryInterface 
     */
    private $blockRepository;
    
    
    /**
     * Constructor 
     * 
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Cms\Api\BlockRepositoryInterface $blockRepository
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,      
        \Magento\Cms\Api\BlockRepositoryInterface $blockRepository,
        array $data = []
    ){
        $this->blockRepository = $blockRepository;
        parent::__construct($context, $data);
    }
    
    
    /**
     * Return Block's content
     * 
     * @return string
     */
    public function getBlockContent()
    {
        return $this->blockRepository->getById(\PiotrJaworski\ProductDisclaimer\Setup\InstallData::BLOCK_NAME)->getContent();
    }
    
}
